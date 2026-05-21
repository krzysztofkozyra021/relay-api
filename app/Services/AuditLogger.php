<?php

declare(strict_types=1);

namespace Relay\Services;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Relay\Models\AuditLog;
use Throwable;

class AuditLogger
{
    public static function log(
        string $action,
        string $description,
        ?string $modelType = null,
        mixed $modelId = null,
        ?array $payload = null,
        ?int $userId = null,
    ): void {
        if ($userId === null) {
            try {
                $userId = Auth::guard("api")->id();
            } catch (Throwable $e) {
            }
        }

        AuditLog::create([
            "user_id" => $userId,
            "action" => $action,
            "description" => $description,
            "model_type" => $modelType,
            "model_id" => $modelId ? (string)$modelId : null,
            "payload" => $payload,
            "ip_address" => Request::ip(),
            "user_agent" => Request::userAgent(),
        ]);
    }
}
