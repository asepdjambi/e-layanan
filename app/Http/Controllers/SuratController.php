<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\surat_model;

class SuratController extends Controller
{
    public function index()
    {
        $surat = surat_model::all();
        return view('surattampil', ['surat' => $surat]);
    }

    public function tambah()
    {

        return view('surattambah');
    }

    public function create(Request $request)
    {
        //menyimpan data yang dientrykan
        \App\models\surat_model::create($request->all());
        return redirect('/surattampil')->with('sukses', 'Surat Berhasil Disimpan');
    }
}
