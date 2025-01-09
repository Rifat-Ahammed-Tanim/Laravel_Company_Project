<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
   
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                if (Auth::check() && Auth::user()->role == 'admin') {
                    return redirect()->route('admin.dashbord');
                }
                if (Auth::check() && Auth::user()->role == 'recruiter') {
                    return redirect()->route('recruiter.account');
                }
                // return redirect(RouteServiceProvider::HOME);
                if (Auth::check() && Auth::user()->role == 'candidate') {
                    return redirect()->route('candidate.account');
                }
            }
        }

        return $next($request);
    }
}
