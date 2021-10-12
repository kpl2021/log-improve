<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Karyawan;
use App\Models\LogHarian;
use Illuminate\Http\Request;
use \App\Http\Requests\updateKaryawanRequest;
use Auth;
use DB;
use Carbon\Carbon;
use Session;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use function Symfony\Component\HttpFoundation\get;

class KaryawanController extends Controller
{
    public function __construct()
    {

    }
    
    public function dashboard(Request $request){
        if (Auth::guard('web')->user()->id != null) {
        $data = Karyawan::where('users_id', Auth::guard('web')->user()->id)->firstOrFail();
        // $data2 = LogHarian::where('users_id', Auth::id())->get();
        $log = DB::table('logharian')->get();
        $tahun = DB::table('logharian')->selectRaw('YEAR(date) AS year')->orderby('year','desc')->distinct()->get();

        if ($request->tahun == NULL){
            // $data2 = DB::table('logharian')->where('users_id', Auth::id())->get();
            $year = date('Y');
            Session::put('tahun', $year);
            $logharian =  DB::table('logharian')->where('users_id', Auth::id())->whereMonth('date', '01')->whereYear('date', $year)->get();
            $logharian2 =  DB::table('logharian')->where('users_id', Auth::id())->whereMonth('date', '02')->whereYear('date', $year)->get();
            $logharian3 =  DB::table('logharian')->where('users_id', Auth::id())->whereMonth('date', '03')->whereYear('date', $year)->get();
            $logharian4 =  DB::table('logharian')->where('users_id', Auth::id())->whereMonth('date', '04')->whereYear('date', $year)->get();
            $logharian5 =  DB::table('logharian')->where('users_id', Auth::id())->whereMonth('date', '05')->whereYear('date', $year)->get();
            $logharian6 =  DB::table('logharian')->where('users_id', Auth::id())->whereMonth('date', '06')->whereYear('date', $year)->get();
            $logharian7 =  DB::table('logharian')->where('users_id', Auth::id())->whereMonth('date', '07')->whereYear('date', $year)->get();
            $logharian8 =  DB::table('logharian')->where('users_id', Auth::id())->whereMonth('date', '08')->whereYear('date', $year)->get();
            $logharian9 =  DB::table('logharian')->where('users_id', Auth::id())->whereMonth('date', '09')->whereYear('date', $year)->get();
            $logharian10 =  DB::table('logharian')->where('users_id', Auth::id())->whereMonth('date', '10')->whereYear('date', $year)->get();
            $logharian11 =  DB::table('logharian')->where('users_id', Auth::id())->whereMonth('date', '11')->whereYear('date', $year)->get();
            $logharian12 =  DB::table('logharian')->where('users_id', Auth::id())->whereMonth('date', '12')->whereYear('date', $year)->get();
            return view('user.index',['logharian' => $logharian, 'logharian2' => $logharian2, 'logharian3' => $logharian3,
            'logharian4' => $logharian4,'logharian5' => $logharian5,'logharian6' => $logharian6,
            'logharian7' => $logharian7,'logharian8' => $logharian8,'logharian9' => $logharian9,
            'logharian10' => $logharian10,'logharian11' => $logharian11,'logharian12' => $logharian12, 'tahun' => $tahun, 'year' => $year]);
        }

        
        else {
            // $data2 = LogHarian::where('users_id', Auth::id())->get();
            // $data2 = DB::table('logharian')->where('users_id', Auth::id())->get();
            $year = $request->tahun;
            Session::put('tahun', $year);
        
        // dd($year);

        $logharian =  DB::table('logharian')->where('users_id', Auth::id())->whereMonth('date', '01')->whereYear('date', $year)->get();
        $logharian2 =  DB::table('logharian')->where('users_id', Auth::id())->whereMonth('date', '02')->whereYear('date', $year)->get();
        $logharian3 =  DB::table('logharian')->where('users_id', Auth::id())->whereMonth('date', '03')->whereYear('date', $year)->get();
        $logharian4 =  DB::table('logharian')->where('users_id', Auth::id())->whereMonth('date', '04')->whereYear('date', $year)->get();
        $logharian5 =  DB::table('logharian')->where('users_id', Auth::id())->whereMonth('date', '05')->whereYear('date', $year)->get();
        $logharian6 =  DB::table('logharian')->where('users_id', Auth::id())->whereMonth('date', '06')->whereYear('date', $year)->get();
        $logharian7 =  DB::table('logharian')->where('users_id', Auth::id())->whereMonth('date', '07')->whereYear('date', $year)->get();
        $logharian8 =  DB::table('logharian')->where('users_id', Auth::id())->whereMonth('date', '08')->whereYear('date', $year)->get();
        $logharian9 =  DB::table('logharian')->where('users_id', Auth::id())->whereMonth('date', '09')->whereYear('date', $year)->get();
        $logharian10 =  DB::table('logharian')->where('users_id', Auth::id())->whereMonth('date', '10')->whereYear('date', $year)->get();
        $logharian11 =  DB::table('logharian')->where('users_id', Auth::id())->whereMonth('date', '11')->whereYear('date', $year)->get();
        $logharian12 =  DB::table('logharian')->where('users_id', Auth::id())->whereMonth('date', '12')->whereYear('date', $year)->get();
        return view('user.index',['logharian' => $logharian, 'logharian2' => $logharian2, 'logharian3' => $logharian3,
        'logharian4' => $logharian4,'logharian5' => $logharian5,'logharian6' => $logharian6,
        'logharian7' => $logharian7,'logharian8' => $logharian8,'logharian9' => $logharian9,
        'logharian10' => $logharian10,'logharian11' => $logharian11,'logharian12' => $logharian12, 'tahun' => $tahun, 'year' => $year]);
        }
    }
    }

