<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bus_model extends Model
{
    use HasFactory;
    protected $table='bus';
    protected $fillable=['nama','nik','umur','pekerjaan','alamat','rangka','tujuan','dari','hingga'];
    
    // menjadikan field "dari" dan field "hingga " menjadi format tanggal atau Timestamp
    protected $dates=[
        'created_at',
        'updated_at',
        'dari',
        'hingga'
    ];
}
