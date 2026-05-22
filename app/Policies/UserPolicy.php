<?php

declare(strict_types=1);

namespace Relay\Policies;

use Relay\Models\User;

class UserPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->is_admin;
    }
}
