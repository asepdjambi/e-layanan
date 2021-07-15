<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class surat_model extends Model
{
    use HasFactory;
    protected $table = 'surat';
    protected $fillable = ['nomor', 'asal', 'pengantar', 'perihal', 'tgl_surat', 'tgl_terima', 'penerima'];
    protected $dates = [
        'tgl_surat',
        'tgl_terima',
        'created_at',
        'updated_at'
    ];
}
