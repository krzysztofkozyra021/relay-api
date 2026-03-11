<?php

declare(strict_types=1);

namespace Relay\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Relay\Http\Requests\StoreDeviceRequest;
use Relay\Http\Requests\UpdateDeviceRequest;
use Relay\Models\Device;

class DeviceController extends Controller
{
    public function index(): Collection
    {
        return Device::all();
    }

    public function store(StoreDeviceRequest $request): Device
    {
        return Device::create($request->validated());
    }

    public function show(Device $device): Device
    {
        return $device;
    }

    public function update(UpdateDeviceRequest $request, Device $device): Device
    {
        $device->update($request->validated());

        return $device;
    }

    public function destroy(Device $device): void
    {
        $device->delete();
    }
}
