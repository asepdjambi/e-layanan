<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function index()
    {
        $user=\App\models\user::all();
        return view('/user',['user'=>$user]);
    }

    public function simpan(Request $request)
    {
        // $user=\App\models\user::all();   
        // menyimpan ke table user
            $userbaru= new \App\models\user;
            $userbaru->role=$request->role;
            $userbaru->name=$request->name;
            $userbaru->username=$request->name;
            $userbaru->password=bcrypt($request->password);
            $userbaru->p_name=$request->password;
            $userbaru->save();

            return redirect('/user');
    }

    public function hapus($id)
    {
        $user=\App\models\user::find($id);
        $user->delete();
        return redirect('/user')->with('sukses','User Berhasil di Hapus');
    }

}
