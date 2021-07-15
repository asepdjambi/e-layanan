@extends('layouts.master')
@section('content')

    <div class="panel">
        <div class="panel-heading">
            <h2>Data Surat Dinas Perhubungan</h2>
            <div class="right">
                <a href="/surat" class="btn btn-primary btn-md">TAMBAH DATA SURAT HARI INI</a>

            </div>

        </div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                    <tr style="text-align: center">
                        <th>Nomor</th>
                        <th>Asal Surat</th>
                        <th>Perihal</th>
                        <th>Tanggal Surat</th>
                        <th>Tanggal Terima</th>
                        {{-- <th>Aksi</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($surat as $s)
                        <tr>
                            <td>{{ $s->nomor }}</td>
                            <td>{{ $s->asal }}</td>
                            <td>{{ $s->perihal }}</td>
                            <td>{{ $s->tgl_surat->isoformat('DD-MM-Y') }}</td>
                            <td>{{ $s->tgl_terima->isoformat('DD-MM-Y') }}</td>
                            {{-- <td> --}}
                            {{-- <a href="/Tamu/{{ $tamu->id }}/cetak" class="btn btn-success btn-md"><i
                            class="lnr lnr-printer"> CETAK</i></a> --}}
                            {{-- <a href="/tamu/{{ $tamu->id }}/tampilpdf" class="btn btn-success btn-sm"><i class="lnr lnr-printer"> CETAK</i></a> --}}
                            {{-- </td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>

@endsection
