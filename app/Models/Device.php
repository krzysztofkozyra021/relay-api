<?php

declare(strict_types=1);

namespace Relay\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;
    use HasUuids;

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

    public function uniqueIds(): array
    {
        return ["uuid"];
    }

    public function getRouteKeyName(): string
    {
        return "uuid";
    }

    protected function casts(): array
    {
        return [
            "installation_date" => "date",
        ];
    }
}
