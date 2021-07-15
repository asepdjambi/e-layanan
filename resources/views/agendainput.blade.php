@extends('layouts.master') @section('content')

<div class="main-content">
    <div class="container_fluid">
        <div class="row mt-2">
            <div class="col-md-8">

                <div class="panel align-content-center">
                    <div class="panel-heading">
                        <h1>Entry Data Agenda Pejabat Dishub</h1>
                    </div>
                    <form method="POST" action="/agenda/simpan">
                        <div class="panel-body">
                            {{ csrf_field() }}

                            Tanggal:
                            <input name="tanggal" type="text" class="form-control datepicker" placeholder="" value={{ date_format(now(), 'd-m-Y') }}>
                            <br>

                            <div class="form-group">
                                <label class="col-sm col-form-label">Nama Pejabat</label>
                                <div class="col-sm">
                                    <select class="form-control" style="width: 100%;" name="pegawai_id">
                                        <!-- {{-- <option value="{{ $kad->id }}"
                                        selected>{{ $kad->pegawai->Nama }}
                                        |
                                        {{ $kad->pegawai->NIP }} --}} -->

                                        @foreach ($pegawai as $kad)
                                        <option value="{{ $kad->id }}">
                                            {{ $kad->nama }}
                                            |
                                            {{ $kad->nip }}
                                        </option>

                                        @endforeach

                                    </select>
                                </div>
                            </div>


                            Kegiatan :
                            <textarea name="kegiatan" class="form-control" placeholder="Kegiatan" rows="4"></textarea>
                            <br>

                            lokasi:
                            <textarea name="tempat" class="form-control" placeholder=" Lokasi Kegiatan" rows="4"></textarea>
                            <br>

                            Tanggal Awal Kegiatan :
                            <input name="tgl_a" type="text" class="form-control datepicker" placeholder="Tanggal Awal" value={{ date_format(now(), 'd-m-Y') }}>
                            <br>
                            Tanggal Akhir Kegiatan :
                            <input name="tgl_s" type="text" class="form-control datepicker" placeholder="Tanggal Akhir" value={{ date_format(now(), 'd-m-Y') }}>
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