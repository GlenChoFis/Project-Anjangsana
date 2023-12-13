<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class regisController extends Controller
{
    public function index(){
        return view('registrasi');
    }

    public function insert(Request $request){
        
        $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:200'
        ]);

        DB::table('users')->insert([
            'name'=>$request->name,
            'alamat'=>$request->alamat,
            'notelp'=>$request->notelp,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'role'=>'user'
        ]);
        return redirect('/login');
        // dd($request->all());
    }

    public function updateProfile(Request $request){
        DB::table('users')->where('id', Auth::user()->id)->update([
            'name'=>$request->name,
            'alamat'=>$request->alamat,
            'notelp'=>$request->alamat
        ]);
        return redirect('/profil');
        // dd(Auth::user()->id);
    }
}
