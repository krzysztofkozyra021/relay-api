<?php

declare(strict_types=1);

namespace Relay\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Relay\Models\Concerns\LogsActivity;

class Device extends Model
{
    use HasFactory;
    use HasUuids;
    use LogsActivity;

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

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, "device_user", "device_uuid", "user_id", "uuid", "id");
    }

    public function faultReports(): HasMany
    {
        return $this->hasMany(FaultReport::class, "device_uuid", "uuid");
    }

    protected function casts(): array
    {
        return [
            "installation_date" => "date",
        ];
    }
}
