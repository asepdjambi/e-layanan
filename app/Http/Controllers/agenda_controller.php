<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use App\Models\agenda_model;
use App\Models\pegawai_model;
use Carbon\Carbon;

class agenda_controller extends Controller
{
    public function index()
    {
        //ambil data dari database
        $agenda = agenda_model::all();

        //tampilkan data diweb
        return view('agenda', ['agenda' => $agenda]);
    }

    public function tambah()
    {
        $pegawai = DB::table('pegawai')->get();
        return view('agendainput', ['pegawai' => $pegawai]);
    }

    public function simpan(Request $request)
    {
        agenda_model::create([
            'pegawai_id' => $request->pegawai_id,
            'tanggal'=>$request->tanggal,
            'kegiatan' => $request->kegiatan,
            'tgl_a' => Carbon::parse($request->tgl_a)->format('Y-m-d'),
            'tgl_s' => Carbon::parse($request->tgl_s)->format('Y-m-d'),
            'tempat' => $request->tempat,

        ]);

        return redirect('/agenda');
    }
}
