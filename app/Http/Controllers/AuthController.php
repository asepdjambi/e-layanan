<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use \App\Models\Auth_model;

class AuthController extends Controller
{
        public function login()
        {
            return view('login');
        }

        public function postlogin(Request $request)
        {
            // dd($request->all());    
            if(Auth::attempt($request->only('username','password')))
                {
                    //  menyimpan data user yang login
                    $login=new \App\Models\Auth_model;
                    $login->login=$request->username;
                    $login->save();

                    return redirect('/depan');
                }
                return redirect('/login')->with('salah',' Maaf, username atau password anda salah. Silahkan ulangi kembali.');
        }

        public function logout() {
        Auth::logout();
        return redirect('/login');
        }
}
