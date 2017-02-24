<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Golongan extends Model
{
    //
    protected $table='golongans';
    protected $fillable=['kode_golongan','nama_golongan','besaran_uang'];

    public function Pegawai()
    {
        return $this->hasMany('App\Pegawai','golongan_id');
    }
    public function TUnjangan()
    {
    	return $this->hasMany('App\TUnjangan','golongan_id');
    }
}
