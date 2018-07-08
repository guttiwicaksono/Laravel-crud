<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected $fillable = [
    	'no_kk',
    	'nama',
    	'jenis_kelamin',
    	'tempat_lahir',
    	'tgl_lahir',
    	'pekerjaan',
    	'no_ktp',
    	'pendidikan',
    	'agama',
    	'alamat',
    	'kecamatan',
    	'kelurahan',
    	'rw',
    	'rt',
    	'kewarganegaraan',
    	'notes'];
    protected $table = 'form';
}