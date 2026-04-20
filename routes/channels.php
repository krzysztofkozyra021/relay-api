<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Broadcast;
use Relay\Models\User;

Broadcast::channel("App.Models.User.{id}", fn($user, $id) => (int)$user->id === (int)$id);

Broadcast::channel("test-channel.{id}", fn(User $user, $id) => (int)$user->id === (int)$id);
