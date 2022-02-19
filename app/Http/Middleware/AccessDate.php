<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;

class AccessDate
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @param \DateTime $openDate
     * * @param \DateTime $closeDate
     * @return mixed
     */
    public function handle(Request $request, Closure $next,$isForbidden, $openDate, $closeDate = null)
    {

        if (Carbon::now() < Carbon::createFromFormat('d-m-Y H:i:s', $openDate)||($closeDate&&Carbon::now() > Carbon::createFromFormat('d-m-Y H:i:s', $closeDate))) {
            if($isForbidden=='true'){
                return abort('403');
            }
            return redirect(route('coming-soon'));
        }
        return $next($request);
    }
}
