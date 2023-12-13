<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\detail_perizinan;
use App\Models\Perizinan;
use App\Models\Gunung;

class perizinanController extends Controller
{
    public function index(){
        $gunung = DB::table('gunung')->where('status', 1)->get();
        return view('perizinan', compact('gunung'));
    }

    public function insert(Request $request){
        $tes = json_decode($request->nama_gunung,true);
        // dd($tes["id"]);
        $name_ktp = $request->file('image_ktp')->store('ktp');
        $name_sks = $request->file('image_sks')->store('sks');
        $difday= date_diff(date_create($request->tgl), date_create($request->tgl_turun))->d;

        $perizinan = new Perizinan;
        $perizinan->id = Auth::user()->id;
        $perizinan->nama = $request->nama_lengkap;
        $perizinan->tanggal_lahir = $request->tgl_lahir;
        $perizinan->alamat_tinggal = $request->alamat;
        $perizinan->nomor_telepon = $request->notelp;
        $perizinan->nomor_telepon_keluarga = $request->notelp_keluarga;
        $perizinan->tanggal_pendakian = $request->tgl;
        $perizinan->tanggal_turun = $request->tgl_turun;
        $perizinan->image_ktp = $name_ktp;
        $perizinan->image_sks = $name_sks;
        // dd($perizinan);
        $perizinan->save();

        $detail = new detail_perizinan;
        $detail->create([
            'id_perizinan' => $perizinan->id_perizinan,
            'id_gunung' =>  $tes["id"],
            'total_harga' => $tes["harga"]*$difday
        ]);
        // DB::table('perizinan')->insert([
        //     'nama' => $request->nama_lengkap,
        //     'tanggal_lahir' => $request->tgl_lahir,
        //     'alamat_tinggal' => $request->alamat,
        //     'nomor_telepon' => $request->notelp,
        //     'nomor_telepon_keluarga' => $request->notelp_keluarga,
        //     // 'id_gunung' => $request->nama_gunung,
        //     'tanggal_pendakian' => $request->tgl,
        //     'image_ktp' => $name_ktp,
        //     'image_sks' => $name_sks,

        // ]);
        return redirect('/status');
    }

    public function statusPerizinan(){
        $data = DB::table('perizinan')
        ->join('detail_perizinan', 'perizinan.id_perizinan', '=', 'detail_perizinan.id_perizinan')
        ->join('gunung', 'detail_perizinan.id_gunung', '=', 'gunung.id_gunung')
        ->where('perizinan.id', Auth::user()->id)
        ->get();

        // dd($data);
        return view('status', compact('data'));
    }

    public function batalkanPesanan(Request $request){
        DB::table('detail_perizinan')->where('id_perizinan', $request->id_perizinan)->update([
            'status_pesan'=>2
        ]);
        return redirect('/status');
    }

    public function indexHistory(){
        $data = DB::table('gunung')
        ->join('detail_perizinan', 'gunung.id_gunung', '=', 'detail_perizinan.id_gunung')
        ->join('perizinan', 'detail_perizinan.id_perizinan', '=', 'perizinan.id_perizinan')
        ->where('perizinan.id', Auth::user()->id)
        ->get();
        // dd($data);
        return view('histori', compact('data'));
    }

    public function invoice(Request $request){
        $data = DB::table('perizinan')
        ->join('detail_perizinan', 'perizinan.id_perizinan', '=', 'detail_perizinan.id_perizinan')
        ->join('gunung', 'detail_perizinan.id_gunung', '=', 'gunung.id_gunung')
        ->where('perizinan.id_perizinan', $request->id)->get();
        // dd($data);

        return view('invoice', compact('data'));
    }
}
