<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MahasiswaTagihan extends Model
{
    protected $table = 'mahasiswa_tagihan';

    protected $fillable = [
        'user_id',
        'nama',
        'nim',
        'jurusan',
        // dan kolom-kolom lainnya...
    ];

    // Definisikan relasi atau metode lainnya di sini
}
