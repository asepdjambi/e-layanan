<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auth_Model extends Model
{
    use HasFactory;
    protected $table='dt_login';

    protected $fillable = ['login'];
}