    public function detailKaryawan(){
        if (Auth::guard('web')->user()->id != null) {
            $data = Karyawan::where('users_id', Auth::guard('web')->user()->id)->firstOrFail();
            return view('user.profil.profil', compact('data'));
        }
        return redirect('/login')->with('error','Invalid login credentials4');
    }

    public function editKaryawan(){
        if (Auth::guard('web')->user()->id != null) {
            $data = Karyawan::where('users_id', Auth::guard('web')->user()->id)->firstOrFail();
            return view('user.profil.edit-profil', compact('data'));
        }
        return redirect('/login')->with('error','Invalid login credentials5');
    }

    public function updateKaryawan(updateKaryawanRequest $request, Karyawan $karyawan){
        //$id = Auth::guard('web')->user()->id;
        // $id = $request->input('id');
        // $data = Karyawan::where('users_id', $id)->firstOrFail();

        // if($data->users_id == Auth::guard('web')->user()->id) {
        if (Auth::guard('web')->user()->id != null) {
            $data = Karyawan::where('users_id', Auth::guard('web')->user()->id)->firstOrFail();

            // Retrieve the validated input data...
            $validated = $request->validated();

            $data->name = $request->input('name');
            $data->nik = $request->input('nik');
            $data->position = $request->input('position');
            $data->unit = $request->input('unit');
            $data->no_telp = $request->input('no_telp');
            $data->address = $request->input('address');

            $data->save();

            $data2=[
                'nik' => $request->nik, 
                'name' => $request->name, 
            ];
            DB::table('users')->where('id', Auth::guard('web')->user()->id)->update($data2);

            return redirect('/detailKaryawan')->with('success', 'Profile berhasil diupdate');
        }

        return redirect('/detailKaryawan')->with('error', 'Profile gagal diupdate');
    }

    public function gantiPassword(Request $request){
        if (!(Hash::check($request->pwl, Auth::user()->password))) {
            return redirect('/editPasswordKaryawan')->with("error","Password yang Anda masukkan salah.");
            }
             
            if(strcmp($request->pwl, $request->pw) == 0){
            //Current password and new password are same
            return redirect('/editPasswordKaryawan')->with("error","Password yang baru tidak boleh sama dengan password sebelumnya.");
            }
            if(!(strcmp($request->pw, $request->cpw) == 0)){
                        //New password and confirm password are not same
            return redirect('/editPasswordKaryawan')->with("error","Password yang baru harus sama dengan password yang dikonfirmasi.");
            }
            //Change Password
            $user = Auth::user();
            $user->password = bcrypt($request->pw);
            $user->save();

            $data2=[
                'password' => bcrypt($request->pw),  
            ];
            DB::table('karyawan')->where('users_id', Auth::user()->id)->update($data2);
             
            return redirect('/detailKaryawan')->with("success","Password berhasil diganti");
             
    }

    public function editPW (){
        return view('user.profil.edit-password');
    }
}
