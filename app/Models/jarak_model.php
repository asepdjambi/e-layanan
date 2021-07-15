<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jarak_model extends Model
{
    use HasFactory;
    protected $table='jarak';

    protected $fillable=['tgl','nama','nik','pekerjaan','alamat','dari','hingga'];

    protected $dates=[
        'created_at',
        'updated_at',
        'tgl'
    ];
}
