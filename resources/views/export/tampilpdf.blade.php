@extends('layouts.kop')
@section('content')

{{-- memberikan judul cetak tamu --}}
<h2 style="text-align: center"><u> DATA TAMU DINAS PERHUBUNGAN</h2></u>
{{-- <img src="../../../public/admin/assets/img/" width="855" height="146" alt="KOP Dishub" longdesc="http://dshub.batangharikab.go.id" /> --}}
<table class="table" style="width: 100% align:center">
    <thead>
        <tr>
            <th style="text-align: left">NAMA </th>
            <th style="text-align: left">:</th>
            <th style="text-align: left">{{ $tamu->nama }}</th>
            <th style="text-align: left">TANGGAL </th>
            <th style="text-align: left">:</th>
            <th style="text-align: left">{{ $tamu->tanggal }}</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="text-align: left"> NIK </td>
            <td>:</td>
            <td style="text-align: left">{{ $tamu->nik }}</td>
            <td style="text-align: left"> PEKERJAAN </td>
            <td style="text-align: left">:</td>
            <td style="text-align: left">{{ $tamu->pekerjaan }}</td>
        </tr>
        <tr>
            <td style="text-align: left">ALAMAT</td>
            <td style="text-align: left">:</td>
            <td style="text-align: left" colspan="2">{{ $tamu->alamat }}</td>
            <td></td>
        </tr>
        <tr>
            <td style="text-align: left">MAKSUD KUNJUNGAN</td>
            <td style="text-align: left">:</td>
            <td style="text-align: left">{{ $tamu->tujuan }}</td>
            <td style="text-align:left">RIWAYAT PERJALANAN</td>
            <td>:</td>
            <td style="text-align:left">{{ $tamu->riwayat}}</td>
        </tr>
    </tbody>
</table>
<br>
<br>
<table style="width: 100%">
    <tr>
        <th style="text-align: center"> Yang Berkunjung</th>
        <th></th>
        <th style="text-align: center">Yang Menerima</th>
    </tr>
    <tr>
        <th style="text-align: center">&nbsp;</th>
        <th style="text-align: center">&nbsp;</th>
    </tr>
    <tr>
        <th style="text-align: center">&nbsp;</th>
        <th style="text-align: center">&nbsp;</th>
    </tr>
    <tr>
        <th style="text-align: center">&nbsp;</th>
        <th style="text-align: center">&nbsp;</th>
    </tr>

    {{-- menentukan panjang garis bawah hr  yaitu 50%   --}}
    <th style="text-align: center">
        <hr width="50%">
    </th>
    <th></th>
    <th style="text-align: center">
        <hr width="50%">
    </th>
    </tr>
</table>
<br>
<hr>
@endsection