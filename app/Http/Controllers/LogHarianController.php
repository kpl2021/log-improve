<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
use App\Models\Admin;
use App\Models\User;
use App\Models\Karyawan;
use App\Models\LogHarian;
use Illuminate\Http\Request;
use Auth;
use DB;
use PDF;
use Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use function Symfony\Component\HttpFoundation\get;

class LogHarianController extends Controller
{
    public function index()
    {
        return view('user.log.log-harian');
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
            'date' => 'required',
            'jumlah' => 'required|numeric',
            'jenis' => 'required',
            'uraian' => 'required'
        ]);
        
        $user=Auth::user();

        $logharian = new LogHarian;
        $logharian->date = $request->date;
        $logharian->jumlah = $request->jumlah;
        $logharian->jenis = $request->jenis;
        $logharian->uraian = $request->uraian;
        $logharian->keterangan = $request->keterangan;
        $logharian->users_id = $user->id;

        $logharian->save();
            
        return redirect('/logharian')->with('success', 'Log harian berhasil ditambahkan');
    }

    public function show(Request $request, $id)
    {
        $logharian = LogHarian::find($id);
        return view('user.log.site.show',compact('logharian'))->renderSections()['content'];
    }

    public function edit($id, LogHarian $logharian)
    {
    $logharian = LogHarian::find($id);
    return view('user.log.edit-log-harian', ['logharian' => $logharian]);
    }

    public function update($id, Request $request, LogHarian $logharian)
    {
    
    $this->validate($request,[
        'date' => 'required',
        'jumlah' => 'required|numeric',
        'jenis' => 'required',
        'uraian' => 'required'
    ]);

            $data=[
            'date' => $request->date, 
            'jumlah' => $request->jumlah, 
            'jenis' => $request->jenis,
            'uraian' => $request->uraian,
            'keterangan' => $request->keterangan,
            ];

        DB::table('logharian')->where('id',$id)->update($data);
        
        return redirect('/karyawan')->with('success', 'Log harian berhasil diperbarui');
    }

    public function delete($id, LogHarian $logharian)
    {

    $logharian = LogHarian::find($id);
    DB::table('logharian')->where('id',$id)->delete();

    return redirect('/karyawan')->with('success', 'Log harian berhasil dihapus');
    }

    public function generatePrint($id, LogHarian $logharian, Karyawan $karyawan)
    {
    $karyawan = DB::table('karyawan')->where('users_id', Auth::id())->get();
    $tahun = Session::get('tahun');
    // $test=$id;
    // dd($test);
    $tanggal = date('j F Y');
    if ($id==1) {
        $bulan = 'Januari';
        $logharian =  DB::table('logharian')->whereMonth('date', '01')->whereYear('date', $tahun)->get();
        
    }
    else if ($id==2) {
        $bulan = 'Februari';
        $logharian =  DB::table('logharian')->whereMonth('date', '02')->whereYear('date', $tahun)->get();
        
    }
    else if ($id==3) {
        $bulan = 'Maret';
        $logharian =  DB::table('logharian')->whereMonth('date', '03')->whereYear('date', $tahun)->get();
        
    }
    else if ($id==4) {
        $bulan = 'April';
        $logharian =  DB::table('logharian')->whereMonth('date', '04')->whereYear('date', $tahun)->get();
        
    }
    else if ($id==5) {
        $bulan = 'Mei';
        $logharian =  DB::table('logharian')->whereMonth('date', '05')->whereYear('date', $tahun)->get();
        
    }
    else if ($id==6) {
        $bulan = 'Juni';
        $logharian =  DB::table('logharian')->whereMonth('date', '06')->whereYear('date', $tahun)->get();
        
    }
    else if ($id==7) {
        $bulan = 'Juli';
        $logharian =  DB::table('logharian')->whereMonth('date', '07')->whereYear('date', $tahun)->get();
        
    }
    else if ($id==8) {
        $bulan = 'Agustus';
        $logharian =  DB::table('logharian')->whereMonth('date', '08')->whereYear('date', $tahun)->get();
        
    }
    else if ($id==9) {
        $bulan = 'September';
        $logharian =  DB::table('logharian')->whereMonth('date', '09')->whereYear('date', $tahun)->get();
        
    }
    else if ($id==10) {
        $bulan = 'Oktober';
        $logharian =  DB::table('logharian')->whereMonth('date', '10')->whereYear('date', $tahun)->get();
        
    }
    else if ($id==11) {
        $bulan = 'November';
        $logharian =  DB::table('logharian')->whereMonth('date', '11')->whereYear('date', $tahun)->get();
        
    }
    else if ($id==12) {
        $bulan = 'Desember';
        $logharian =  DB::table('logharian')->whereMonth('date', '12')->whereYear('date', $tahun)->get();
        
    }
    // $logharian =  DB::table('logharian')->whereMonth('date', '01')->whereYear('date', $tahun)->get();
    // $tanggal = date('j F Y');
    $pdf = PDF::loadView('pdf.pdf-view',  ['karyawan' => $karyawan, 'logharian' => $logharian, 'tahun' => $tahun, 'tanggal'=>$tanggal, 'bulan' => $bulan])->setPaper('a4', 'potrait');
    return $pdf->stream();
    }
    
}
