<?php

declare(strict_types=1);

namespace Relay\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Relay\Http\Requests\StoreFaultReportRequest;
use Relay\Models\Device;
use Relay\Models\FaultReport;
use Relay\Notifications\FaultReportedNotification;

class FaultReportController
{
    public function deviceInfo(string $uuid): JsonResponse
    {
        $device = Device::where("uuid", $uuid)->firstOrFail();

        return new JsonResponse($device->only(["uuid", "name", "type", "model", "brand", "location"]));
    }

    public function store(StoreFaultReportRequest $request, string $uuid): JsonResponse
    {
        $device = Device::where("uuid", $uuid)->firstOrFail();

        $fault = $device->faultReports()->create($request->validated());

        $device->users->each(fn($user) => $user->notify(new FaultReportedNotification($fault, $device)));

        return new JsonResponse($fault, 201);
    }

    public function index(Request $request): JsonResponse
    {
        $user = $request->user();
        $status = $request->query("status");

        $query = $user->is_admin
            ? FaultReport::with("device")
            : FaultReport::with("device")->whereIn(
                "device_uuid",
                $user->devices()->pluck("devices.uuid"),
            );

        if ($status !== null) {
            $query->where("status", $status);
        }

        return new JsonResponse($query->latest()->get());
    }

    public function show(Request $request, FaultReport $fault): JsonResponse
    {
        $this->authorizeAccess($request, $fault);

        return new JsonResponse($fault->load("device"));
    }

    public function update(Request $request, FaultReport $fault): JsonResponse
    {
        $this->authorizeAccess($request, $fault);

        $validated = $request->validate([
            "status" => ["required", "in:pending,in_progress,resolved"],
        ]);

        $fault->status = $validated["status"];
        $fault->resolved_at = $validated["status"] === "resolved" ? now() : null;
        $fault->save();

        return new JsonResponse($fault);
    }

    public function deviceFaults(Request $request, Device $device): JsonResponse
    {
        $user = $request->user();

        if (!$user->is_admin && !$user->devices()->where("devices.uuid", $device->uuid)->exists()) {
            return new JsonResponse(["message" => "Forbidden"], 403);
        }

        $faults = $device->faultReports()->latest()->get();

        return new JsonResponse($faults);
    }

    private function authorizeAccess(Request $request, FaultReport $fault): void
    {
        $user = $request->user();

        if (!$user->is_admin && !$user->devices()->where("devices.uuid", $fault->device_uuid)->exists()) {
            abort(403);
        }
    }
}
