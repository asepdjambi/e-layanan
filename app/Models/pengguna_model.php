<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengguna_model extends Model
{
    use HasFactory;
    protected $table = 'pengguna';
    protected $fillable = ['tanggal', 'nama', 'nik', 'alamat', 'pekerjaan', 'tgl_a', 'tgl_s', 'tujuan'];

    protected $dates = [
        'tanggal',
        'tgl_a', 
        'tgl_s',
        'updated_at',
        'created_at'
    ];
}
