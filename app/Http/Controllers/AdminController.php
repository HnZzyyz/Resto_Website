<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index() {
        return view('Auth.login');
    }

    public function cekLogin(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $token = $request->only('username','password');

        if(Auth::guard('admin')->attempt($token)) {
            return redirect('/')->with('message','Berhasil Masuk!!');
        } else {
            return back()->with('pesan','Username atau Password Tidak Terdaftar');
        }
    }
    
    public function dashboard() {
        return view('Page.dashboard');
    }

    public function logout() {
        Auth::guard('admin')->logout();
        return redirect('login')->with('message','Berhasil Logout');
    }
}
