<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserTypeCheck
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
        if ($type == 'bionix_peserta' || $type == 'member' || $type == 'academy_peserta') {
            if (Auth::user()->userable_type == "App\Models\Member") {
                if ($type == 'bionix_peserta') {
                    if (!Auth::user()->userable->bionix_id) {
                        if (Auth::user()->userable->jenjang == 'Mahasiswa') {
                            return redirect()->to(route('register-college'));
                        } elseif (Auth::user()->userable->jenjang == 'Siswa SMA') {
                            return redirect()->to(route('register-student'));
                        }
                    }
                } elseif ($type == 'academy_peserta') {
                    if (!Auth::user()->userable->academy_id) {
                        return redirect()->to(route('peserta.choose-dashboard'));
                    }
                }
                return $next($request);
            }
        } elseif ($type == 'admin') {
            if (Auth::user()->userable_type == "App\Models\Admin") {
                return $next($request);
            }
        } elseif ($type == 'bionix_admin') {
            if (Auth::user()->userable_type == "App\Models\Admin" && (Auth::user()->userable->admin_type == "Bionix Admin" || Auth::user()->userable->admin_type == "Global Admin")) {
                return $next($request);
            }
        } elseif ($type == 'icon_admin') {
            if (Auth::user()->userable_type == "App\Models\Admin" && (Auth::user()->userable->admin_type == "ICON Admin" || Auth::user()->userable->admin_type == "Global Admin")) {
                return $next($request);
            }
        } elseif ($type == 'Mahasiswa' || $type == 'Siswa SMA') {
            if (Auth::user()->userable->jenjang == $type) {
                return $next($request);
            }
        }
        return abort(403);
    }
}
