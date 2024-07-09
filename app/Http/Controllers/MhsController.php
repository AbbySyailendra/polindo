<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Mahasiswa;
use App\Models\Mahasiswa_keluarga;
use App\Models\Mahasiswa_sekolah;
use App\Models\MahasiswaTagihan;
use App\Models\generateInvoiceNumber;

class MhsController extends Controller
{
    public function showForm()
    {
        $userId = Auth::id();

        // Cek apakah user_id ada di tabel mahasiswa
        $mahasiswa = Mahasiswa::where('user_id', $userId)->first();

        return view('mahasiswa.form', compact('mahasiswa'));
    }

    public function showDetail($id)
    {
        $query = Mahasiswa::where('mhs_userid', $id)->first();
        $query2 = Mahasiswa_keluarga::where('mhs_userid', $id)->first();
        $query3 = Mahasiswa_sekolah::where('mhs_userid', $id)->first();
        return view('updatepeserta', compact('query', 'query2', 'query3'));
    }

    public function showDetailPembayaran(Request $request)
    {
        // Ambil user_id dari session
        $userId = session('id');
        echo $userId;
        if (!$userId) {
            return redirect()->route('login')->with('error', 'User ID tidak ditemukan dalam session.');
        }

        $data = DB::table('mahasiswa_tagihan')->where('mhs_userid', $userId)->first();

        if (!$data) {
            return redirect()->back()->with('error', 'Tagihan tidak ditemukan.');
        }

        return view('pembayaran', compact('data'));
    }


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

    public function InsertPremTest(Request $request)
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
                'mhs_paket' => 'P',
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
                    'mhs_email' => 'required|string',
                    'mhs_tmptlahir' => 'required|string',
                    'mhs_tgllahir' => 'required|date',
                    'mhs_gender' => 'required|string',
                    'mhs_agama' => 'required|string',
                    'mhs_notelp' => 'required|string',
                    'mhs_marriage' => 'required|string',
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
                        'mhs_email',
                        'mhs_tmptlahir',
                        'mhs_tgllahir',
                        'mhs_gender',
                        'mhs_agama',
                        'mhs_notelp',
                        'mhs_marriage',
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
                            'mhs_email' => $data['mhs_email'],
                            'mhs_tmptlahir' => $data['mhs_tmptlahir'],
                            'mhs_tgllahir' => $data['mhs_tgllahir'],
                            'mhs_jeniskelamin' => $data['mhs_gender'],
                            'mhs_agama' => $data['mhs_agama'],
                            'mhs_notelp' => $data['mhs_notelp'],
                            'mhs_marriage' => $data['mhs_marriage'],
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

                    $invoiceNumber = generateInvoiceNumber::generateInvoiceNumber();
                    echo $invoiceNumber;
                    DB::table('mahasiswa_tagihan')->updateOrInsert(
                        ['mhs_userid' => $data['user_id']],
                        [
                        'mhs_invno' => $invoiceNumber,
                        'mhs_invjml' => 300000,
                        'mhs_invcreated' => now(),
                        'mhs_invstatus' => 'Menunggu Pembayaran',
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
