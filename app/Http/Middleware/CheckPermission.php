<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check()){
            if(Auth::user()->role == '1'){
                return $next($request); 
            }else{
                return redirect()->route('admin.dashboard')->with([
                    'error', "ban khong co quyen"
                ]);  // Redirect to admin dashboard if user is not an admin
            }
        }else{
            return redirect()->route('login')->with([
                'errors', "ban phai dang nhap truoc"
            ]);
        }
    }
}
