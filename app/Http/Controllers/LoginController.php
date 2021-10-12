<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function __construct(){
        return $this->middleware('guest');
    }
    public function getLogin(){
        return view('auth.loginbaru');
    }

    public function postLogin(Request $request){
        if(Auth::attempt([
            'nik' => $request->nik,
            'password' => $request->password

        ])){
            $user = Auth::user();
            if ($user->punyaRole('admin') != true){
                return redirect ('/karyawan');
            }else {
                return redirect ('/admin');
            }
            
        }else {
            return redirect ('/login');
        }
        
    }
}
