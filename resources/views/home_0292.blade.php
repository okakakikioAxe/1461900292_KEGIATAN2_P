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
        <h6>Tampilkan sigle data</h6>
        <a href="{{url('/data/buku')}}">
            <button type="button" class="btn btn-primary" style="width: 120px;height: auto;">Single Data</button>
        </a>
        <br>
        <br>
        <br>
        <h6>atau</h6>
        <br>
        <br>
        <h6>Tampilkan multiple data</h6>
        <a href="">
            <button type="button" class="btn btn-primary" style="width: 120px;height: auto;">Multiple Data</button>
        </a>
    </div>
@endsection