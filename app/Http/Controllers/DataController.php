<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function ms_buku(){
        $buku = DB::table('ms_buku')->get();
        $header = ['kd buku','kd kategori','kd penerbit','judul','jumlah','pengarang','thn terbit'];
        return view('buku_0292',['header'=>$header,'data'=>$buku]);
    }

    public function ms_detail_pinjam(){
        $data = DB::table('ms_detail_pinjam')->get();
        $header = ['kd peminjaman','kd buku','tgl kembali','denda','status kembali'];
        return view('detail_pinjam_0292',['header'=>$header,'data'=>$data]);
    }

    public function ms_kartu_pendaftaran(){
        $data = DB::table('ms_kartu_pendaftaran')->get();
        $header = ['kd kartu','kd petugas','kd peminjam','tgl pembuatan','tgl akhir','status aktif'];
        return view('kartu_pendaftaran_0292',['header'=>$header,'data'=>$data]);
    }

    public function ms_kategori(){
        $data = DB::table('ms_kategori')->get();
        $header = ['kode kategori','nama kategori'];
        return view('kategori_0292',['header'=>$header,'data'=>$data]);
    }

    public function ms_peminjam(){
        $data = DB::table('ms_peminjam')->get();
        $header = ['kd peminjam','nama peminjam','alamat peminjam','telp peminjam'];
        return view('peminjam_0292',['header'=>$header,'data'=>$data]);
    }

    public function ms_peminjaman(){
        $data = DB::table('ms_peminjaman')->get();
        $header = ['kd peminjaman','kd petugas','kd peminjam','tgl peminjaman','tgl kembali'];
        return view('peminjaman_0292',['header'=>$header,'data'=>$data]);
    }

    public function ms_penerbit(){
        $data = DB::table('ms_penerbit')->get();
        $header = ['kd penerbit','nama penerbit','alamat penerbit','telp penerbit'];
        return view('penerbit_0292',['header'=>$header,'data'=>$data]);
    }

    public function ms_petugas(){
        $data = DB::table('ms_petugas')->get();
        $header = ['kd petugas','nama petugas'];
        return view('petugas_0292',['header'=>$header,'data'=>$data]);
    }


    public function cari(Request $request){
        $tabel = $request->nama_tabel;
        $kode = $request->kode;
        if($tabel == 'ms_buku'){
            $data = DB::table($tabel)->where('kode_buku',$kode)->get();
            $header = ['kd buku','kd kategori','kd penerbit','judul','jumlah','pengarang','thn terbit'];
            return view('buku_0292',['header'=>$header,'data'=>$data]);
        }
        if($tabel == 'ms_detail_pinjam'){
            $data = DB::table($tabel)->where('kode_peminjaman',$kode)->get();
            $header = ['kd peminjaman','kd buku','tgl kembali','denda','status kembali'];
        return view('detail_pinjam_0292',['header'=>$header,'data'=>$data]);
        }
        if($tabel == 'ms_kartu_pendaftaran'){
            $data = DB::table($tabel)->where('kode_kartu',$kode)->get();
            $header = ['kd kartu','kd petugas','kd peminjam','tgl pembuatan','tgl akhir','status aktif'];
        return view('kartu_pendaftaran_0292',['header'=>$header,'data'=>$data]);
        }
        if($tabel == 'ms_kategori'){
            $data = DB::table($tabel)->where('kode_kategori',$kode)->get();
            $header = ['kode kategori','nama kategori'];
        return view('kategori_0292',['header'=>$header,'data'=>$data]);
        }
        if($tabel == 'ms_peminjam'){
            $data = DB::table($tabel)->where('kode_peminjam',$kode)->get();
            $header = ['kd peminjam','nama peminjam','alamat peminjam','telp peminjam'];
        return view('peminjam_0292',['header'=>$header,'data'=>$data]);
        }
        if($tabel == 'ms_peminjaman'){
            $data = DB::table($tabel)->where('kode_peminjaman',$kode)->get();
            $header = ['kd peminjaman','kd petugas','kd peminjam','tgl peminjaman','tgl kembali'];
        return view('peminjaman_0292',['header'=>$header,'data'=>$data]);
        }
        if($tabel == 'ms_penerbit'){
            $data = DB::table($tabel)->where('kode_penerbit',$kode)->get();
            $header = ['kd penerbit','nama penerbit','alamat penerbit','telp penerbit'];
            return view('penerbit_0292',['header'=>$header,'data'=>$data]);
        }
        if($tabel == 'ms_petugas'){
            $data = DB::table($tabel)->where('kode_petugas',$kode)->get();
            $header = ['kd petugas','nama petugas'];
        return view('petugas_0292',['header'=>$header,'data'=>$data]);
        }
        
    }


    
}
