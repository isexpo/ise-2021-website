<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AcademyCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next,$type)
    {
        if ($type == 'profil_terverifikasi') {
            if (Auth::user()->userable_type == "App\Models\Member") {
                if (Auth::user()->userable->academy->profile_verif_status=='Terverifikasi') {
                    return $next($request);
                }
            }
        }
        elseif ($type == 'pembayaran_terverifikasi') {
            if (Auth::user()->userable_type == "App\Models\Member") {
                if (Auth::user()->userable->academy->payment_verif_status=='Terverifikasi') {
                    return $next($request);
                }
            }
        }
        elseif ($type == 'unregistered') {
            if (Auth::user()->userable_type == "App\Models\Member") {
                if (!Auth::user()->userable->academy_id) {
                    return $next($request);
                }
            }
        }
        return abort(403);
    }
}
