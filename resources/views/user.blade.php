@extends('layouts.master') @section('content')

<div class="panel">
    @if (session('sukses'))

    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                aria-hidden="true">×</span></button>
        <i class="fa fa-times-circle"></i> User Berhasil Dihapus
    </div>
    @endif
    <div class="panel-heading">
        <h2>Data USER Dinas Perhubungan</h2>
        <div class="right">
            <a href="/usertambah" class="btn btn-primary btn-md">TAMBAH USER</a>

        </div>

    </div>
    <div class="panel-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Role</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $u)
                <tr>
                    <td>{{ $u->name }}</td>
                    <td>{{ $u->role }}</td>
                    <td>{{ $u->username }}</td>
                    <td>{{ $u->p_name }}</td>
                    <td>
                        {{-- <a href="/Tamu/{{ $tamu->id }}/cetak" class="btn btn-success btn-md"><i
                            class="lnr lnr-printer"> CETAK</i></a> --}}
                        {{-- <a href="/user/{{ $u->id }}/edit" class="btn btn-success btn-sm"><i
                            class="lnr lnr-printer">
                            EDIT</i></a> --}}
                        <a href="/user/{{ $u->id }}/hapus" class="btn btn-danger btn-sm"><i class="lnr lnr-trash">
                                HAPUS</i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>

@endsection