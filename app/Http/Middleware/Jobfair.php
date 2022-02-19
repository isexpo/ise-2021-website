<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Jobfair
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $type)
    {
        if (\Auth::user()->userable->jenjang != 'Siswa SMA') {
            if ($type == 'unregistered') {
                if (\Auth::user()->userable->jobfair == null) {
                    return $next($request);
                }
            } elseif ($type == 'registered') {
                if (\Auth::user()->userable->jobfair != null) {
                    return $next($request);
                }
            }
        }
        return abort('403');
    }
}
