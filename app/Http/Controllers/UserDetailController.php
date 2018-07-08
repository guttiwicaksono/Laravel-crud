<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\UserDetail;
use DB;
use Auth;

use PDF;
class UserDetailController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request){
      $date=date_create($request->get('tgl_lahir'));
      $tgl_lahir = date_format($date,"Y-m-d");
      $user = new UserDetail([
        'no_kk' => Auth::user()->no_kk,
        'nama' => $request->get('nama'),
        'jenis_kelamin' => $request->get('jenis_kelamin'),
        'tempat_lahir' => $request->get('tempat_lahir'),
        'tgl_lahir' => strtotime($tgl_lahir),
        'pekerjaan' => $request->get('pekerjaan'),
        'no_ktp' => $request->get('no_ktp'),
        'pendidikan' => $request->get('pendidikan'),
        'agama' => $request->get('agama'),
        'alamat' => $request->get('alamat'),
        'kelurahan' => $request->get('kelurahan'),
        'kecamatan' => $request->get('kecamatan'),
        'rw' => $request->get('rw'),
        'rt' => $request->get('rt'),
        'kewarganegaraan' => $request->get('kewarganegaraan'),
        'notes' => $request->get('notes')
      ]);

      $user->save();
      return redirect('index_user')->with('success', 'Information has been added');
    }
    public function indexUser(){
      $no_kk =  Auth::user()->no_kk;
      $users = DB::table('form')->where('no_kk',$no_kk)->get();
      // $users = UserDetail::all();

      return view('index_user', compact('users'));
    }

    public function form(){

      return view('form');
    }

     public function downloadPDF($id){
      $user = UserDetail::find($id);

      $pdf = PDF::loadView('pdf', compact('user'));
      return $pdf->download('laporan.pdf');

    }
}