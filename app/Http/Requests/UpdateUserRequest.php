<?php

declare(strict_types=1);

namespace Relay\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class UpdateUserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $user = $this->route("user");
        $userId = $user instanceof \Relay\Models\User ? $user->id : $user;

        return [
            "name" => ["sometimes", "required", "string", "max:255"],
            "email" => ["sometimes", "required", "string", "email", "max:255", "unique:users,email," . $userId],
            "password" => ["sometimes", "nullable", Password::defaults()],
            "is_admin" => ["sometimes", "required", "boolean"],
            "is_installer" => ["sometimes", "required", "boolean"],
            "is_service" => ["sometimes", "required", "boolean"],
        ];
    }
}
