<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use \App\Enums\UserType;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user_role = $request->user()->role;
        if ($user_role === UserType::ADMINISTRATOR or $user_role === UserType::CLERK)
        {
            return $next($request);   
        }
        return redirect('');
    }
}
