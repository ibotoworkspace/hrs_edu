<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class StudentAuth
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
        $user =Auth::user();
        if(Auth::Check()){

            if($user->role_id == '2'){
                $response = $next($request);
                    
                $response->headers->set('Cache-Control','nocache, no-store, max-age=0, must-revalidate');
                $response->headers->set('Pragma','no-cache');
                $response->headers->set('Expires','Sat, 26 Jul 1997 05:00:00 GMT');
                return $response;
            }
            
            else{
                return redirect('admin/login')->with('error', 'Wrong Login Details');
            }    
        }
        else{
            return redirect('admin/login')->with('error', 'Wrong Login Details');
        }   
    }
}
