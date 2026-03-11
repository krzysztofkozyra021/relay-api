<?php

declare(strict_types=1);

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Relay\Http\Controllers\DeviceController;

Route::middleware("auth:sanctum")->get("/user", fn(Request $request): JsonResponse => new JsonResponse($request->user()));
Route::get("/hello", fn(): JsonResponse => new JsonResponse(["message" => "Hello, World!"]));

Route::apiResource("devices", DeviceController::class);
Route::post("/devices/generate-qr", [DeviceController::class, "storeWithQrCode"])->name("devices.generate_qr");
Route::get("/devices/{device}/show-qr", [DeviceController::class, "qrCode"])->name("devices.show_qr");
