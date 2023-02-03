<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CekRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $role)
    {
        // if (in_array($request->user()->role,$roles)) {
        //     return $next($request);
        // }
        // return redirect('/');
        if(Auth::check() && Auth::user()->role == $role)
        {
            return $next($request);
        }
        return response()->json(["Tidak punya akses"]);
    }
}
