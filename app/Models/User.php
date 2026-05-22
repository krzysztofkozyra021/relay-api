<?php

declare(strict_types=1);

namespace Relay\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use PHPOpenSourceSaver\JWTAuth\Contracts\JWTSubject;
use Relay\Models\Concerns\LogsActivity;

/**
 * @property string $name
 * @property string $email
 * @property string $password
 * @property Carbon $email_verified_at
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property ?string $provider
 * @property ?string $provider_id
 * @property bool $is_admin
 * @property bool $is_installer
 * @property bool $is_service
 * @property ?string $two_factor_secret
 * @property ?string $two_factor_recovery_codes
 * @property ?Carbon $two_factor_confirmed_at
 */
class User extends Authenticatable implements JWTSubject
{
    use HasApiTokens;
    use HasFactory;
    use Notifiable;
    use LogsActivity;

    protected $fillable = [
        "name",
        "email",
        "password",
        "provider",
        "provider_id",
        "is_admin",
        "is_installer",
        "is_service",
        "two_factor_secret",
        "two_factor_recovery_codes",
        "two_factor_confirmed_at",
        "fcm_token",
    ];
    protected $hidden = [
        "password",
        "remember_token",
        "two_factor_secret",
        "two_factor_recovery_codes",
    ];

    protected $appends = [
        'has_2fa_enabled'
    ];

    public function getHas2FaEnabledAttribute(): bool
    {
        return !is_null($this->two_factor_secret);
    }

    public function devices(): BelongsToMany
    {
        return $this->belongsToMany(Device::class, "device_user", "user_id", "device_uuid", "id", "uuid");
    }

    public function getJWTIdentifier(): mixed
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims(): array
    {
        return [];
    }

    protected function casts(): array
    {
        return [
            "email_verified_at" => "datetime",
            "password" => "hashed",
            "is_admin" => "boolean",
            "is_installer" => "boolean",
            "is_service" => "boolean",
        ];
    }
}
