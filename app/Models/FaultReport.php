<?php

declare(strict_types=1);

namespace Relay\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Relay\Models\Concerns\LogsActivity;

/**
 * @property int $id
 * @property string $device_uuid
 * @property string $title
 * @property ?string $description
 * @property ?string $reported_by
 * @property ?string $contact
 * @property string $status
 * @property ?Carbon $resolved_at
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class FaultReport extends Model
{
    use HasFactory;
    use LogsActivity;

    protected $fillable = [
        "device_uuid",
        "title",
        "description",
        "reported_by",
        "contact",
        "status",
        "resolved_at",
    ];

    public function device(): BelongsTo
    {
        return $this->belongsTo(Device::class, "device_uuid", "uuid");
    }

    protected function casts(): array
    {
        return [
            "resolved_at" => "datetime",
        ];
    }
}
