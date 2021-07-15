<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\agenda_model;

class pegawai extends Model
{
    use HasFactory;
    protected $table = 'pegawai';

    protected $fillable = [
        'id',
        'nip',
        'nama',
        'jabatan',
        'created_at',
        'updated_at',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function agenda()
    {
        return $this->hasMany('App\models\agenda_model');
    }
}
