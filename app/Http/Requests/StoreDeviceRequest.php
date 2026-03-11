<?php

declare(strict_types=1);

namespace Relay\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDeviceRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            "uuid" => "nullable|uuid|unique:devices,uuid",
            "name" => "required|string|max:255",
            "type" => "required|string|max:255",
            "model" => "nullable|string|max:255",
            "brand" => "nullable|string|max:255",
            "serial_number" => "nullable|string|max:255",
            "location" => "required|string|max:255",
            "installation_date" => "nullable|date",
            "notes" => "nullable|string",
        ];
    }
}
