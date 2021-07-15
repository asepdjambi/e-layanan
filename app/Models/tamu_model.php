<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tamu_model extends Model
{
    use HasFactory;
    protected $table='tamu';
    protected $fillable=['tanggal','nama','nik','alamat','pekerjaan','riwayat','tujuan'];

    protected $dates=[
        'tanggal',
        'updated_at',
        'created_at'
    ];
}
