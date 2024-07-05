<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Models\Mahasiswa;

class CheckMahasiswa
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $userId = Auth::id();

        // Cek apakah user_id ada di tabel mahasiswa
        $mahasiswa = Mahasiswa::where('mhs_userid', $userId)->first();

        if ($mahasiswa) {
            // Jika ada, redirect ke halaman profile
            return redirect()->to(url('/updatepeserta/'.$mahasiswa->mhs_userid));
        } else {
            // Jika tidak ada, redirect ke halaman pemilihan paket
            return redirect()->to(url('/pilihanpaket'));
        }

        return $next($request);
    }
}

