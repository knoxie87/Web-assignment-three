<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckUser
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
        if ($request->session()->exists('user')) {

            return redirect('/');
        }
        else if ($request->session()->exists('admin')) {

            return $next($request);
        }else{
        return redirect('/');

        }



    }
}
