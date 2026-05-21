<?php

declare(strict_types=1);

namespace Relay\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AuditLog extends Model
{
    public $timestamps = false;
    protected $fillable = [
        "user_id",
        "action",
        "description",
        "model_type",
        "model_id",
        "payload",
        "ip_address",
        "user_agent",
        "created_at",
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    protected static function booted(): void
    {
        static::creating(function (AuditLog $log): void {
            $log->created_at ??= now();
        });
    }

    protected function casts(): array
    {
        return [
            "payload" => "array",
            "created_at" => "datetime",
        ];
    }
}
