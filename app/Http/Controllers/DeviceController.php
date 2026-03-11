<?php

declare(strict_types=1);

namespace Relay\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Response;
use Relay\Http\Requests\StoreDeviceRequest;
use Relay\Http\Requests\UpdateDeviceRequest;
use Relay\Models\Device;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

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

    public function storeWithQrCode(StoreDeviceRequest $request): Response
    {
        $device = Device::create($request->validated());

        return $this->qrCode($device);
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

    public function qrCode(Device $device): Response
    {
        $qrCode = QrCode::size(200)
            ->format("svg")
            ->generate($device->uuid);

        return response($qrCode)
            ->header("Content-Type", "image/svg+xml");
    }
}
