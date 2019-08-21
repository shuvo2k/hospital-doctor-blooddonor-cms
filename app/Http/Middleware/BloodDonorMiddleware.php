<?php

namespace App\Http\Middleware;

use Closure;

class BloodDonorMiddleware
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
        $role = session('role');
        if ($role == 'blooddonor') {
            return $next($request);
        }
        else {
            return redirect()->route('signin');
        }
    }
}
