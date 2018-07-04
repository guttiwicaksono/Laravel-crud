<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected $fillable = ['nama','jenis_kelamin','pekerjaan','pendidikan','agama','alamat','kewarganegaraan'];
    protected $table = 'form';
}