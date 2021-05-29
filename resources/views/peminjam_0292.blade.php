@extends('template.data_0292')

@section('judul','peminjam')

@section('nama_tabel','ms_peminjam')

@section('placeholder','cari kode peminjam')

@section('judul_tabel','list peminjam')

@section('tabel')
    <table class="table table-striped">
        <thead class=" table-dark position-sticky">
            <tr>     
                @foreach ($header as $h)
                    <th>{{ $h }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $data)
                <tr>
                    <th>{{ $data->kode_peminjam }}</th>
                    <th>{{ $data->nama_peminjam }}</th>
                    <th>{{ $data->alamat_peminjam }}</th>
                    <th>{{ $data->telp_peminjam }}</th>
                </tr>     
            @endforeach
        </tbody>
    </table>
@endsection