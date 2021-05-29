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
       return view('singleData_0292',['$data'=>$buku]);
    }
}
