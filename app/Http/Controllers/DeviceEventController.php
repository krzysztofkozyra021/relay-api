<?php

declare(strict_types=1);

namespace Relay\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Relay\Models\Device;

class DeviceEventController
{
    public function __invoke(string $uuid): JsonResponse
    {
        $device = Device::where('uuid', $uuid)->firstOrFail();

        $installationEvent = DB::table('devices')
            ->select([
                'created_at as date',
                DB::raw("'install' as type"),
                DB::raw("'Instalacja urządzenia' as title"),
                DB::raw("'Pierwszy montaż i uruchomienie w systemie.' as description"),
                DB::raw("'System' as user")
            ])
            ->where('id', $device->id);

        $faultEvents = DB::table('fault_reports')
            ->select([
                'created_at as date',
                DB::raw("'fault' as type"),
                DB::raw("'Zgłoszono usterkę' as title"),
                'title as description',
                DB::raw("COALESCE(reported_by, 'Anonim') as user")
            ])
            ->where('device_uuid', $device->uuid);

        $fixedEvents = DB::table('fault_reports')
            ->select([
                'resolved_at as date',
                DB::raw("'fixed' as type"),
                DB::raw("'Naprawiono usterkę' as title"),
                DB::raw("'Zgłoszenie zostało pomyślnie zamknięte i oznaczone jako rozwiązane.' as description"),
                DB::raw("'Serwisant' as user")
            ])
            ->where('device_uuid', $device->uuid)
            ->whereNotNull('resolved_at');

        $events = $installationEvent
            ->unionAll($faultEvents)
            ->unionAll($fixedEvents)
            ->orderBy('date', 'desc')
            ->get();

        $formattedEvents = $events->map(fn($event) => [
            'date' => $event->date,
            'type' => $event->type,
            'title' => $event->title,
            'description' => $event->description,
            'user' => $event->user,
        ]);

        return response()->json($formattedEvents);
    }
}