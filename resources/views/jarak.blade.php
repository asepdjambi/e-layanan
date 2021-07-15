@extends('layouts.master')
@section('content')

<div class="panel">
    <div class="panel-heading">
        <h2>Data Permohonan Jarak Tempuh</h2>
        <div class="right">
            <a href="/jaraksimpan" class="btn btn-primary floa">TAMBAH PEMOHON</a>

        </div>

    </div>
    <div class="panel-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>Pekerjaan</th>
                    <th>Alamat</th>
                    <th>Dari</th>
                    <th>Hingga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_jarak as $jarak)
                <tr>
                    <td>{{ $jarak->tgl->format('d-m-Y') }}</td>
                    <td>{{ $jarak->nama }}</td>
                    <td>{{ $jarak->nik }}</td>
                    <td>{{ $jarak->pekerjaan }}</td>
                    <td>{{ $jarak->alamat }}</td>
                    <td>{{ $jarak->dari }}</td>
                    <td>{{ $jarak->hingga }}</td>
                    <td>
                        {{-- <a href="/Tamu/{{ $tamu->id }}/cetak" class="btn btn-success btn-md"><i
                            class="lnr lnr-printer"> CETAK</i></a> --}}
                        <a href="/jarak/{{ $jarak->id }}/tampiljarak" class="btn btn-success btn-sm"><i
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