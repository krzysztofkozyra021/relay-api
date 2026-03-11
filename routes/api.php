<?php

declare(strict_types=1);

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Relay\Http\Controllers\Auth\LoginController;
use Relay\Http\Controllers\DeviceController;

Route::post("/login", [LoginController::class, "login"]);

Route::middleware("auth:sanctum")->group(function (): void {
    Route::get("/user", fn(Request $request): JsonResponse => new JsonResponse($request->user()));
    Route::post("/logout", [LoginController::class, "logout"]);

    Route::apiResource("devices", DeviceController::class);
    Route::post("/devices/generate-qr", [DeviceController::class, "storeWithQrCode"])->name("devices.generate_qr");
    Route::get("/devices/{device}/show-qr", [DeviceController::class, "qrCode"])->name("devices.show_qr");
});

Route::get("/hello", fn(): JsonResponse => new JsonResponse(["message" => "Hello, World!"]));

