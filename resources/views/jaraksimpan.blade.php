@extends('layouts.master')
@section('content')

    <div class="main-content">
        <div class="container_fluid">
            <div class="row mt-2">
                <div class="col-md-8">

                    <div class="panel align-content-center">
                        <div class="panel-heading">
                            <h1>Entry Data Permohonan Jarak Tempuh</h1>
                        </div>
                        <div class="panel-body">
                            <form action="/jarak/simpan" method="post">
                                {{ csrf_field() }}
                                Tanggal:
                                <input name="tgl" type="text" class="form-control datepicker" placeholder="Tanggal" value={{ date_format(now(), 'd-m-Y') }} required>
                                <br>
                                Nama Pemohon :
                                <input name="nama" type="text" class="form-control" placeholder="Nama" required>
                                <br>
                                NIK Pemohon :
                                <input name="nik" type="text" class="form-control" placeholder="NIK" required>
                                <br>
                                Pekerjaan Pemohon :
                                <input name="pekerjaan" type="text" class="form-control" placeholder="Pekerjaan" required>
                                <br>
                                Alamat :
                                <textarea name="alamat" class="form-control" placeholder="Alamat" rows="4" required></textarea>
                                <br>
                                Dari :
                                <input name="dari" type="text" class="form-control" placeholder="dari" required>
                                <br>
                                Hingga :
                                <input name="hingga" type="text" class="form-control" placeholder="hingga" required>
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
                            Bahan Kelengkapan Permohonan Jarak Tempuh
                        </h4>
                    </div>
                    <div class="panel-body">
                        1. FOTO COPY KTP<br>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
