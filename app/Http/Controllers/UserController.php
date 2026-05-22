<?php

declare(strict_types=1);

namespace Relay\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Relay\Http\Requests\UpdateUserRequest;
use Relay\Models\User;

class UserController extends Controller
{
    public function index(Request $request): Collection
    {
        Gate::authorize("viewAny", User::class);

        return User::all();
    }

    public function update(UpdateUserRequest $request, User $user): User
    {
        Gate::authorize("update", $user);

        $validated = $request->validated();

        if (isset($validated["password"]) && $validated["password"] !== null) {
            $validated["password"] = Hash::make($validated["password"]);
        } else {
            unset($validated["password"]);
        }

        $user->update($validated);

        return $user;
    }

    public function destroy(Request $request, User $user): void
    {
        Gate::authorize("delete", $user);

        if ($request->user()->id === $user->id) {
            abort(400, "Nie możesz usunąć samego siebie.");
        }

        $user->delete();
    }
}
