@extends('layouts.masteruser') @section('content')

    <div class="main-content">
        <div class="container_fluid">
            <div class="row">
                <div class="col-md-6">

                    <div class="panel align-content-center">
                        <div class="panel-heading">
                            <h1>Entry Data Tamu</h1>
                        </div>
                        <form method="POST" action="/user/simpan">
                            <div class="panel-body">
                                {{ csrf_field() }}

                                Nama :
                                <input name="name" type="text" class="form-control" placeholder="Nama Asli">
                                <br>
                                Role:
                                <select class="form-control" name="role">
                                    <option value="admin">admin</option>
                                    <option value="user">user</option>
                                </select>
                                password :
                                <input name="password" type="text" class="form-control" placeholder="password">
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
