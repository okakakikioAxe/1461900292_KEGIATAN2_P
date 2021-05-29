@extends('template.data_0292')

@section('judul','petugas')

@section('nama_tabel','ms_petugas')

@section('placeholder','cari kode petugas')

@section('judul_tabel','list petugas')

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
                    <th>{{ $data->kode_petugas }}</th>
                    <th>{{ $data->nama_petugas }}</th>
                </tr>     
            @endforeach
        </tbody>
    </table>
@endsection