@extends('layouts.master')
@section('content')

    <div class="panel">
        <div class="panel-heading">
            <h2>Data Permohonan Surat Rekomendasi KIR TRUCK</h2>
            <div class="right">
                <a href="/truksimpan" class="btn btn-primary floa">TAMBAH PEMOHON</a>

            </div>

        </div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Nomor Surat</th>
                        <th>Tanggal</th>
                        <th>Nomor Plat</th>
                        <th>Nama</th>
                        <th>alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datakir as $k)
                        <tr>
                            <td>{{ $k->no }}</td>
                            <td>{{ $k->tgl->format('d-m-Y') }}</td>
                            <td class="text-uppercase">{{ $k->nomor }}</td>
                            <td class="text-uppercase">{{ $k->nama }}</td>
                            <td class="text-uppercase">{{ $k->alamat }}</td>
                            <td>
                                {{-- <a href="/Tamu/{{ $tamu->id }}/cetak" class="btn btn-success btn-md"><i
                            class="lnr lnr-printer"> CETAK</i></a> --}}
                                <a href="/kir/{{ $k->id }}/tampilkir" class="btn btn-success btn-sm"><i class="lnr lnr-printer">
                                        CETAK</i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>


@endsection
