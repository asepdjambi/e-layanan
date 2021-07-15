@extends('layouts.master') @section('content')

<div class="panel">
    <div class="panel-heading">
        <h2>Data Tamu Dinas Perhubungan</h2>
        <div class="right">
            <a href="/tambahtamu" class="btn btn-primary btn-md">TAMBAH TAMU HARI INI</a>

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
                    <th>Riwayat</th>
                    <th>Tujuan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_tamu as $tamu)
                <tr>
                    <td>{{ $tamu->tanggal }}</td>
                    <td>{{ $tamu->nama }}</td>
                    <td>{{ $tamu->nik }}</td>
                    <td>{{ $tamu->alamat }}</td>
                    <td>{{ $tamu->pekerjaan }}</td>
                    <td>{{ $tamu->riwayat }}</td>
                    <td>{{ $tamu->tujuan }}</td>
                    <td>
                        {{-- <a href="/Tamu/{{ $tamu->id }}/cetak" class="btn btn-success btn-md"><i
                            class="lnr lnr-printer"> CETAK</i></a> --}}
                        <a href="/tamu/{{ $tamu->id }}/tampilpdf" class="btn btn-success btn-sm"><i
                                class="lnr lnr-printer"> CETAK</i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>

@endsection