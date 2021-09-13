<?php

namespace App\Http\Middleware;

use Closure;

class RwRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = \Auth::user();
        if ($user->role != 2) {
            return abort(404);
        }

        return $next($request);
    }
}