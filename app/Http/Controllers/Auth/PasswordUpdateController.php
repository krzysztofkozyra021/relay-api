<?php

declare(strict_types=1);

namespace Relay\Http\Controllers\Auth;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Relay\Http\Requests\Auth\UpdatePasswordRequest;

class PasswordUpdateController extends Controller
{
    public function update(UpdatePasswordRequest $request): JsonResponse
    {
        $request->user()->update([
            "password" => $request->validated()["password"],
        ]);

        return new JsonResponse(["message" => "Hasło zostało pomyślnie zmienione."]);
    }
}
