<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        $user = Auth::user();

        if (!$user || !$user->role || !in_array($user->role->name, $roles)) {
            abort(403, 'Pristup nije dozvoljen.');
        }

        return $next($request);
    }
}
