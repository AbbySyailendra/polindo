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

    public function UpdateDataMhs(Request $request)
            {
                // Validasi input
                $request->validate([
                    'user_id' => 'required|integer',
                    'mhs_nama' => 'required|string',
                    'mhs_tmptlahir' => 'required|string',
                    'mhs_tgllahir' => 'required|date',
                    'mhs_gender' => 'required|string',
                    'mhs_agama' => 'required|string',
                    'mhs_alamat' => 'required|string',
                    'mhs_ayah' => 'nullable|string',
                    'mhs_ibu' => 'nullable|string',
                    'mhs_saudara1' => 'nullable|string',
                    'mhs_saudara2' => 'nullable|string',
                    'mhs_saudara3' => 'nullable|string',
                    'mhs_saudara4' => 'nullable|string',
                    'mhs_saudara5' => 'nullable|string',
                    'mhs_sekolah' => 'nullable|string',
                    'mhs_addsekolah' => 'nullable|string',
                    'mhs_jursekolah' => 'nullable|string',
                    'mhs_nis' => 'nullable|string',
                ]);

                try {
                    DB::beginTransaction();

                    // Ambil data dari request
                    $data = $request->only([
                        'user_id',
                        'mhs_nama',
                        'mhs_tmptlahir',
                        'mhs_tgllahir',
                        'mhs_gender',
                        'mhs_agama',
                        'mhs_alamat',
                        'mhs_ayah',
                        'mhs_ibu',
                        'mhs_saudara1',
                        'mhs_saudara2',
                        'mhs_saudara3',
                        'mhs_saudara4',
                        'mhs_saudara5',
                        'mhs_sekolah',
                        'mhs_addsekolah',
                        'mhs_jursekolah',
                        'mhs_nis',
                        'mhs_jurusan'
                    ]);

                    // Update data ke dalam tabel mahasiswa
                    DB::table('mahasiswa')
                        ->where('mhs_userid', $data['user_id'])
                        ->update([
                            'mhs_nama' => $data['mhs_nama'],
                            'mhs_tmptlahir' => $data['mhs_tmptlahir'],
                            'mhs_tgllahir' => $data['mhs_tgllahir'],
                            'mhs_jeniskelamin' => $data['mhs_gender'],
                            'mhs_agama' => $data['mhs_agama'],
                            'mhs_alamat' => $data['mhs_alamat'],
                            'mhs_jurusan' => $data['mhs_jurusan'],
                        ]);

                    // Update atau insert data ke tabel keluarga
                    DB::table('mahasiswa_keluarga')->updateOrInsert(
                        ['mhs_userid' => $data['user_id']],
                        [
                            'mhs_ayah' => $data['mhs_ayah'],
                            'mhs_ibu' => $data['mhs_ibu'],
                            'mhs_saudara1' => $data['mhs_saudara1'],
                            'mhs_saudara2' => $data['mhs_saudara2'],
                            'mhs_saudara3' => $data['mhs_saudara3'],
                            'mhs_saudara4' => $data['mhs_saudara4'],
                            'mhs_saudara5' => $data['mhs_saudara5'],
                        ]
                    );

                     // Update atau insert data ke tabel Sekolah
                    DB::table('mahasiswa_sekolah')->updateOrInsert(
                        ['mhs_userid' => $data['user_id']],
                        [
                            'mhs_namasekolah' => $data['mhs_sekolah'],
                            'mhs_alamatsekolah' => $data['mhs_addsekolah'],
                            'mhs_jurusansekolah' => $data['mhs_jursekolah'],
                            'mhs_nis' => $data['mhs_nis'],
                        ]
                    );

                    DB::commit();

                    return response()->json(['success' => 'Data mahasiswa berhasil diperbarui']);
                } catch (\Exception $e) {
                    DB::rollBack();
                    return response()->json(['error' => 'Gagal memperbarui data: ' . $e->getMessage()], 500);
                }
            }


}
