<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('home_0292');
    }

    public function data(){
       $buku = DB::table('ms_buku')->get();
       $header = ['kd buku','kd kategori','kd penerbit','judul','jumlah','pengarang','thn terbit'];
       $nama_tabel = ['ms_buku'];
       $judul_list=['list buku'];
       $judul_search=['masukkan kode buku'];
       return view('singleData_0292',['header'=>$header,'data'=>$buku, 'judul' => $judul_list, 'search'=>$judul_search, 'tabel'=> $nama_tabel]);
    }
}
