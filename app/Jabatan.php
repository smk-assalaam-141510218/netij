<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    //
    protected $table='jabatans';
    protected $fillable=['kode_jabatan','nama_jabatan','besaran_uang'];

    public function Pegawai()
    {
        return $this->hasMany('App\Pegawai','jabatan_id');
    }
    public function TUnjangan()
    {
    	return $this->hasMany('App\TUnjangan','jabatan_id');
    }
}
