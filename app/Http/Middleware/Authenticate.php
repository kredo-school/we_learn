<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

use function PHPUnit\Framework\returnSelf;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson())
        {
            if ($request->routeIs('teacher.*'))
                return route('teacher.login'); // Teacher
            else if ($request->routeIs('learner.*'))
                return route('learner.login'); // Learner
            else
                return route('exchange.login'); // Exchange
        }
    }
}
