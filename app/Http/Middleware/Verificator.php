<?php

namespace App\Http\Middleware;

use Closure;

class Verificator
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
        if (auth()->user()->isAdmin == 3) {
            return $next($request);
        }

        return redirect('/verificator')->with('error', 'You have not verificator access');
    }
}
