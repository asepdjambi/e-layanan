<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Kir_model extends Model
{
    use HasFactory;
    // mendefenisikan tabel kir
    protected $table='kir';

    protected $fillable=[
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
        'mesin'
    ];

     protected $dates=[
        'created_at',
        'updated_at',
        'tgl'
    ];

}
