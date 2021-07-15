@extends('layouts.master')
@section('content')

<div class="panel">
    <div class="panel-heading">
        <h2>Data Peminjaman Bus Dinas Perhubungan</h2>
        <div class="right">
            <a href="/bussimpan" class="btn btn-primary">TAMBAH PEMOHON</a>

        </div>

    </div>
    <div class="panel-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>Umur</th>
                    <th>Pekerjaan</th>
                    <th>Alamat</th>
                    <th>Dalam Rangka</th>
                    <th>Tujuan Bus</th>
                    <th>Dari Tanggal</th>
                    <th>Hingga Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_bus as $bus)
                <tr>
                    {{-- format D-M-Y digunakan pada created_at maupun updated_at --}}
                    <td>{{ $bus->created_at->isoformat('D-M-Y') }}</td>
                    <td>{{ $bus->nama }}</td>
                    <td>{{ $bus->nik }}</td>
                    <td>{{ $bus->umur }}</td>
                    <td>{{ $bus->pekerjaan }}</td>
                    <td>{{ $bus->alamat }}</td>
                    <td>{{ $bus->rangka }}</td>
                    <td>{{ $bus->tujuan }}</td>
                    {{-- membuat format tanggal menjadi 15-10-2020 --}}
                    {{-- fomat D-m-Y digunakan apabila ada field lain selain created_at dan updated_at --}}
                    <td>{{ $bus->dari->isoformat('D-m-Y') }}</td>
                    <td>{{ $bus->hingga->isoformat('D-m-Y') }}</td>
                    <td>
                        {{-- <a href="/Tamu/{{ $tamu->id }}/cetak" class="btn btn-success btn-md"><i
                            class="lnr lnr-printer"> CETAK</i></a> --}}
                        <a href="/bus/{{ $bus->id }}/tampilbus" class="btn btn-success btn-sm"><i
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