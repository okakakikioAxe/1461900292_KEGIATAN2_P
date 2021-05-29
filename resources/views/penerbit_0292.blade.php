@extends('template.data_0292')

@section('judul','penerbit')

@section('nama_tabel','ms_penerbit')

@section('placeholder','cari kode penerbit')

@section('judul_tabel','list penerbit')

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
                    <th>{{ $data->kode_penerbit }}</th>
                    <th>{{ $data->nama_penerbit }}</th>
                    <th>{{ $data->alamat_penerbit }}</th>
                    <th>{{ $data->telp_penerbit }}</th>
                </tr>     
            @endforeach
        </tbody>
    </table>
@endsection