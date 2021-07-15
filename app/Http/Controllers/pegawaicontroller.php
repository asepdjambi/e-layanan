<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pegawai;

class pegawaicontroller extends Controller
{
    public function index()
    {
        $pegawai = pegawai::all();
        return view('pegawai',['pegawai'=>$pegawai]);
    }
}
