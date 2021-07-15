@extends('layouts.kop')
@section('content')


    <div align="center">
        {{-- judul atas --}}
        <h3><u> SURAT KETERANGAN PENYESUAIAN DIMENSI</u></h3>
        <p style="text-align: center; font-size:18px">Nomor: &nbsp;{{ $datakir->no }}</p>
    </div>
    <br>

    <p style="text-align:justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Berdasarkan Surat dari Kementrian Perhubungan
        Direktorat Jenderal Perhubungan
        Darat Nomor: <b>/AJ.510/DRJD/2019</b> Tanggal 01 November 2019 Perihal : <b>NORMALISASI KENDARAAN</b>.
        Dinas Perhubungan Kabupaten Batang Hari dengan ini menerangkan bahwa :</p>

    <blockquote>
        <table width="100%" border="0" align="center">
            <tr>
                <td><b>I.</b> </td>
                <td><b>Data Identitas Kendaraan:</b></td>
                <td> &nbsp; </td>
                <td> &nbsp; </td>
            </tr>
            <tr>
                <td> &nbsp; </td>
                <td width="29%">Nomor Kendaraan</td>
                <td width="5%" align="center">:</td>
                <td width="66%" style="text-transform: uppercase">{{ $datakir->nomor }}</td>
            </tr>
            <tr>
                <td> &nbsp; </td>
                <td>Nama Pemilik</td>
                <td align="center">:</td>
                <td style="text-transform: uppercase">{{ $datakir->nama }}</td>
            </tr>
            <tr>
                <td> &nbsp; </td>
                <td>Alamat</td>
                <td align="center">:</td>
                <td style="text-transform: uppercase">{{ $datakir->alamat }}</td>
            </tr>
            <tr>
                <td> &nbsp; </td>
                <td>Nomor Uji</td>
                <td align="center">:</td>
                <td style="text-transform: uppercase">{{ $datakir->uji }}</td>
            </tr>
            <tr>
                <td> &nbsp; </td>
                <td>Merk Kendaraan</td>
                <td align="center">:</td>
                <td style="text-transform: uppercase">{{ $datakir->merk }}</td>
            </tr>
            <tr>
                <td> &nbsp; </td>
                <td>Type Kendaraan</td>
                <td align="center">:</td>
                <td style="text-transform: uppercase">{{ $datakir->type }}</td>
            </tr>
            <tr>
                <td> &nbsp; </td>
                <td>No Landasan/Chasis</td>
                <td align="center">:</td>
                <td>{{ $datakir->landasan }}</td>
            </tr>
            <tr>
                <td> &nbsp; </td>
                <td>Nomor Mesin</td>
                <td align="center">:</td>
                <td>{{ $datakir->mesin }}</td>
            </tr>
        </table>
        <p><b>II. Data Dimensi Kendaraan yang Terindentifikasi saat ini :</b></p>

        <table class="table table-border table-sm">
            <thead style="text-align: center">
                <tr>
                    <th> <b>Ukuran Utama</b></th>
                    <th><b>Hasil</b></th>
                    <th><b>Dimensi Bak Muatan</b></th>
                    <th><b>Hasil</b></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Panjang<br>
                        Lebar<br>
                        Tinggi<br>
                        ROH<br>
                        FOH<br>
                        Jarak Sumbu<br>
                        Sumbu I-II<br>
                        Sumbu II-III<br>
                        Sumbu III-IV<br>
                        Q Titik Berat
                    </td>
                    <td>
                        {{ $datakir->panjang_u }} mm <br>
                        {{ $datakir->lebar_u }} mm<br>
                        {{ $datakir->tinggi_u }}mm<br>
                        {{ $datakir->roh }}mm<br>
                        {{ $datakir->foh }}mm<br>
                        {{ $datakir->jsumbu }}mm<br>
                        {{ $datakir->sumbu1 }}mm<br>
                        {{ $datakir->sumbu2 }}mm<br>
                        {{ $datakir->sumbu3 }}mm<br>
                        {{ $datakir->qutama }}mm
                    </td>
                    <td>Panjang<br>
                        Lebar<br>
                        Tinggi<br>
                        Volume (Tangki)<br>
                        Berat Jenis<br>
                        Bahan<br>
                        &nbsp;<br>
                        &nbsp;<br>
                        &nbsp;<br>
                        &nbsp;
                    </td>
                    <td>
                        {{ $datakir->panjang_b }} mm <br>
                        {{ $datakir->lebar_b }} mm<br>
                        {{ $datakir->tinggi_b }}mm<br>
                        {{ $datakir->volume1 }}Ltr<br>
                        {{ $datakir->beratjenis }}KG<br>
                        {{ $datakir->bahan }}<br>
                        &nbsp;<br>
                        &nbsp;<br>
                        &nbsp;<br>
                        &nbsp;
                    </td>
                </tr>
            </tbody>
        </table>

        <p><b>III. Data Dimensi yang harus distandarkan :</b></p>
        <p>Setelah dilakukan Pemeriksaan Fisik dan Administrasi ditemukan Dimensi tidak sesuai
            Ambang Batas kelaikan Kendaraan Bermotor, Antara Lain:</p>
        <br>
        <p>Demikian surat Keterangan ini dibuat agar dapat dipergunakan sebagaimana mestinya.</p>
        <br>
        <br>
        <br>
        <table width="80%" border="0">
            <tr>
                <td width="250" valign="top">&nbsp;</td>
                <td width="327" style="text-align: center">
                    {{-- //membuat tangga dari created_at menjadi 14 Oktober 2020 --}}
                    Muara Bulian, {{ $datakir->created_at->isoformat('D MMMM Y') }}<br>
                    KEPALA DINAS PERHUBUNGAN<br>
                    KABUPATEN BATANG HARI
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <b><u>AMINULLAH, SP, ME<br></u></b>
                    NIP.19751219 199412 1 001

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
