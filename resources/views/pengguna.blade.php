@extends('layouts.master')
@section('content')

    <div class="panel">
        <div class="panel-heading">
            <h2>Data Permohonan Surat Penutupan Jalan Sementara</h2>
            <div class="right">
                <a href="/penggunatambah" class="btn btn-primary floa">TAMBAH PEMOHON</a>

            </div>

        </div>
        <div class="panel-body">
                  <table class="table table-hover">
                            <thead>
                                      <tr>
                                                <th>Tanggal</th>
                                                <th>Nama</th>
                                                <th>NIK</th>
                                                <th>Alamat</th>
                                                <th>Pekerjaan</th>
                                                <th>Tanggal Awal</th>
                                                <th>Tanggal Akhir</th>
                                                <th>Tujuan</th>
                                                <th>Aksi</th>
                                      </tr>
                            </thead>
                            <tbody>
                                      @foreach ($pengguna as $tamu)
                                      <tr>
                                                <td>{{ $tamu->tanggal }}</td>
                                                <td>{{ $tamu->nama }}</td>
                                                <td>{{ $tamu->nik }}</td>
                                                <td>{{ $tamu->alamat }}</td>
                                                <td>{{ $tamu->pekerjaan }}</td>
                                                <td>{{ $tamu->tgl_a }}</td>
                                                <td>{{ $tamu->tgl_s }}</td>
                                                <td>{{ $tamu->tujuan }}</td>
                                                <td>
                                                          {{-- <a href="/Tamu/{{ $tamu->id }}/cetak" class="btn btn-success btn-md"><i class="lnr lnr-printer"> CETAK</i></a> --}}
                                                          <a href="/pengguna/{{ $tamu->id }}/tampilpdfjalan" class="btn btn-success btn-sm"><i class="lnr lnr-printer"> CETAK</i></a>


                                                </td>
                                      </tr>
                                      @endforeach
                            </tbody>
                  </table>
        </div>

    </div>
    </div>


@endsection
