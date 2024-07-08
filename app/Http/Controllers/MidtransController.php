<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Snap;

class MidtransController extends Controller
{
    public function index()
    {
        return view('midtrans.index');
    }

    public function createTransaction(Request $request)
    {
     // Set konfigurasi Midtrans
    Config::$serverKey = config('services.midtrans.server_key');
    Config::$isProduction = config('services.midtrans.is_production');
    Config::$isSanitized = config('services.midtrans.is_sanitized');
    Config::$is3ds = config('services.midtrans.is_3ds');

    // Ambil nomor invoice dari request
    $invoiceNo = $request->input('invoice_no');
    $tagihan = DB::table('mahasiswa_tagihan')->where('mhs_invno', $invoiceNo)->first();

    if (!$tagihan) {
        return response()->json(['error' => 'Invoice not found'], 404);
    }

    // Ambil data mahasiswa
    $userid = $request->input('userid');
    $datamhs = DB::table('mahasiswa')->where('mhs_userid', $userid)->first();

    if (!$datamhs) {
        return response()->json(['error' => 'Invoice not found'], 404);
    }

    // Buat array data transaksi
    $params = [
        'transaction_details' => [
            'order_id' => $tagihan->mhs_invno, // Nomor invoice
            'gross_amount' => $tagihan->mhs_invjml, // Nominal transaksi
        ],
        'customer_details' => [
            'first_name' => $datamhs->mhs_nama, // Nomor invoice
            'email' =>$datamhs->mhs_email,
            'phone' => $datamhs->mhs_notelp,
        ],
    ];

    try {
        // Buat transaksi
        $snapToken = Snap::getSnapToken($params);

        return response()->json(['snap_token' => $snapToken]);
    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()], 500);
    }
    }
}
