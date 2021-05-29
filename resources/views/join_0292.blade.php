@extends('template.main_0292')

@section('judul','data')
@section('konten')
<br>
<br>

<div class="container">
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
                    <th>{{ $data->kode_buku }}</th>
                    <th>{{ $data->judul_buku }}</th>
                    <th>{{ $data->kode_penerbit }}</th>
                    <th>{{ $data->nama_penerbit }}</th>
                </tr>     
            @endforeach
        </tbody>
    </table>
</div>
@endsection