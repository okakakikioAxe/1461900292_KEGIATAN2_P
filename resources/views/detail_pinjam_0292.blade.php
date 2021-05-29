@extends('template.data_0292')

@section('judul','detail pinjam')

@section('nama_tabel','ms_detail_pinjam')

@section('placeholder','cari kode peminjaman')

@section('judul_tabel','list detail pinjam')

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
                    <th>{{ $data->kode_buku }}</th>
                    <th>{{ $data->tgl_kembali }}</th>
                    <th>{{ $data->denda }}</th>
                    <th>{{ $data->status_kembali }}</th>
                </tr>     
            @endforeach
        </tbody>
    </table>
@endsection