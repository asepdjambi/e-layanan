@extends('layouts.kop')
@section('content')


    <div align="center">
        {{-- judul atas --}}
        <h3><u> SURAT REKOMENDASI NUMPANG UJI KENDARAAN BERMOTOR</u></h3>
        < style="text-align: center; font-size:18px">Nomor: &nbsp;{{ $datakir->no }}
    </div>

    <p style="text-align:justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Berdasarkan Surat dari Kementrian Perhubungan
        Direktorat Jenderal Perhubungan
        Darat Nomor
        : AJ.502/33/9/DRJD/2019
        tentang Akreditasi UPUBKB dan Penerapan Bukti Lulus Uji Elektronik (BLUe) dan Hasil Risalah Rapat Pembahasan
        Akreditasi UPUBKB Dinas Perhubungan Kabupaten / Kota se-Provinsi Jambi tanggal 14 November 2019 di Ruang Rapat BPTD
        Wilayah V Provinsi Jambi.</p>
    <p style="text-align:justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dikarenakan belum tercapainya proses Akreditasi UPUBKB
        dan Penerapan Bukti
        Lulus Uji
        Elektronik (BLUe) di Dinas
        Perhubungan Kabupaten Batang Hari, dengan ini memohon kepada Dinas Perhubungan Kota Jambi untuk melaksanakan Numpang
        Uji Kendaraan Bermotor dibawah ini :</p>

    <blockquote>
        <table width="100%" border="0" align="center">
            <tr>
                <td width="29%">Nomor Kendaraan</td>
                <td width="5%" align="center">:</td>
                <td width="66%" style="text-transform: uppercase">{{ $datakir->nomor }}</td>
            </tr>
            <tr>
                <td>Nama Pemilik</td>
                <td align="center">:</td>
                <td style="text-transform: uppercase">{{ $datakir->nama }}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td align="center">:</td>
                <td style="text-transform: uppercase">{{ $datakir->alamat }}</td>
            </tr>
            <tr>
                <td>Nomor Uji</td>
                <td align="center">:</td>
                <td style="text-transform: uppercase">{{ $datakir->uji }}</td>
            </tr>
            <tr>
                <td>Merk Kendaraan</td>
                <td align="center">:</td>
                <td style="text-transform: uppercase">{{ $datakir->merk }}</td>
            </tr>
            <tr>
                <td>Type Kendaraan</td>
                <td align="center">:</td>
                <td style="text-transform: uppercase">{{ $datakir->type }}</td>
            </tr>
            <tr>
                <td>No Landasan/Chasis</td>
                <td align="center">:</td>
                <td>{{ $datakir->landasan }}</td>
            </tr>
            <tr>
                <td>Nomor Mesin</td>
                <td align="center">:</td>
                <td>{{ $datakir->mesin }}</td>
            </tr>
        </table>

        <br>
        <p>Demikian surat Rekomendasi ini dibuat agar dapat dipergunakan sebagaimana mestinya.</p>
        <br>

        <table width="80%" border="0">
            <tr>
                <td width="250" valign="top">&nbsp;</td>
                <td width="250" style="text-align: center">
                    {{-- //membuat tangga dari created_at menjadi 14 Oktober 2020 --}}
                    Muara Bulian, {{ $datakir->created_at->isoformat('DD MMMM Y') }}<br>
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
