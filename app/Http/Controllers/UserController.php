<?php

declare(strict_types=1);

namespace Relay\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Relay\Models\User;

class UserController extends Controller
{
    public function index(Request $request): Collection
    {
        Gate::authorize("viewAny", User::class);

        return User::all();
    }
}
