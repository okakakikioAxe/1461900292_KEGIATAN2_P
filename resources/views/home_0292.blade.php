@extends('template.main_0292')

@section('judul','home')

@section('konten')
    <br>
    <div class="container">
        <h2>Selamat Datang</h2>
    </div>
    <div class="container text-center">
        <br>
        <br>
        <h6>Tampilkan data tabel</h6>
        <a href="{{url('/data/buku')}}">
            <button type="button" class="btn btn-primary" style="width: 120px;height: auto;">Data</button>
        </a>
        <br>
        <br>
        <br>
        <h6>atau</h6>
        <br>
        <br>
        <h6>Tampilkan data buku dan penerbit</h6>
        <a href="{{ url('/data/join') }}">
            <button type="button" class="btn btn-primary" style="width: 120px;height: auto;">Data Buku</button>
        </a>
    </div>
@endsection