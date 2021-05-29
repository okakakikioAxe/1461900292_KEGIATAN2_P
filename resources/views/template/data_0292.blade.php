<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>@yield('judul')</title>
    </head>
    <body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
              <a class="navbar-brand" href="{{url('/')}}">Home</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url('/data/buku')}}">Data</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Multiple Data</a>
                  </li>
                </ul>
              </div>
            </div>
        </nav>
    </div>
  <br>
    <div class="container">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              Tampilkan Tabel
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="{{ url('/data/buku') }}">Buku</a></li>
              <li><a class="dropdown-item" href="{{ url('/data/detail_pinjam') }}">Detail Pinjam</a></li>
              <li><a class="dropdown-item" href="{{ url('/data/kartu_pendaftaran') }}">Kartu Pendaftaran</a></li>
              <li><a class="dropdown-item" href="{{ url('/data/kategori') }}">Kategori</a></li>
              <li><a class="dropdown-item" href="{{ url('/data/peminjam') }}">Peminjam</a></li>
              <li><a class="dropdown-item" href="{{ url('/data/peminjaman') }}">Peminjaman</a></li>
              <li><a class="dropdown-item" href="{{ url('/data/pemerbit') }}">Penerbit</a></li>
              <li><a class="dropdown-item" href="{{ url('/data/petugas') }}">Petugas</a></li>
              
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
                        <input type="hidden" id="nama_tabel" value="@yield('nama_tabel')">
                        <input class="form-control me-2" type="search" placeholder= "@yield('placeholder')" aria-label="Search">
                    </div>
                    <div class="col">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </div> 
            </div>
        </form>
        <br>
        <div class=" table-responsive ">
            <caption>
                @yield('judul_tabel')
            </caption>
            @yield('tabel')
        </div>
    <br>
    <br>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
  @yield('style')
</html>