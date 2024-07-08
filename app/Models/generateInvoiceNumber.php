<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class GenerateInvoiceNumber extends Model
{
    // Fungsi untuk menghasilkan nomor tagihan
    public static function generateInvoiceNumber()
    {
        $prefix = 'INV';
        $date = now()->format('Ym'); // Tahun dan bulan, misalnya 202307
        $latestInvoice = DB::table('mahasiswa_tagihan')
                            ->where('mhs_invno', 'like', $prefix . $date . '%')
                            ->orderBy('mhs_invno', 'desc')
                            ->first();

        if ($latestInvoice) {
            $lastNumber = (int)substr($latestInvoice->mhs_invno, -5);
            $newNumber = str_pad($lastNumber + 1, 5, '0', STR_PAD_LEFT);
        } else {
            $newNumber = str_pad(1, 5, '0', STR_PAD_LEFT);
        }

        return $prefix . $date . $newNumber;
    }
}
