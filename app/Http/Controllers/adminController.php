<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminController extends Controller
{
    public function index(){
        $data = DB::table('perizinan')
        ->join('detail_perizinan', 'perizinan.id_perizinan', '=', 'detail_perizinan.id_perizinan')
        ->get();
        // dd($data);
        return view('admin', compact('data'));
    }

    public function verif(Request $request){
        $data = DB::table('perizinan')
        ->join('detail_perizinan', 'perizinan.id_perizinan', '=', 'detail_perizinan.id_perizinan')
        ->join('gunung', 'detail_perizinan.id_gunung', '=', 'gunung.id_gunung')
        ->where('perizinan.id_perizinan', $request->id_perizinan)
        ->get();
        // dd($data);
        return view('cek', compact('data'));
    }

    public function updateVerif(Request $request){
        // dd($request->all());
        if($request->ceknama == 1 && $request->ceklahir == 1 && $request->cekalamat == 1 && $request->ceknotelp == 1
        && $request->ceknotelpkel == 1 && $request->cekgunung == 1 && $request->cekktp == 1 && $request->ceksks == 1){
            DB::table('detail_perizinan')->where('id_perizinan', $request->id_perizinan)->update([
                'status_nama'=>$request->ceknama,
                'status_tgl_lahir'=>$request->ceklahir,
                'status_alamat'=>$request->cekalamat,
                'status_notelp'=>$request->ceknotelp,
                'status_notelpkel'=>$request->ceknotelpkel,
                'status_gunung'=>$request->cekgunung,
                'status_ktp'=>$request->cekktp,
                'status_sks'=>$request->ceksks,
                'status_pesan'=>1
            ]);
        }else{
            DB::table('detail_perizinan')->where('id_perizinan', $request->id_perizinan)->update([
                'status_nama'=>$request->ceknama,
                'status_tgl_lahir'=>$request->ceklahir,
                'status_alamat'=>$request->cekalamat,
                'status_notelp'=>$request->ceknotelp,
                'status_notelpkel'=>$request->ceknotelpkel,
                'status_gunung'=>$request->cekgunung,
                'status_ktp'=>$request->cekktp,
                'status_sks'=>$request->ceksks
            ]);
        }
        return redirect('/admin');
    }

    public function indexBerita(){
        $data = DB::table('berita')->get();
        return view('indexBerita', compact('data'));
    }

    public function indexUpdateBerita(Request $request){
        $data = DB::table('berita')->where('id_berita', $request->id)->get();
        return view('updateBerita', compact('data'));
    }

    public function beritaUpdate(Request $request){
        // dd($request->all());
        if($request->hasFile('image_berita') == false){
            DB::table('berita')->where('id_berita', $request->id_berita)->update([
                'judul' => $request->judul_berita,
                'isi' => $request->isi,
                'caption' => $request->caption,
                'image_berita' => $request->image_berita,
                'status_berita' => $request->status_berita
            ]);
        }else{
            $name = $request->file('image_berita')->store('foto-berita');
            DB::table('berita')->where('id_berita', $request->id_berita)->update([
                'judul' => $request->judul_berita,
                'isi' => $request->isi,
                'caption' => $request->caption,
                'image_berita' => $name,
                'status_berita' => $request->status_berita
            ]);
        }
        return redirect('/indexBerita');
    }

    public function updateBerita(Request $request){
        // dd($request->all());
        $name_berita = $request->file('foto_berita')->store('foto-berita');
        DB::table('berita')->insert([
            'judul'=>$request->judul,
            'isi'=>$request->isi,
            'caption'=>$request->caption,
            'image_berita'=>$name_berita
        ]);
        return redirect('/indexBerita');
    }

    public function indexStatusGunung(){
        $data = DB::table('gunung')->get();
        // dd($data);
        return view('adminupdatestatus', compact('data'));
    }

    public function updateStatusGunung(Request $request){
        // dd($request->all());
        $gunung = DB::table('gunung')->get();
        foreach ($gunung as $p => $x) {
            $decode = json_decode($request->status[$x->id_gunung], true);
            DB::table('gunung')->where('id_gunung', $decode["id"])->update([
                'status'=>$decode["status"]
            ]);

        }
        return redirect('/adminupdatestatus');
    }

    public function indexTambahGunung(){
        return view('tambahGunung');
    }

    public function insertGunung(Request $request){
        // dd($request->all());
        $name_gunung = $request->file('image_gunung')->store('foto-gunung');
        DB::table('gunung')->insert([
            'nama_gunung'=>$request->nama_gunung,
            'harga'=>$request->harga,
            'deskripsi'=>$request->deskripsi,
            'link'=>$request->link,
            'image_gunung'=>$name_gunung
        ]);
        return redirect('/adminupdatestatus');
    }
}
