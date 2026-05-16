<?php

declare(strict_types=1);

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Relay\Http\Controllers\Auth\GoogleAuthController;
use Relay\Http\Controllers\Auth\LoginController;
use Relay\Http\Controllers\Auth\PasswordResetController;
use Relay\Http\Controllers\Auth\RegisterController;
use Relay\Http\Controllers\Auth\TwoFactorSetupController;
use Relay\Http\Controllers\Auth\TwoFactorVerifyController;
use Relay\Http\Controllers\DeviceAssignmentController;
use Relay\Http\Controllers\DeviceController;
use Relay\Http\Controllers\FaultReportController;

Route::post("/register", [RegisterController::class, "register"]);
Route::post("/login", [LoginController::class, "login"])->name("login");
Route::post("/auth/google", [GoogleAuthController::class, "handleProviderCallback"]);
Route::post("/auth/2fa/verify", [TwoFactorVerifyController::class, "verify"]);

Route::post("/password/email", [PasswordResetController::class, "sendResetLinkEmail"]);
Route::post("/password/reset", [PasswordResetController::class, "reset"]);

Route::prefix("public")->group(function (): void {
    Route::get("/devices/{uuid}", [FaultReportController::class, "deviceInfo"]);
    Route::post("/devices/{uuid}/faults", [FaultReportController::class, "store"]);
});

Route::middleware("auth:api")->group(function (): void {
    Route::get("/user", fn(Request $request): JsonResponse => new JsonResponse($request->user()));
    Route::post("/logout", [LoginController::class, "logout"]);

    Route::post("/auth/2fa/setup", [TwoFactorSetupController::class, "store"]);

    Route::middleware("enforce.2fa")->group(function (): void {
        Route::apiResource("devices", DeviceController::class);
        Route::post("/devices/generate-qr", [DeviceController::class, "storeWithQrCode"])->name("devices.generate_qr");
        Route::get("/devices/{device}/show-qr", [DeviceController::class, "qrCode"])->name("devices.show_qr");

        Route::post("/devices/{device}/assign", [DeviceAssignmentController::class, "assign"])->name("devices.assign");
        Route::delete("/devices/{device}/assign/{user}", [DeviceAssignmentController::class, "unassign"])->name("devices.unassign");
        Route::get("/devices/{device}/users", [DeviceAssignmentController::class, "deviceUsers"])->name("devices.users");
        Route::get("/users/{user}/devices", [DeviceAssignmentController::class, "userDevices"])->name("users.devices");

        Route::get("/faults", [FaultReportController::class, "index"]);
        Route::get("/faults/{fault}", [FaultReportController::class, "show"]);
        Route::patch("/faults/{fault}", [FaultReportController::class, "update"]);
        Route::get("/devices/{device}/faults", [FaultReportController::class, "deviceFaults"]);
    });
});

Route::get("/hello", fn(): JsonResponse => new JsonResponse(["message" => "Hello, World!"]));
