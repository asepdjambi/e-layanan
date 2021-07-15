@extends('layouts.master')
@section('content')

<div class="panel">
    <div class="panel-heading">
        <h2>DATA PEGAWAI DINAS PERHUBUNGAN</h2>
        <div class="right">
            <a href="/agendatambah" class="btn btn-primary float">TAMBAH PEGAWAI</a>

        </div>

    </div>
    <div class="panel-body">
        <!-- <div class="row">
            <div class="col">
                <a href="/pegawai/cetak" class="btn btn-primary float-right"><span class="lnr lnr-printer"> CETAK DATA PEGAWAI</span></a>
            </div>
        </div> -->

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pegawai as $kerja)
                <tr>
                    <td>{{ $kerja->nip }}</td>
                    <td>{{ $kerja->nama }}</td>
                    <td>{{ $kerja->jabatan}}</td>
                    <td>
                        <a href="/pegawai/{{$kerja->id}}/hapus" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="left" title="Hapus Pegawai"><i class="lnr lnr-trash">
                            </i></a>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
</div>


@endsection