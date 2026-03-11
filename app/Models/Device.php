<?php

declare(strict_types=1);

namespace Relay\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;

    protected $fillable = [
        "uuid",
        "name",
        "type",
        "model",
        "brand",
        "serial_number",
        "location",
        "installation_date",
        "notes",
    ];

    protected function casts(): array
    {
        return [
            "installation_date" => "date",
        ];
    }
}
