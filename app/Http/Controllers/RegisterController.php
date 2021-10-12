<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use App\Models\Role;
use App\Models\Karyawan;

use DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __construct(){
        return $this->middleware('guest');
    }
    public function getRegister(){
        return view('auth.daftar');
    }

    public function postRegister(Request $request){
        $validatedData = $request->validate([
            'nik' => 'required|unique:users|max:255',
            'password' => 'required|min:6',
            'nama' => 'required',
        ]);

        if ($request->password != $request->conf_password) {
            return redirect('/register')->with('error','Konfirmasi password anda tidak sama');
        }
        
        $user = new User;
        $user->nik = $request->nik;
        $user->name = $request->nama;
        $user->password = Hash::make($request->password);
        // $user->roles_id = Role::select('id')->where('namaRole','karyawan')->first()->id;
        $user->roles_id = 1;

        $user->save();

        $karyawan = new Karyawan;
        $karyawan->nik = $user->nik;
        $karyawan->name = $user->name;
        $karyawan->password = $user->password;
        $karyawan->users_id = $user->id;
        // $karyawan->roles_id = Role::select('id')->where('namaRole','karyawan')->first()->id;
        
        $karyawan->save();

        return redirect('/login')->with('success', 'Registrasi berhasil, silakan login.');
    }

    
    // public function postRegister(Request $request){
    //  $role = Role::select('id')->where('namaRole','user')->first();
    // return User::insert([
    //     'name' => $request->nama,
    //     'roles_id' => json_decode( json_encode($role), true),
    //     'email' => $request->nik,
    //     'password' => Hash::make($request->password),
        
    // ]);}

    //BUAT ADMIN
    // public function postRegister(Request $request){
    //     $validatedData = $request->validate([
    //         'nik' => 'required|unique:users|max:255',
    //         'password' => 'required|min:6',
    //         'nama' => 'required',
    //     ]);

    //     if ($request->password != $request->conf_password) {
    //         return redirect('/register')->with('error','Konfirmasi password anda tidak sama');
    //     }
        
    //     $user = new User;
    //     $user->nik = $request->nik;
    //     $user->name = $request->nama;
    //     $user->password = Hash::make($request->password);
    //     // $user->roles_id = Role::select('id')->where('namaRole','karyawan')->first()->id;
    //     $user->roles_id = 2;

    //     $user->save();

    //     $admin = new Admin;
    //     $admin->nik = $user->nik;
    //     $admin->name = $user->name;
    //     $admin->password = $user->password;
    //     $admin->users_id = $user->id;
    //     // $admin->roles_id = Role::select('id')->where('namaRole','admin')->first()->id;
        
    //     $admin->save();

    //     return redirect('/login')->with('success', 'Registrasi berhasil, silakan login.');
    // }
}
    

