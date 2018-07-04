<!-- form.blade.php -->

@extends('master')
@section('content')
<form method="post" action="{{url('submitForm')}}">
    {{csrf_field()}}
    <div class="form-group"> <!-- Full Name -->
      <label for="full_name_id" class="control-label">Nama</label>
      <input type="text" class="form-control" id="full_name_id" name="nama" placeholder="John Deer">
    </div>

    <div class="form-group"> <!-- Street 1 -->
      <label for="street1_id" class="control-label">Pekerjaan</label>
      <input type="text" class="form-control" id="street1_id" name="pekerjaan" placeholder="Street address, P.O. box, company name, c/o">
    </div>

    <div class="form-group"> <!-- City-->
      <label for="city_id" class="control-label">Pendidikan</label>
      <input type="text" class="form-control" id="city_id" name="pendidikan" placeholder="Smallville">
    </div>

    <div class="form-group"> <!-- Zip Code-->
      <label for="zip_id" class="control-label">Agama</label>
      <input type="text" class="form-control" id="zip_id" name="agama" placeholder="#####">
    </div>

    <div class="form-group"> <!-- Zip Code-->
      <label for="zip_id" class="control-label">Alamat</label>
      <input type="text" class="form-control" id="zip_id" name="alamat" placeholder="#####">
    </div>

    <div class="form-group"> <!-- Zip Code-->
      <label for="zip_id" class="control-label">Kewarganegaraan</label>
      <input type="text" class="form-control" id="zip_id" name="kewarganegaraan" placeholder="#####">
    </div>

    <div class="form-group"> <!-- Zip Code-->
       <lable>Jenis Kelamin</lable>
        <select name="jenis_kelamin">
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
    </div>

    <div class="form-group"> <!-- Submit Button -->
      <button type="submit" class="btn btn-primary">Buy!</button>
    </div>

    </form>
@endsection