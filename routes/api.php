<?php

declare(strict_types=1);

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Relay\Http\Controllers\Auth\GoogleAuthController;
use Relay\Http\Controllers\Auth\LoginController;
use Relay\Http\Controllers\Auth\MobilePasswordResetController;
use Relay\Http\Controllers\Auth\PasswordResetController;
use Relay\Http\Controllers\Auth\PasswordUpdateController;
use Relay\Http\Controllers\Auth\RegisterController;
use Relay\Http\Controllers\Auth\TwoFactorSetupController;
use Relay\Http\Controllers\Auth\TwoFactorDisableController;
use Relay\Http\Controllers\Auth\TwoFactorVerifyController;
use Relay\Http\Controllers\DeviceAssignmentController;
use Relay\Http\Controllers\DeviceController;
use Relay\Http\Controllers\DeviceEventController;
use Relay\Http\Controllers\FaultReportController;

Route::post("/register", [RegisterController::class, "register"]);
Route::post("/login", [LoginController::class, "login"])->name("login");
Route::post("/auth/google", [GoogleAuthController::class, "handleProviderCallback"]);
Route::post("/auth/2fa/verify", [TwoFactorVerifyController::class, "verify"]);

Route::post("/password/email", [PasswordResetController::class, "sendResetLinkEmail"]);
Route::post("/password/reset", [PasswordResetController::class, "reset"]);

Route::prefix("public")->group(function (): void {
    Route::post("/mobile/password/email", [MobilePasswordResetController::class, "sendPin"])->middleware("throttle:3,1"); 
    Route::post("/mobile/password/reset", [MobilePasswordResetController::class, "reset"])->middleware("throttle:5,1");
});

Route::get("/devices/{device}", [DeviceController::class, "show"]);
Route::get("/devices/{device}/events", DeviceEventController::class);
Route::post("/devices/{device}/faults", [FaultReportController::class, "store"]);

Route::middleware("auth:api")->group(function (): void {
    Route::get("/user", fn(Request $request): JsonResponse => new JsonResponse($request->user()));
    Route::post("/logout", [LoginController::class, "logout"]);
    Route::put("/user/password", [PasswordUpdateController::class, "update"]);

    Route::get("/faults", [FaultReportController::class, "index"]);
    Route::get("/faults/{fault}", [FaultReportController::class, "show"]);
    Route::patch("/faults/{fault}", [FaultReportController::class, "update"]);
    Route::get("/devices/{device}/faults", [FaultReportController::class, "deviceFaults"]);

    Route::post("/user/fcm-token", function (Request $request) {
        $validated = $request->validate([
            "fcm_token" => ["required", "string"],
        ]);
        $request->user()->update([
            "fcm_token" => $validated["fcm_token"],
        ]);

        return response()->json(["message" => "FCM token updated successfully."]);
    });

    Route::post("/auth/2fa/setup", [TwoFactorSetupController::class, "store"]);
    Route::post("/auth/2fa/disable", [TwoFactorDisableController::class, "disable"]);

    Route::apiResource("devices", DeviceController::class)->except(["show"]);

    Route::middleware("enforce.2fa")->group(function (): void {
        Route::post("/devices/generate-qr", [DeviceController::class, "storeWithQrCode"])->name("devices.generate_qr");
        Route::get("/devices/{device}/show-qr", [DeviceController::class, "qrCode"])->name("devices.show_qr");

        Route::post("/devices/{device}/assign", [DeviceAssignmentController::class, "assign"])->name("devices.assign");
        Route::delete("/devices/{device}/assign/{user}", [DeviceAssignmentController::class, "unassign"])->name("devices.unassign");
        Route::get("/devices/{device}/users", [DeviceAssignmentController::class, "deviceUsers"])->name("devices.users");
        Route::get("/users/{user}/devices", [DeviceAssignmentController::class, "userDevices"])->name("users.devices");
    });
});

Route::get('/ping', function () {
    return response()->json([
        'status' => 'ok',
        'message' => 'Backend is alive!'
    ], 200);
});

Route::get("/hello", fn(): JsonResponse => new JsonResponse(["message" => "Hello, World!"]));
