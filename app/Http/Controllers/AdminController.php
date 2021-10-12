<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
use App\Models\Admin;
use App\Models\User;
use App\Models\Karyawan;
use Illuminate\Http\Request;
use \App\Http\Requests\updateAdminRequest;
use Auth;
use DB;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use function Symfony\Component\HttpFoundation\get;
use App\Rules\MatchOldPassword;

class AdminController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    //     $this->middleware('namaRole:admin');
    // }

    public function dashboard(){
        $user = Auth::user();
        $data = Admin::where('users_id', Auth::guard($user->punyaRole('2'))->user()->id)->firstOrFail();
        return view('admin.dashboard', compact('data'));
    }

    public function detailAdmin(){
        $user = Auth::user();
        if (Auth::guard($user->punyaRole('2'))->user()->id != null) {
            $data = Admin::where('users_id', Auth::guard($user->punyaRole('2'))->user()->id)->firstOrFail();
            return view('admin.profil.user', compact('data'));
        }
        return redirect('/login')->with('error','Invalid login credentials4');
    }

    public function editAdmin(){
        $user = Auth::user();
        if (Auth::guard($user->punyaRole('2'))->user()->id != null) {
            $data = Admin::where('users_id', Auth::guard($user->punyaRole('2'))->user()->id)->firstOrFail();
            return view('admin.profil.edit-profil-admin', compact('data'));
        }
        return redirect('/login')->with('error','Invalid login credentials5');
    }

    public function updateAdmin(updateAdminRequest $request){
        $user = Auth::user();
        //$id = Auth::guard('web')->user()->id;
        // $id = $request->input('id');
        // $data = Admin::where('id', $id)->firstOrFail();
        if (Auth::guard($user->punyaRole('2'))->user()->id != null) {
            $data = Admin::where('users_id', Auth::guard($user->punyaRole('2'))->user()->id)->firstOrFail();

            // Retrieve the validated input data...
            $validated = $request->validated();

            $data->name = $request->input('name');
            $data->nik = $request->input('nik');
            $data->golongan = $request->input('golongan');
            $data->position = $request->input('position');
            $data->unit = $request->input('unit');
            $data->no_telp = $request->input('no_telp');
            $data->address = $request->input('address');

            $data->save();

            $data2=[
                'nik' => $request->nik, 
                'name' => $request->name, 
            ];
            DB::table('users')->where('id', Auth::guard($user->punyaRole('2'))->user()->id)->update($data2);

            return redirect('/admin/detailAdmin')->with('success', 'Profile berhasil diupdate');

        }

        return redirect('/admin/detailAdmin')->with('error', 'Profile gagal diupdate');
        
    }

    public function index(request $request)
    {
        // $karyawan = Karyawan::paginate(10);
    	// // $karyawan = Karyawan::all();
    	// return view('admin.karyawan.table', ['karyawan' => $karyawan]);

        $key = trim($request->get('search'));

        $karyawan = Karyawan::query()
            ->where('name', 'like', "%{$key}%")
            ->orWhere('nik', 'like', "%{$key}%")
            ->orWhere('position', 'like', "%{$key}%")
            ->orWhere('golongan', 'like', "%{$key}%")
            ->orWhere('unit', 'like', "%{$key}%")
            ->orWhere('address', 'like', "%{$key}%")
            ->orWhere('no_telp', 'like', "%{$key}%")
            ->paginate(10);

        return view('admin.karyawan.table', [
            'karyawan' => $karyawan,
            'key' => $key,
        ]);
    }

    public function tambahKaryawan()
    {
    	return view('admin.karyawan.tambah-karyawan');
    }

    public function store(Request $request)
    {
        // if (Auth::guard('web')->user()->id != null) {
    	$this->validate($request,[
            'name' => 'required',
            'nik' => 'required|numeric|unique:users',
            'password' => 'required',
            // 'golongan' => 'required',
            'position' => 'required',
    		'unit' => 'required'
        ]);
        
        $user = new User;
        $user->nik = $request->nik;
        $user->name = $request->name;
        $user->password = Hash::make($request->password);
        // $user->roles_id = Role::select('id')->where('namaRole','karyawan')->first()->id;
        $user->roles_id = 1;

        $user->save();

        $karyawan = new Karyawan;
        $karyawan->nik = $request->nik;
        $karyawan->name = $request->name;
        $karyawan->password = $request->password;
        $karyawan->golongan = $request->golongan;
        $karyawan->position = $request->position;
        $karyawan->unit = $request->unit;
        $karyawan->users_id = $user->id;
        // $karyawan->roles_id = Role::select('id')->where('namaRole','karyawan')->first()->id;
        
        $karyawan->save();
 
        // Karyawan::create([
        //     'name' => $request->name,
        //     'nik' => $request->nik,
        //     'password' => $request->password,
        //     'golongan' => $request->golongan,
        //     'position' => $request->position,
        //     'unit' => $request->unit,
        //     'users_id' => $user->id,
        // ]);
 
        return redirect('/admin/tablekaryawan')->with('success', 'Karyawan berhasil ditambahkan');
        
        // }

        // return redirect('/admin/tambahkaryawan')->with('error', 'Karyawan gagal ditambahkan');

    }

    public function edit($id, Karyawan $karyawan)
    {
    $karyawan = Karyawan::find($id);
    return view('admin.karyawan.edit-profil-karyawan', ['karyawan' => $karyawan]);
    }

    public function update($id, Request $request, Karyawan $karyawan)
    {
    // $karyawan = Karyawan::find($id);
    // return view('admin.karyawan.edit-profil-karyawan', ['karyawan' => $karyawan]);
    

    $this->validate($request,[
       'name' => 'required',
       'nik' => 'required|numeric',
    //    'golongan' => 'required',
       'position' => 'required',
       'unit' => 'required',
    //    'no_telp' => 'required|numeric',
	//    'address' => 'required'
    ]);
        // $id_karyawan = Karyawan::find($id);
        // Karyawan::where('id', $id)
        // ->update(
            $data=[
            'nik' => $request->nik, 
            'name' => $request->name, 
            'golongan' => $request->golongan,
            'position' => $request->position,
            'address' => $request->address,
            'no_telp' => $request->no_telp,
            'unit' => $request->unit,
            ];
        // );

        DB::table('karyawan')->where('id',$id)->update($data);
        // $karyawan = Karyawan::find($id);
        // $karyawan->nik = $request->nik;
        // $karyawan->name = $request->name;
        // $karyawan->password = $request->password;
        // $karyawan->golongan = $request->golongan;
        // $karyawan->position = $request->position;
        // $karyawan->unit = $request->unit;
        // // $karyawan->users_id = $user->id;
        // $karyawan->save();
        

        // $users_id = Karyawan::get('users_id')->where('id', $id);
        $karyawan = Karyawan::find($id);
        // dd($karyawan->users_id);

        $data2=[
            'nik' => $request->nik, 
            'name' => $request->name, 
        ];
        DB::table('users')->where('id', $karyawan->users_id)->update($data2);
        
        return redirect('/admin/tablekaryawan')->with('success', 'Profil karyawan berhasil diperbarui');
    }

    public function delete($id, Karyawan $karyawan)
    {

    $karyawan = Karyawan::find($id);
    DB::table('users')->where('id', $karyawan->users_id)->delete();
    DB::table('karyawan')->where('id',$id)->delete();

    
    return redirect('/admin/tablekaryawan')->with('success', 'Data karyawan berhasil dihapus');
    }

    public function gantiPasswordAdmin(Request $request){
        $user = Auth::user();
        if (!(Hash::check($request->pwl, Auth::guard($user->punyaRole('2'))->user()->password))) {
            return redirect('/admin/editPasswordAdmin')->with("error","Password yang Anda masukkan salah.");
            }
             
            if(strcmp($request->pwl, $request->pw) == 0){
            //Current password and new password are same
            return redirect('/admin/editPasswordAdmin')->with("error","Password yang baru tidak boleh sama dengan password sebelumnya.");
            }
            if(!(strcmp($request->pw, $request->cpw) == 0)){
                        //New password and confirm password are not same
            return redirect('/admin/editPasswordAdmin')->with("error","Password yang baru harus sama dengan password yang dikonfirmasi.");
            }
            //Change Password
            $user = Auth::guard($user->punyaRole('2'))->user();
            $user->password = bcrypt($request->pw);
            $user->save();

            $data2=[
                'password' => bcrypt($request->pw),  
            ];
            DB::table('admin')->where('users_id', Auth::guard($user->punyaRole('2'))->user()->id)->update($data2);
             
            return redirect('/admin/detailAdmin')->with("success","Password berhasil diganti");
             
    }

    public function editPWAdmin(){
        return view('admin.profil.edit-password-admin');
    }

    public function resetPw(request $request)
    {
    	// $karyawan = DB::table('karyawan')->paginate(10);
    	// return view('admin.reset.reset-password', ['karyawan' => $karyawan]);

        $key = trim($request->get('search'));

        $karyawan = Karyawan::query()
            ->where('name', 'like', "%{$key}%")
            ->orWhere('nik', 'like', "%{$key}%")
            ->paginate(10);

        return view('admin.reset.reset-password', [
            'karyawan' => $karyawan,
            'key' => $key,
        ]);
    }

    public function reset($id, Karyawan $karyawan){
        $data=[
            'password' => Hash::make('12345678'), 
        ];

        $karyawan = Karyawan::find($id);
        DB::table('users')->where('id', $karyawan->users_id)->update($data);
        DB::table('karyawan')->where('id',$id)->update($data);

        return redirect('/admin/resetPassword')->with("success","Password berhasil direset");
    
    }


    // public function searchTable(Request $request)
    // {
    //     $key = trim($request->get('search'));

    //     $karyawan = Karyawan::query()
    //         ->where('name', 'like', "%{$key}%")
    //         ->orWhere('nik', 'like', "%{$key}%")
    //         ->orWhere('position', 'like', "%{$key}%")
    //         ->orWhere('golongan', 'like', "%{$key}%")
    //         ->orWhere('unit', 'like', "%{$key}%")
    //         ->orWhere('address', 'like', "%{$key}%")
    //         ->orWhere('no_telp', 'like', "%{$key}%")
    //         ->get();

    //     return view('admin.karyawan.table', [
    //         'karyawan' => $karyawan,
    //         'key' => $key,
    //     ]);
    // }

    // public function searchReset(Request $request)
    // {
    //     $key = trim($request->get('search'));

    //     $karyawan1 = Karyawan::query()
    //         ->where('name', 'like', "%{$key}%")
    //         ->orWhere('nik', 'like', "%{$key}%")
    //         ->get();

    //     return view('admin.reset.reset-password', [
    //         'karyawan1' => $karyawan1,
    //         'key' => $key,
    //     ]);
    // }


}
