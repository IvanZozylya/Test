<?php

namespace App\Http\Middleware;

use Closure;


class Mymiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
//        if ($request->route('page') != 'pages') {
//
//            return redirect('/');
//        }
//        echo "Mymiddleware ";
        $response = $next($request);
        echo "Mymiddleware ";
        return $response;
    }
}
