<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;

class LecturerAuth
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
        $user = Auth::user();
        if (Auth::Check()) {

            if ($user->role_id == Config::get('constants.role_id.lecturer')) {
                $response = $next($request);
                $response->headers->set('Cache-Control', 'nocache, no-store, max-age=0, must-revalidate');
                $response->headers->set('Pragma', 'no-cache');
                $response->headers->set('Expires', 'Sat, 26 Jul 1997 05:00:00 GMT');
                return $response;
            } else {
                return redirect('login')->with('error', 'Wrong Login Details');
            }
        } else {
            return redirect('login')->with('error', 'Wrong Login Details');
        }
    }
}
