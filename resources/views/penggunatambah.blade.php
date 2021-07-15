@extends('layouts.master') @section('content')

<div class="main-content">
          <div class="container_fluid">
                    <div class="row mt-2">
                              <div class="col-md-8">

                                        <div class="panel align-content-center">
                                                  <div class="panel-heading">
                                                            <h1>Entry Data Permohonan <br>
                                                                      Penutupan Jalan</h1>
                                                  </div>
                                                  <form method="POST" action="/pengguna/simpan">
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
                                                                      Tanggal Awal Kegiatan :
                                                                      <input name="tgl_a" type="text" class="form-control datepicker" placeholder="Tanggal hari ini" value={{ date_format(now(), 'd-m-Y') }}>
                                                                      <br>
                                                                      Tanggal Akhir Kegiatan :
                                                                      <input name="tgl_s" type="text" class="form-control datepicker" placeholder="Tanggal hari ini" value={{ date_format(now(), 'd-m-Y') }}>
                                                                      <br>

                                                                      Maksud Penutupan Jalan:
                                                                      <textarea name="tujuan" class="form-control" placeholder="Maksud Penutupan Jalan" rows="4"></textarea>
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
                              <div class="panel col-md-4">

                                        <div class="panel-heading">
                                                  <h4 class="panel-title">
                                                            Bahan Kelengkapan Permohonan
                                                            penutupan Jalan
                                                  </h4>
                                        </div>
                                        <div class="panel-body">
                                                  1. FOTO COPY KTP<br>
                                                  2. Surat Keterangan Dari Kelurahan/Desa
                                        </div>

                              </div>

                    </div>
          </div>
</div>
@endsection
