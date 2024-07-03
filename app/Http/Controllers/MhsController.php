<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MhsController extends Controller
{
    public function InsertFreeTest(Request $request)
    {
        // Validasi input
        $request->validate([
            'user_id' => 'required|integer',
        ]);

        try {
            // Ambil user_id dengan status 'terbuka' dari database
            $userId = $request->input('user_id');

            // Menyimpan user_id ke dalam tabel tujuan
            DB::table('mahasiswa')->insert([
                'mhs_userid' => $userId,
                'mhs_paket' => 'F',
                'mhs_datecreate' => now(),
            ]);

            return response()->json(['success' => 'User berhasil disimpan']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Gagal menyimpan data: ' . $e->getMessage()], 500);
        }
    }
}
