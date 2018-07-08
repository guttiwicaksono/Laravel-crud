<!-- index.blade.php -->

@extends('layouts.app')
@section('content')
<table class="table table-striped">
  <thead>
    <th>ID</th>
    <th>Nama</th>
    <th>Jenis Kelamin</th>
    <th>Pekerjaan</th>
    <th>Pendidikan</th>
    <th>Agama</th>
    <th>Alamat</th>
    <th>Kewarganegaraan</th>
    <th>Tanggal dibuat</th>
    <th>Action</th>
   
  </thead>
  <tbody>
    @foreach($users as $user)
      
        <tr>
          <td>{{$user->id}}</td>
          <td>{{$user->nama}}</td>
          <td>{{$user->jenis_kelamin}}</td>
          <td>{{$user->pekerjaan}}</td>
          <td>{{$user->pendidikan}}</td>
          <td>{{$user->agama}}</td>
          <td>{{$user->alamat}}</td>
          <td>{{$user->kewarganegaraan}}</td>
          <td>{{date('d-m-Y', strtotime($user->created_at))}}</td>
          <td><a href="{{action('UserDetailController@downloadPDF', $user->id)}}">PDF</a></td>
        </tr>
     
    @endforeach
  </tbody>
</table>
@endsection