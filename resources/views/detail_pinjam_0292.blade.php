@extends('template.data_0292')

@section('judul','data buku')

@section('nama_tabel','ms_buku')

@section('placeholder','cari kode buku')

@section('judul_tabel','list buku')

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