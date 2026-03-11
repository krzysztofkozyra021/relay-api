<?php

declare(strict_types=1);

namespace Relay\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDeviceRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            "name" => "sometimes|required|string|max:255",
            "type" => "sometimes|required|string|max:255",
            "model" => "nullable|string|max:255",
            "brand" => "nullable|string|max:255",
            "serial_number" => "nullable|string|max:255",
            "location" => "sometimes|required|string|max:255",
            "installation_date" => "nullable|date",
            "notes" => "nullable|string",
        ];
    }
}
