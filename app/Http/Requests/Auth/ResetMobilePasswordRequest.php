<?php

declare(strict_types=1);

namespace Relay\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class ResetMobilePasswordRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            "email" => ["required", "email", "exists:users,email"],
            "pin" => ["required", "digits:6"],
            "password" => ["required", "confirmed", Password::defaults()],
        ];
    }
}
