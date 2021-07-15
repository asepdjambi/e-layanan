@extends('layouts.kop')
@section('content')

<br>
<div align="right">
    {{-- //membuat tangga dari created_at menjadi 14 Oktober 2020 --}}
    Muara Bulian, {{ $data_jarak->created_at->isoformat('D MMMM Y') }}
</div>
<br>
<table width="100%" border="0">
    <tr>
        <td width="370" valign="top">Perihal : Permohonan Jarak Tempuh</td>
        <td width="327">Kepada Yth. <br>
            Kepala Dinas Perhubungan<br>
            Kabupaten Batang Hari<br>
            di -<br>
            Muara Bulian<br>
        </td>
    </tr>
</table>
<br>
<br>
<p>Dengan Hormat:</p>
<p> &nbsp; &nbsp; &nbsp; &nbsp;Saya yang bertanda Tangan Dibawah ini:</p>
<blockquote>
    <table width="90%" border="0" align="center">
        <tr>
            <td width="21%">Nama</td>
            <td width="3%" align="center">:</td>
            <td width="76%">{{ $data_jarak->nama }}</td>
        </tr>
        <tr>
            <td>NIK</td>
            <td align="center">:</td>
            <td>{{ $data_jarak->nik }}</td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td align="center">:</td>
            <td>{{ $data_jarak->pekerjaan }}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td align="center">:</td>
            <td>{{ $data_jarak->alamat }}</td>
        </tr>
    </table>

    <p>Mengajukan permohonan Jarak Tempuh Kepada Dinas Perhubungan Kabupaten Batang Hari:</p>
    <table width="90%" border="0" align="center">
        <tr>
            <td width="21%">Dari</td>
            <td width="3%" align="center">:</td>
            <td width="76%">{{ $data_jarak->dari }}</td>
        </tr>
        <tr>
            <td>Hingga</td>
            <td align="center">:</td>
            <td>{{ $data_jarak->hingga }}</td>
        </tr>

    </table>
    <br>
    <p>Demikian permohonan ini disampaikan, atas perhatian Bapak saya ucapkan terima kasih.</p>
    <br>
    <br>
    <br>
    <table width="100%" border="0">
        <tr>
            <td width="250" valign="top">&nbsp;</td>
            <td width="327" style="text-align: center">
                {{-- //membuat tangga dari created_at menjadi 14 Oktober 2020 --}}
                Muara Bulian, {{ $data_jarak->created_at->isoformat('D MMMM Y') }}<br>
                Pemohon<br>
                <br>
                <br>
                <br>
                <u>{{ $data_jarak->nama }}<br></u>

            </td>
        </tr>
    </table>
    {{-- </p>
 </blockquote>
<table class="table">
    <tr class="align:right">
        <td>Muara Bulian,</td>
        //membuat format tanggal menjadi dd-mm-YYYY
        <td class="datepicker">{{ $data_bus->created_at->format('d-m-Y') }}</td>

    //membuat format jam menjadi 00(jam):00(menit):00
    {{-- <td class="datepicker">{{ $data_bus->created_at->format('h:i:s') }}</td> --}}
    {{-- </tr>
</table> --}}






    @endsection