<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Illuminate\Support\Carbon;

class JarakController extends Controller
{
    public function index()
    {

        // menampilkan data pemohon dalam tabel
    $data_jarak=\App\models\jarak_model::all();
    return view('jarak',['data_jarak'=>$data_jarak]);

    }
    

    public function simpan(Request $request)
    {
        // menyimpan hasil entry
        \App\models\jarak_model::create($request->all());
        // menampilkan kembali tampilan jarak beserta hasil entry
        return redirect('/jarak');
    }

    public function cetak($id)
    {

        // mengambil data dari database tabel jarak
        // dengan mangambil data dari id
        $data_jarak=\App\models\jarak_model::find($id);

        // membuat halman pdf
        $pdf=PDF::loadview('export.tampiljarak',['data_jarak'=>$data_jarak]);
        // tampilkan dalam bentuk pdf
        return $pdf->stream();
    }
}
