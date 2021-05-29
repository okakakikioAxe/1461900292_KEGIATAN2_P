@extends('template.data_0292')

@section('judul','kartu pendaftaran')

@section('nama_tabel','ms_kartu_pendaftaran')

@section('placeholder','cari kode kartu')

@section('judul_tabel','list kartu pendaftaran')

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
                    <th>{{ $data->kode_kartu }}</th>
                    <th>{{ $data->kode_petugas }}</th>
                    <th>{{ $data->kode_peminjam }}</th>
                    <th>{{ $data->tgl_pembuatan }}</th>
                    <th>{{ $data->tgl_akhir }}</th>
                    <th>{{ $data->status_aktif }}</th>
                </tr>     
            @endforeach
        </tbody>
    </table>
@endsection