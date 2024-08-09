<?php

namespace App\Http\Controllers;
use App\models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class LoginController extends Controller
{
    public function index() {
        return view ('auth.login');

    }

    public function login_proses(Request $request) {
        $request->validate ([
            'email' => 'required',
            'password' => 'required',
        ]);

        $data = [
            'email' =>$request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($data)){
            return redirect()->route('admin.dashboard');
        }else{
            return redirect()->route('login')->with('failed','Email atau Password salah');
        }
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('welcome')->with('sucses','Kamu berhasil logout');
    }

}
