<?php

namespace App\Http\Controllers;

// require Carbon\autoload.php;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;
use Illuminate\Support\Carbon;


class BusController extends Controller
{
    public function index()
    {
        $data_bus=\App\models\bus_model::all();
        return view('bus',['data_bus'=>$data_bus]);
    }

    //menyimpan data permohonan pemakaian bus
    public function bussimpandepan()
    {
        return view('/bussimpandepan');
    }

    // layanan peminjaman bus depan_masyarakat
    public function createdepan(Request $request)
    {
        \App\models\bus_model::create($request->all());
        return redirect('/layanandepan');
    }

    public function cetak($id)
    {
        //mereview ke model
        $data_bus=\App\models\bus_model::find($id);

        //mempersiapkan tampilan berdasarkan id
        $pdf=PDF::loadview('export.tampilbus',['data_bus'=>$data_bus]);

        //menampilkan data dalam bentuk pdf
        return $pdf->stream();
    }

}
