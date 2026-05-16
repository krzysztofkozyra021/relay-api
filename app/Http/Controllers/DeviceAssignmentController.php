<?php

declare(strict_types=1);

namespace Relay\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Relay\Models\Device;
use Relay\Models\User;

class DeviceAssignmentController extends Controller
{
    public function assign(Request $request, Device $device): JsonResponse
    {
        $this->requireAdmin($request);

        $request->validate([
            "user_id" => "required|integer|exists:users,id",
        ]);

        $device->users()->syncWithoutDetaching([$request->integer("user_id")]);

        return new JsonResponse(["message" => "Device assigned successfully."]);
    }

    public function unassign(Request $request, Device $device, User $user): JsonResponse
    {
        $this->requireAdmin($request);

        $device->users()->detach($user->id);

        return new JsonResponse(["message" => "Device unassigned successfully."]);
    }

    public function deviceUsers(Request $request, Device $device): Collection
    {
        $this->requireAdmin($request);

        return $device->users()->get(["users.id", "name", "email", "is_admin", "is_installer", "is_service"]);
    }

    public function userDevices(Request $request, User $user): Collection
    {
        $this->requireAdmin($request);

        return $user->devices;
    }

    private function requireAdmin(Request $request): void
    {
        /** @var User $user */
        $user = $request->user();

        if (!$user->is_admin) {
            abort(403, "Only admins can manage device assignments.");
        }
    }
}
