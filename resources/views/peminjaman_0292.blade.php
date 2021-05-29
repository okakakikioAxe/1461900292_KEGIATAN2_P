@extends('template.data_0292')

@section('judul','peminjaman')

@section('nama_tabel','ms_peminjaman')

@section('placeholder','cari kode peminjaman')

@section('judul_tabel','list peminjaman')

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
                    <th>{{ $data->kode_peminjaman }}</th>
                    <th>{{ $data->kode_petugas }}</th>
                    <th>{{ $data->kode_peminjam }}</th>
                    <th>{{ $data->tgl_peminjaman }}</th>
                    <th>{{ $data->tgl_kembali }}</th>
                </tr>     
            @endforeach
        </tbody>
    </table>
@endsection