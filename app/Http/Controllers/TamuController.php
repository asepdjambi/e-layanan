<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;


class TamuController extends Controller
{
    public function index()
    {
        //akhirnya....untuk filter berdasarkan tanggal terbaru(hari ini)
        //bisa menggunakan tanggal atau created_at
        $data_tamu=DB::table('tamu')
                    ->whereDate('tanggal',now())
                    ->get();

    //   menggunakan lambang"=>" untuk pengambilan data 
      return view('tamu',['data_tamu'=>$data_tamu]);
    }

    public function simpan(Request $request )
    {
       //menyimpan data yang dientry
        \App\models\tamu_model::create($request->all());
                 
            // $pdf = PDF::loadview('tamu')->setPaper('A4','potrait');
            // return $pdf->stream();
            //kembali ke halaman kunjungan tamu
       return redirect('/tamu');
    }

public function tampil($id)
{
    // mengambil model data berdasarkan id
    // $tamu=\App\models\tamu_model::find($id);
    //  return ('export.tampilpdf',['tamu'=>$tamu]);

    // //  menampilkan pdf 
    //  $pdf = PDF::loadView('export.tampilkpdf');
    //   return $pdf->stream();
}


    public function cetak($id)
    {
        // merever ke view
        $tamu=\App\models\tamu_model::find($id);

        // dari tampilan export.tampilpdf langsung dijadikan pdf
        //berdasarkan id
        $pdf = PDF::loadView('export.tampilpdf',['tamu' =>$tamu]);

        // langsung tampilkan html
                // $pdf = PDF::loadHTML('<h1>Test</h1>');

        // langsung menampilkan pdf
        return $pdf->stream();
    }
}