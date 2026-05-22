<?php

declare(strict_types=1);

namespace Relay\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Relay\Http\Requests\StoreDeviceRequest;
use Relay\Http\Requests\UpdateDeviceInstructionRequest;
use Relay\Http\Requests\UpdateDeviceRequest;
use Relay\Models\Device;
use Relay\Models\User;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class DeviceController extends Controller
{
    public function index(Request $request): Collection
    {
        /** @var User $user */
        $user = $request->user();

        if ($user->is_admin) {
            return Device::all();
        }

        return $user->devices()->get()->makeHidden("pivot");
    }

    public function store(StoreDeviceRequest $request): Device
    {
        $device = Device::create($request->validated());

        /** @var User $user */
        $user = $request->user();

        if (!$user->is_admin) {
            $user->devices()->attach($device->uuid);
        }

        return $device;
    }

    public function storeWithQrCode(StoreDeviceRequest $request): Response
    {
        $device = Device::create($request->validated());

        /** @var User $user */
        $user = $request->user();

        if (!$user->is_admin) {
            $user->devices()->attach($device->uuid);
        }

        return $this->qrCode($device);
    }

    public function show(Request $request, Device $device): Device
    {
        return $device;
    }

    public function update(UpdateDeviceRequest $request, Device $device): Device
    {
        $this->authorizeAccess($request->user(), $device);
        $device->update($request->validated());

        return $device;
    }

    public function updateInstruction(UpdateDeviceInstructionRequest $request, Device $device): Device
    {
        $this->authorizeAccess($request->user(), $device);
        $device->update($request->validated());

        return $device;
    }

    public function destroy(Request $request, Device $device): void
    {
        $this->authorizeAccess($request->user(), $device);
        $device->delete();
    }

    public function qrCode(Device $device): Response
    {
        $qrCode = QrCode::size(200)
            ->format("svg")
            ->generate($device->uuid);

        return response($qrCode)
            ->header("Content-Type", "image/svg+xml");
    }

    private function authorizeAccess(User $user, Device $device): void
    {
        if ($user->is_admin) {
            return;
        }

        $assigned = $user->devices()->where("uuid", $device->uuid)->exists();

        if (!$assigned) {
            abort(403, "Nie masz dostępu do tego urządzenia.");
        }
    }
}
