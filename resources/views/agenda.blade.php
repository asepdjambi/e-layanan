@extends('layouts.master')
@section('content')

<div class="panel">
    <div class="panel-heading">
        <h2>AGENDA KERJA PEJABAT DINAS PERHUBUNGAN</h2>
        <div class="right">
            <a href="/agendatambah" class="btn btn-primary floa">TAMBAH AGENDA</a>

        </div>

    </div>
    <div class="panel-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Kegiatan</th>
                    <th>Tempat</th>
                    <th>Tanggal Awal</th>
                    <th>Tanggal Akhir</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($agenda as $kerja)
                <tr>
                    <!-- <td>{{ $kerja->tanggal->isoformat('d-M-Y') }}</td> -->
                    <!-- membuat tanggal menjadi format 07-07-2021 -->
                    <td>{{ date_format($kerja->tanggal,'d-m-Y') }}</td>
                    <td>{{ $kerja->pegawai->nama }}</td>
                    <td>{{ $kerja->pegawai->jabatan}}</td>
                    <td>{{ $kerja->kegiatan }}</td>
                    <td>{{ $kerja->tempat }}</td>
                    <td>{{date_format( $kerja->tgl_a,'d-m-Y') }}</td>
                    <td>{{date_format( $kerja->tgl_s,'d-m-Y') }}</td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
</div>


@endsection