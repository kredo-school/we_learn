<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard)
        {
            if (Auth::guard($guard)->check())
            {
                switch($guard)
                {
                    case 'teachers':
                        return redirect()->route('teacher.home');
                    case 'learners':
                        return redirect()->route('learner.home');
                    default:
                        return redirect()->route('exchange.home');
                }
            }
        }

        return $next($request);
    }
}
