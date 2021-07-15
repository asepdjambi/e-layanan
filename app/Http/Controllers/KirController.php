<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\models\kir_model;
use PDF;

class KirController extends Controller
{
    public function index()
    {
        $datakir=kir_model::all();
        return view('/kir',['datakir'=>$datakir]);
    }


    public function simpan(Request $request)
    {
        // menyimpan hasil entry
        // kir_model::create($request->all());

            $datakir= new \App\models\kir_model;
            $datakir->no=$request->no;
            $datakir->tgl=$request->tgl;
            $datakir->nomor=$request->nomor;
            $datakir->nama=$request->nama;
            $datakir->alamat=$request->alamat;
            // menghapus titik pada angka saat akan disimpan
            // sehingga tetap menjadi angka
            $datakir->uji=str_replace('.','',$request->uji);
            $datakir->merk=$request->merk;
            $datakir->type=$request->type;
            $datakir->tahun=$request->tahun;
            $datakir->landasan=$request->landasan;
            $datakir->mesin=$request->mesin;
            $datakir->save();



        // kemballi ke tampila awal kir
        return redirect('/kir');
    }

    public function cetak($id)
    {
    // mencari id pemohon
    $datakir=kir_model::find($id);

    // menampilkan hasil pencarian ke bentuk pdf
    $pdf=PDF::loadview('export.tampilkir',['datakir'=>$datakir]);
    return $pdf->stream();

    }
}
