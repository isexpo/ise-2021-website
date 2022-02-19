<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureBotIpIsValid
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
        if (!$request->hasHeader('access-key')) {
            abort(403);
        }

        if ($request->header('access-key')!='bh)n4pJl[`Xm9*|$df*N,omxFDkv}`-#}L@m7pY"@_"L=mliLK7T(#|FQq&{:D|'){
            abort(403);
        }

        return $next($request);
    }
}
