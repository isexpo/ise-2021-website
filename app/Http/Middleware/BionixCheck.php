<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BionixCheck
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
        if (Auth::user()->userable_type == "App\Models\Member") {
            if ($type == 'profil_terverifikasi') {
                if (Auth::user()->userable->bionix->profile_verif_status == 'Terverifikasi') {
                    return $next($request);
                }
            } elseif ($type == 'pembayaran_terverifikasi') {
                if (Auth::user()->userable->bionix->payment_verif_status == 'Terverifikasi') {
                    return $next($request);
                }
            } elseif ($type == 'unregistered') {
                if (!Auth::user()->userable->bionix_id) {
                    return $next($request);
                }
            } elseif ($type == 'Penyisihan 1' || $type == 'Penyisihan 2' || $type == 'Penyisihan' || $type == 'Semifinal' || $type == 'Final') {
                if (Auth::user()->userable->bionix->competition_round == $type) {
                    return $next($request);
                }
            }
        }
        return abort(403);
    }
}
