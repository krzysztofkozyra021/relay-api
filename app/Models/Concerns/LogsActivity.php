<?php

declare(strict_types=1);

namespace Relay\Models\Concerns;

use Relay\Services\AuditLogger;

trait LogsActivity
{
    protected static function bootLogsActivity(): void
    {
        static::created(function ($model): void {
            $payload = $model->getAttributes();
            unset($payload["password"], $payload["two_factor_secret"], $payload["two_factor_recovery_codes"]);

            AuditLogger::log(
                action: "created_" . strtolower(class_basename($model)),
                description: class_basename($model) . " created: " . ($model->name ?? $model->title ?? $model->getKey()),
                modelType: get_class($model),
                modelId: $model->getKey(),
                payload: $payload,
            );
        });

        static::updated(function ($model): void {
            $dirty = $model->getDirty();

            if (isset($dirty["password"])) {
                $dirty["password"] = "********";
            }

            if (isset($dirty["two_factor_secret"])) {
                $dirty["two_factor_secret"] = "********";
            }

            if (isset($dirty["two_factor_recovery_codes"])) {
                $dirty["two_factor_recovery_codes"] = "********";
            }

            $original = [];

            foreach (array_keys($dirty) as $key) {
                $original[$key] = $model->getOriginal($key);
            }

            if (isset($original["password"])) {
                $original["password"] = "********";
            }

            if (isset($original["two_factor_secret"])) {
                $original["two_factor_secret"] = "********";
            }

            if (isset($original["two_factor_recovery_codes"])) {
                $original["two_factor_recovery_codes"] = "********";
            }

            AuditLogger::log(
                action: "updated_" . strtolower(class_basename($model)),
                description: class_basename($model) . " updated: " . ($model->name ?? $model->title ?? $model->getKey()),
                modelType: get_class($model),
                modelId: $model->getKey(),
                payload: [
                    "old" => $original,
                    "new" => $dirty,
                ],
            );
        });

        static::deleted(function ($model): void {
            $payload = $model->getAttributes();
            unset($payload["password"], $payload["two_factor_secret"], $payload["two_factor_recovery_codes"]);

            AuditLogger::log(
                action: "deleted_" . strtolower(class_basename($model)),
                description: class_basename($model) . " deleted: " . ($model->name ?? $model->title ?? $model->getKey()),
                modelType: get_class($model),
                modelId: $model->getKey(),
                payload: $payload,
            );
        });
    }
}
