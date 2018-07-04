<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\UserDetail;

use PDF;
class UserDetailController extends Controller
{

    public function store(Request $request){

      $user = new UserDetail([
        'nama' => $request->get('nama'),
        'jenis_kelamin' => $request->get('jenis_kelamin'),
        'pekerjaan' => $request->get('pekerjaan'),
        'pendidikan' => $request->get('pendidikan'),
        'agama' => $request->get('agama'),
        'alamat' => $request->get('alamat'),
        'kewarganegaraan' => $request->get('kewarganegaraan')
      ]);

      $user->save();
      return redirect('index_user')->with('success', 'Information has been added');
    }
    public function indexUser(){

      $users = UserDetail::all();

      return view('index_user', compact('users'));
    }

     public function downloadPDF($id){
      $user = UserDetail::find($id);

      $pdf = PDF::loadView('pdf', compact('user'));
      return $pdf->download('invoice.pdf');

    }
}