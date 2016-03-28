<?php

namespace App\Http\Middleware;

use Closure;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;

class NeedsRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param   string   $role
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if(auth_has_role($role)) {
            return $next($request);
        }

        return redirect()->guest('login');
    }
}
