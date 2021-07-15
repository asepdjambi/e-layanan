@extends('layouts.master')
@section('content')
<style>
    img {
        width: 100%;
    }
</style>

<div class="panel">
    <!-- {{-- menambahkan gambar pada dashboard dengan ukuran 100% --}} -->
    <img src="{{ asset('admin/assets/img/e-layanan.png') }}" alt="" style="width:100%; height:100%">
    <!-- {{-- <img src="{{ asset('admin/assets/img/e-layanan.png') }}" alt="" style="width:1060px height:1024px"> --}}
    {{-- <link rel="image" type="image/png" href="{{asset('admin/assets/img/e-layanan.png')}}"> --}} -->
</div>

@endsection