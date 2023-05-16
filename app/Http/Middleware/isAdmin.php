<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class isAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if(Auth::check()) {
            if (in_array(Auth::user()->role_id, $roles)){
                return $next($request);
            }else{
                return back()->with('error', 'you are not allowed!');
            }
        }
        return redirect('/index-login')->with('notAllowed', 'please login before continue');
    }
}
