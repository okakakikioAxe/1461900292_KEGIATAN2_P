@extends('template.data_0292')

@section('judul','kategori')

@section('nama_tabel','ms_kategori')

@section('placeholder','cari kode kategori')

@section('judul_tabel','list kategori')

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
                    <th>{{ $data->kode_kategori }}</th>
                    <th>{{ $data->nama_kategori }}</th>
                </tr>     
            @endforeach
        </tbody>
    </table>
@endsection