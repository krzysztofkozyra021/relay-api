<?php

declare(strict_types=1);

namespace Relay\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFaultReportRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            "title" => ["required", "string", "max:255"],
            "description" => ["nullable", "string"],
            "reported_by" => ["nullable", "string", "max:255"],
            "contact" => ["nullable", "string", "max:255"],
        ];
    }
}
