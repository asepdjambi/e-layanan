@extends('layouts.master') @section('content')

    <div class="main-content">
        <div class="container_fluid">
            <div class="row">
                <div class="col-md-6">

                    <div class="panel align-content-center">
                        <div class="panel-heading">
                            <h1>Entry Data Tamu</h1>
                        </div>
                        <form method="POST" action="/tamu/simpan">
                            <div class="panel-body">
                                {{ csrf_field() }}
                                Tanggal :
                                <input name="tanggal" type="text" class="form-control datepicker" placeholder="Tanggal hari ini" value={{ date_format(now(), 'd-m-Y') }}>
                                <br>
                                Nama :
                                <input name="nama" type="text" class="form-control" placeholder="Nama">
                                <br>
                                NIK :
                                <input name="nik" type="text" class="form-control" placeholder="NIK">
                                <br>
                                Alamat :
                                <textarea name="alamat" class="form-control" placeholder="Alamat" rows="4"></textarea>
                                <br>
                                Pekerjaan :
                                <input name="pekerjaan" type="text" class="form-control" placeholder="Pekerjaan">
                                <br>
                                Riwayat Perjalanan :
                                <textarea name="riwayat" class="form-control" placeholder="Riwayat Perjalanan" rows="4"></textarea>
                                <br>
                                Maksud Kunjungan :
                                <textarea name="tujuan" class="form-control" placeholder="Maksud Kunjungan" rows="4"></textarea>
                                <br>
                                <div class="col-m-6">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <button class="btn btn-warning float-right" onclick="goBack()">Kembali</button>
                                </div>
                                {{-- <a href="{{  }}"></a> --}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
