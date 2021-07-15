<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class penggunacontroller extends Controller
{
    public function index()
    {
        //akhirnya....untuk filter berdasarkan tanggal terbaru(hari ini)
        //bisa menggunakan tanggal atau created_at
        $pengguna = DB::table('pengguna')
            ->get();

        //   menggunakan lambang"=>" untuk pengambilan data 
        return view('pengguna', ['pengguna' => $pengguna]);
    }

    public function simpan(Request $request)
    {
        //menyimpan data yang dientry
        \App\models\pengguna_model::create($request->all());

        // $pdf = PDF::loadview('tamu')->setPaper('A4','potrait');
        // return $pdf->stream();
        //kembali ke halaman kunjungan tamu
        return redirect('/pengguna');
    }

    public function tampil($id)
    {
        // mengambil model data berdasarkan id
        $pengguna = \App\models\pengguna_model::find($id);
        //  return ('export.tampilpdfjalan',['tamu'=>$tamu]);

        //  menampilkan pdf 
        $pdf = PDF::loadView('export.tampilpdfjalan', ['pengguna' => $pengguna]);
        return $pdf->stream();
    }


    public function cetak($id)
    {
        // merever ke view
        $pengguna = \App\models\pengguna_model::find($id);

        // dari tampilan export.tampilpdf langsung dijadikan pdf
        //berdasarkan id
        $pdf = PDF::loadView('export.tampilpdfjalan', ['pengguna' => $pengguna]);

        // langsung tampilkan html
        // $pdf = PDF::loadHTML('<h1>Test</h1>');

        // langsung menampilkan pdf
        return $pdf->stream();
    }
}
