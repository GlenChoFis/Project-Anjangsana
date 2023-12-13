<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function authenticate(Request $request){
        // dd($request->all());
        $credential = $request->validate([
            'email'=> 'required|email:dns',
            'password'=> 'required'
        ]);

        if(Auth::attempt($credential)){
            $request->session()->regenerate();
            if(Auth::user()->role == 'user'){
                return redirect()->intended('/menuutama');
            }else{
                return redirect()->intended('/admin');
            }
        }
        
        return back()->with('loginError', 'Login gagal!, silahkan coba lagi');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
