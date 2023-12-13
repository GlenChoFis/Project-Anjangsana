<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class menuUtamaController extends Controller
{
    public function index(){
        // dd(Auth::user());
        $data = DB::table('gunung')->get();
        // dd($data);
        return view('menuutama',compact('data'));
    }

    public function berita(){
        $data = DB::table('berita')->where('status_berita', 1)->get();
        // dd($data);
        return view('berita', compact('data'));
    }

    public function detailBerita(Request $request){
        $data = DB::table('berita')->where('judul', $request->judul)->get();
        return view('detail-berita', compact('data'));
    }
}
