<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TabelMahasiswa extends Model
{
    use HasFactory;
    protected $table = 'tabel_mahasiswa';
    protected $fillable = [
        'nim',
        'nama_mahasiswa',
        'jenis_kelamin',
        'program_studi',
        'alamat',
    ];
    public $timestamps = false;
}
