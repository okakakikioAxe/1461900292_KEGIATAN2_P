@extends('template.data_0292')

@section('judul','data buku')

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
                    <th>{{ $data->0 }}</th>
                    <th>{{ $data->kode_kategori }}</th>
                    <th>{{ $data->kode_penerbit }}</th>
                    <th>{{ $data->judul_buku }}</th>
                    <th>{{ $data->jumlah_buku }}</th>
                    <th>{{ $data->pengarang_buku }}</th>
                    <th>{{ $data->tahun_terbit_buku }}</th>
                </tr>     
            @endforeach
        </tbody>
    </table>
@endsection