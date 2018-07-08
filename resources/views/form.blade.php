<!-- form.blade.php -->

@extends('layouts.app')
@section('content')
<div class="container">
  
  <form method="post" action="{{url('submitForm')}}">
      {{csrf_field()}}
      <input type="hidden" name="no_kk" value="{{ Auth::user()->no_kk }} ">
      <div class="form-group"> <!-- Full Name -->
        <label for="full_name_id" class="control-label">Nama</label>
        <input type="text" class="form-control" id="full_name_id" name="nama" placeholder="Nama">
      </div>
      <div class="form-group"> <!-- Zip Code-->
         <lable>Jenis Kelamin</lable>
          <select name="jenis_kelamin">
              <option value="Laki-laki">Laki-laki</option>
              <option value="Perempuan">Perempuan</option>
          </select>
      </div>
      <div class="row">
         <div class="form-group col-6"> <!-- Street 1 -->
          <label for="tempat_lahir" class="control-label">Tempat Lahir</label>
          <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir">
        </div>
        <div class="form-group col-6"> <!-- Street 1 -->
          <label for="tgl_lahir" class="control-label">Tanggal Lahir</label>
          <input class="date form-control"  type="text" id="datepicker" name="tgl_lahir">   
        </div>
      </div>
     <div class="row">
       <div class="form-group col-6"> <!-- Street 1 -->
        <label for="street1_id" class="control-label">Pekerjaan</label>
        <input type="text" class="form-control" id="street1_id" name="pekerjaan" placeholder="Pekerjaan">
      </div>

      <div class="form-group col-6"> <!-- City-->
        <label for="no_ktp" class="control-label">No. KTP</label>
        <input type="text" class="form-control" id="no_ktp" name="no_ktp" placeholder="No. KTP">
      </div>
     </div>
      
      <div class="row">
        <div class="form-group col-4"> <!-- Zip Code-->
          <label for="zip_id" class="control-label">Kewarganegaraan</label>
          <input type="text" class="form-control" id="zip_id" name="kewarganegaraan" placeholder="Kewarganegaraan">
        </div>

        <div class="form-group col-4"> <!-- City-->
          <label for="city_id" class="control-label">Pendidikan</label>
          <input type="text" class="form-control" id="city_id" name="pendidikan" placeholder="Pendidikan">
        </div>

        <div class="form-group col-4"> <!-- Zip Code-->
          <label for="zip_id" class="control-label">Agama</label>
          <input type="text" class="form-control" id="zip_id" name="agama" placeholder="Agama">
        </div>
      </div>

      <div class="form-group"> <!-- Zip Code-->
        <label for="zip_id" class="control-label">Alamat</label>
        <input type="text" class="form-control" id="zip_id" name="alamat" placeholder="Alamat">
      </div>
      <div class="row">
        <div class="form-group col-3"> <!-- Zip Code-->
          <label for="kecamatan" class="control-label">Kecamatan</label>
          <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="Kecamatan">
        </div>
        <div class="form-group col-3"> <!-- Zip Code-->
          <label for="kelurahan" class="control-label">Kelurahan</label>
          <input type="text" class="form-control" id="kelurahan" name="kelurahan" placeholder="Kelurahan">
        </div>
        <div class="form-group col-3"> <!-- Zip Code-->
          <label for="RW" class="control-label">RW</label>
          <input type="text" class="form-control" id="rw" name="rw" placeholder="RW">
        </div>
        <div class="form-group col-3"> <!-- Zip Code-->
          <label for="rt" class="control-label">RT</label>
          <input type="text" class="form-control" id="rt" name="rt" placeholder="RT">
        </div>
      </div>
      
      <div class="form-group"> <!-- Zip Code-->
        <label for="rt" class="control-label">Maksud/Keperluan</label>
        <textarea class="form-control" id="notes" name="notes" ></textarea> 
      </div>

      

      

      <div class="form-group"> <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>

    </form>
</div>
@endsection