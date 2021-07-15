@extends('layouts.master')
@section('content')
    <div form method="POST" action="">
        <div class="main-content">
            <div class="container_fluid">
                @if (session('sukses'))
                    <div class="alert alert-success" role="alert">
                        Surat Berhasil Disimpan
                    </div>
                @endif

                <div class="row">
                    <div class="col-md-6">

                        <div class="panel align-content-center">
                            <div class="panel-heading">
                                <h1>Entry Data Surat Masuk</h1>
                            </div>
                            <div class="panel-body">
                                <form class="group" method="POST" action="/surat/create">
                                    {{ csrf_field() }}
                                    Nomor Surat :
                                    <input name="nomor" type="text" class="form-control" placeholder="Nomor Surat">
                                    <br>
                                    Asal Surat :
                                    <input name="asal" type="text" class="form-control" placeholder="Asal Surat">
                                    <br>
                                    Nama pengantar :
                                    <input name="pengantar" type="text" class="form-control" placeholder="Nama">
                                    <br>
                                    Perihal :
                                    <textarea name="perihal" class="form-control" placeholder="Perihal" rows="4"></textarea>
                                    <br>
                                    Tanggal Surat:
                                    <input name="tgl_surat" type="text" class="form-control datepicker" placeholder="dd-mm-yyyy" value={{ now() }}>
                                    <br>
                                    Tanggal Terima Surat:
                                    <input name="tgl_terima" type="text" class="form-control datepicker" placeholder="dd-mm-yyyy" value={{ now() }}>
                                    <br>
                                    Nama Penerima :
                                    <input name="penerima" type="text" class="form-control" placeholder="Nama Penerima">
                                    <br>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <button class="btn btn-warning float-right" onclick="goBack()">Kembali</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
@endsection
