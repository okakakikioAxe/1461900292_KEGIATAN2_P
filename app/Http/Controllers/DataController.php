<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function ms_buku(){
        $buku = DB::table('ms_buku')->get();
        $header = ['kd buku','kd kategori','kd penerbit','judul','jumlah','pengarang','thn terbit'];
       
        return view('singleData_0292',['header'=>$header,'data'=>$buku, 'judul' => $judul_list, 'search'=>$judul_search, 'tabel'=> $nama_tabel, 'field'=>$nama_field]);
    }

    public function ms_detail_pinjam(){
        $data = DB::table('ms_detail_pinjam')->get();
        $header = ['kd peminjaman','kd buku','tgl kembali','denda','status kembali'];
        return view('detail_pinjam_0292',['header'=>$header,'data'=>$data]);
    }
}
