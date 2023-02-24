<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $roles = array_slice(func_get_args(), 2);
        
        if (\Auth::user() !=null) {
            foreach($roles as $role){
                $userRole = \Auth::user()->role;
                if($userRole == $role){
                    return $next($request);
                }
            }
        }
        
        // return redirect('/')->with('accessError', 'Tidak memiliki akses.');
        return abort(403,"Tidak memiliki akses.");
    }
}
