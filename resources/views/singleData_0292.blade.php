@extends('template.main_0292')

@section('judul','Data')

@section('konten')
<br>
    <div class="container">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              Tampilkan Tabel
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="https://www.google.com">Google</a></li>
              <li><a class="dropdown-item" href="https://www.facebook.com">Facebook</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </div>
    </div>
    <br>
    

        <form class="d-flex">
            <div class="container">
                <div class="row">
                    <label>cari data</label>
                </div>
                <div class="row">
                    <div class="col">
                        @foreach ($search as $search)
                            <input class="form-control me-2" type="search" placeholder="{{ $search }}" aria-label="Search">
                        @endforeach
                        
                    </div>
                    <div class="col">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </div> 
            </div>
        </form>
    <br>
        <div class=" table-responsive ">
            <caption>
                @foreach ($judul as $judul)
                {{ $judul }}
                @endforeach
            </caption>
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
        </div>
@endsection