@extends('layouts.master')
@section('content')

    <div class="main-content">
        <div class="container_fluid">
            <div class="row mt-2">
                <div class="col-md-8">

                    <div class="panel align-content-center">
                        <div class="panel-heading">
                            <h1>Entry Data Permohonan <br>Surat Rekomendasi KIR</h1>
                        </div>
                        <div class="panel-body">
                            <form action="/kir/simpan" method="post">
                                {{ csrf_field() }}
                                Nomor Surat :
                                {{-- menonaktifkan nomor surat --}}
                                <input name="no" type="text" disabled class="form-control" value={{ $kode }}>
                                <br>
                                Tanggal:
                                <input name="tgl" type="text" class="form-control datepicker" placeholder="Tanggal" value={{ date_format(now(), 'd-m-Y') }}>
                                <br>
                                Nomor Plat :
                                <input name="nomor" type="text" class="form-control text-uppercase" placeholder="Nama" required>
                                <br>
                                Nama Pemohon :
                                <input name="nama" type="text" class="form-control" placeholder="Nama" required>
                                <br>
                                Alamat :
                                <textarea name="alamat" class="form-control" placeholder="Alamat" rows="4" required></textarea>
                                <br>
                                Nomor Uji Kendaraan :
                                {{-- jika ingin membuat menjadi rupiah atau inputan mata uang : 58.000
                            tambahkan id="rupiah" --}}
                                <input name="uji" type="text" class="form-control uang" placeholder="Nomor Uji Kendaraan" required>
                                <br>
                                Nomor SRUT :
                                {{-- jika ingin membuat menjadi rupiah atau inputan mata uang : 58.000
                            tambahkan id="rupiah" --}}
                                <input name="no_srut" type="text" class="form-control uang" placeholder="Nomor SRUT" required>

                                <br>
                                <table style="border-color: rgb(255, 84, 5); border-style:solid; width:100%">
                                    <caption style="font-size: 18px"><strong> DATA KENDARAAN </strong></caption>

                                    <tr>
                                        <td style="padding:10px">
                                            Merk Kendaraan :
                                        </td>
                                        <td>
                                            <input name="merk" type="text" class="form-control" placeholder="Merek Kendaraan" required>
                                        </td>
                                        <td style="padding:10px">
                                            No Rangka/<br>
                                            Chasis :
                                        </td>
                                        <td>
                                            <input name="landasan" type="text" class="form-control" placeholder="Nomor Rangka" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding:10px">
                                            Type Kendaraan :
                                        </td>
                                        <td>
                                            <input name="type" type="text" class="form-control" placeholder="Type Kendaraan" required>
                                        </td>
                                        <td style="padding:10px">
                                            Nomor Mesin :
                                        </td>
                                        <td>
                                            <input name="mesin" type="text" class="form-control" placeholder="Nomor Mesin" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding:10px">
                                            Tahun Pembuatan:
                                        </td>
                                        <td>
                                            <input name="tahun" type="text" class="form-control" placeholder="Tahun Pembuatan" required>
                                        </td>
                                        <td style="padding:10px">
                                            &nbsp;
                                        </td>
                                        <td style="padding:10px">
                                            &nbsp;
                                        </td>
                                    </tr>
                                </table>

                                <br>

                                <br>
                                <div class="row md-2">
                                    <div class="class col-6">
                                        <table style="border-color: rgb(255, 84, 5); border-style:solid; width:100%">
                                            <caption style="font-size: 18px"><strong> DATA DIMENSI KENDARAAN </strong></caption>
                                            <table style="border-color: rgb(255, 84, 5); border-style:solid">
                                                <tr>
                                                    <td style="padding:4px">
                                                        Panjang:
                                                    </td>
                                                    <td>
                                                        <input name="panjang_u" type="text" class="form-control" placeholder="Panjang Kendaraan" required>
                                                    </td>
                                                    <td>mm</td>
                                                    <td>&nbsp; </td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:10px">
                                                        Lebar:
                                                    </td>
                                                    <td>
                                                        <input name="lebar" type="text" class="form-control" placeholder="Lebar Kendaraan" required>
                                                    </td>
                                                    <td>mm</td>
                                                    <td>&nbsp; </td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:10px">
                                                        Tinggi :
                                                    </td>
                                                    <td>
                                                        <input name="tinggi" type="text" class="form-control" placeholder="Tinggi Kendaraan" required>
                                                    </td>
                                                    <td>mm</td>
                                                    <td>&nbsp; </td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:10px">
                                                        ROH :
                                                    </td>
                                                    <td>
                                                        <input name="roh" type="text" class="form-control" placeholder="ROH" required>
                                                    </td>
                                                    <td>mm</td>
                                                    <td>&nbsp; </td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:10px">
                                                        FOH:
                                                    </td>
                                                    <td>
                                                        <input name="foh" type="text" class="form-control" placeholder="FOH" required>
                                                    </td>
                                                    <td>mm</td>
                                                    <td>&nbsp; </td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:10px">
                                                        Jarak Sumbu:
                                                    </td>
                                                    <td>
                                                        <input name="jsumbu" type="text" class="form-control" placeholder="Jarak Sumbu" required value="-">
                                                    </td>
                                                    <td>mm</td>
                                                    <td>&nbsp; </td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:10px">
                                                        Sumbu I-II:
                                                    </td>
                                                    <td>
                                                        <input name="sumbu1" type="text" class="form-control" placeholder="Sumbu I-II" required>
                                                    </td>
                                                    <td>mm</td>
                                                    <td>&nbsp; </td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:10px">
                                                        Sumbu II-III:
                                                    </td>
                                                    <td>
                                                        <input name="sumbu2" type="text" class="form-control" placeholder="Sumbu II-III" required value="-">
                                                    </td>
                                                    <td>mm</td>
                                                    <td>&nbsp; </td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:10px">
                                                        Sumbu III-IV:
                                                    </td>
                                                    <td>
                                                        <input name="sumbu2" type="text" class="form-control" placeholder="Sumbu III-IV" required value="-">
                                                    </td>
                                                    <td>mm</td>
                                                    <td>&nbsp; </td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:10px">
                                                        Q Titik Berat:
                                                    </td>
                                                    <td>
                                                        <input name="qutama" type="text" class="form-control" placeholder="Q Titik Berat" required value="-">
                                                    </td>
                                                    <td>mm</td>
                                                    <td>&nbsp; </td>
                                                </tr>
                                            </table>
                                        </table>
                                    </div>
                                    <br>
                                    <div class="class col-6">
                                        <table style="border-color: rgb(255, 84, 5); border-style:solid; width:100%">
                                            <caption style="font-size: 18px"><strong> DATA DIMENSI BAK MUATAN </strong></caption>
                                            <table style="border-color: rgb(255, 84, 5); border-style:solid">
                                                <tr>
                                                    <td style="padding:10px">
                                                        Panjang:
                                                    </td>
                                                    <td>
                                                        <input name="panjang_b" type="text" class="form-control" placeholder="Panjang Bak" required>
                                                    </td>
                                                    <td>mm</td>
                                                    <td>&nbsp; </td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:10px">
                                                        Lebar:
                                                    </td>
                                                    <td>
                                                        <input name="lebar_b" type="text" class="form-control" placeholder="Lebar Bak" required>
                                                    </td>
                                                    <td>mm</td>
                                                    <td>&nbsp; </td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:10px">
                                                        Tinggi:
                                                    </td>
                                                    <td>
                                                        <input name="tinggi_b" type="text" class="form-control" placeholder="Tinggi Bak" required>
                                                    </td>
                                                    <td>mm</td>
                                                    <td>&nbsp; </td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:10px">
                                                        Volume ( Tangki):
                                                    </td>
                                                    <td>
                                                        <input name="volume1" type="text" class="form-control" placeholder="Volumen Tangki" required>
                                                    </td>
                                                    <td>Ltr</td>
                                                    <td>&nbsp; </td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:10px">
                                                        Berat jenis:
                                                    </td>
                                                    <td>
                                                        <input name="beratjensi" type="text" class="form-control" placeholder="Berat jenis" required>
                                                    </td>
                                                    <td>KG</td>
                                                    <td>&nbsp; </td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:10px">
                                                        Bahan:
                                                    </td>
                                                    <td>
                                                        <input name="bahan" type="text" class="form-control" placeholder="Bahan" required>
                                                    </td>
                                                    <td>&nbsp;</td>
                                                    <td>&nbsp; </td>
                                                </tr>
                                            </table>
                                        </table>
                                    </div>
                                </div>

                                <br>
                                <br>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <button class="btn btn-warning float-right" onclick="goBack()">Kembali</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="panel col-md-4">
                    <div class="panel-heading">

                        <h4 class="panel-title">
                            Bahan Kelengkapan KIR
                        </h4>
                    </div>
                    <div class="panel-body">
                        1. FOTO COPY KTP<br>
                        2. FOTO COPY STNK<br>
                        3. FOTO COPY BUKU KIR<br>
                        4. SURAT MUTASI KENDARAAN (JIKA ADA)<br>
                    </div>

                </div>

            </div>

        </div>
    </div>
    </div>
    </div>
@endsection
