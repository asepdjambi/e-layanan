@extends('layouts.masterpengguna2')
@section('css')

<link rel="stylesheet" href="{{ asset('admin/assets/vendor/linearicons/style.css') }}">
   <link rel="stylesheet" href="{{ asset('admin/assets/vendor/bootstrap/css/bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('admin/assets/css/main.css') }}">

@endsection

@section('content')

<div class="main-content">
          <div class="container_fluid">
                    <div class="row mt-2">
                              <div class="col-md-8">

                                        <div class="panel align-content-center">
                                                  <div class="panel-heading">
                                                            <h1>Entry Data Peminjaman Bus</h1>
                                                  </div>
                                                  <div class="panel-body">
                                                            <form action="/bus/create" method="post">
                                                                      {{ csrf_field() }}
                                                                      Nama Pemohon :
                                                                      <input name="nama" type="text" class="form-control" placeholder="Nama required">
                                                                      <br>
                                                                      NIK Pemohon :
                                                                      <input name="nik" type="text" class="form-control" placeholder="NIK" required>
                                                                      <br>
                                                                      Umur Pemohon :
                                                                      <input name="umur" type="text" class="form-control" placeholder="umur" required>
                                                                      <br>
                                                                      Pekerjaan Pemohon :
                                                                      <input name="pekerjaan" type="text" class="form-control" placeholder="Pekerjaan" required>
                                                                      <br>
                                                                      Alamat :
                                                                      <textarea name="alamat" class="form-control" placeholder="Alamat" rows="4" required></textarea>
                                                                      <br>
                                                                      Dalam Rangka :
                                                                      <textarea name="rangka" class="form-control" placeholder="Dalam Rangka" rows="4" required></textarea>
                                                                      <br>
                                                                      Tujuan Penggunaan Bus :
                                                                      <input name="tujuan" type="text" class="form-control" placeholder="Tujuan Penggunaan Bus" required>
                                                                      <br>
                                                                      Dari Tanggal:
                                                                      <input name="dari" type="text" class="form-control datepicker" placeholder="Dari Tanggal" required>
                                                                      <br>
                                                                      Hingga Tanggal:
                                                                      <input name="hingga" type="text" class="form-control datepicker" placeholder="Hingga Tanggal" required>
                                                                      <br>
                                                                      <br>
                                                                      <div>

                                                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                                                                <button class="btn btn-warning float-right" onclick="goBack()">Kembali</button>
                                                                      </div>
                                                            </form>
                                                  </div>
                                        </div>
                              </div>

                              <div class="panel col-md-4">
                                        <div class="panel-heading">

                                                  <h4 class="panel-title">
                                                            Bahan Kelengkapan Peminjaman Bus
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

