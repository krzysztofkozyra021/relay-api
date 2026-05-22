<?php

declare(strict_types=1);

namespace Relay\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDeviceInstructionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            "instruction_url" => "nullable|url|max:2048",
        ];
    }
}
