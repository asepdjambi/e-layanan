<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class agenda_model extends Model
{
    use HasFactory;

    protected $table = 'agenda';

    protected $fillable = [
        'id',
        'tanggal',
        'pegawai_id',
        'kegiatan',
        'tgl_a',
        'tgl_s',
        'tempat',
        'created_at',
        'updated_at'
    ];

    protected $dates = [
        'tanggal',
        'tgl_a',
        'tgl_s',
        'created_at',
        'updated_at'
    ];

    public function pegawai()
    {
        return $this->belongsTo('App\models\pegawai');
    }
}
