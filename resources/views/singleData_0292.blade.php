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
                        <input class="form-control me-2" type="search" placeholder="masukkan kode buku" aria-label="Search">
                    </div>
                    <div class="col">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </div> 
            </div>
        </form>
    <br>
        <div class=" table-responsive ">
            <caption>List of users</caption>
            <table class="table table-striped">
                
                <thead class=" table-dark position-sticky">
                    <tr>
                        <th>No</th>
                        <th>First</th>
                        <th>Last</th>
                        <th>Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>     
                </tbody>
            </table>
        </div>
@endsection