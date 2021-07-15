<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class truk_model extends Model
{
    use HasFactory;
    protected $table = 'truk';

    protected $fillable = [
        'no',
        'tgl',
        'nomor',
        'nama',
        'alamat',
        'uji',
        'merk',
        'type',
        'tahun',
        'landasan',
        'mesin',
        'no_srut',
        'panjang_u',
        'lebar_u',
        'tinggi_u',
        'roh',
        'foh',
        'jsumbu',
        'sumbu1',
        'sumbu2',
        'sumbu3',
        'qutama',
        'panjang_b',
        'lebar_b',
        'tinggi_b',
        'volume1',
        'beratjenis',
        'bahan'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'tgl'
    ];
}
