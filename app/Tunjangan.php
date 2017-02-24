<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tunjangan extends Model
{
    //
    protected $table='tunjangans';
    protected $fillable=['kode_tunjangan','jabatan_id','golongan_id','status','jumlah_anak','besaran_uang'];

    public function Jabatan()
    {
    	return $this->belongsTo('App\Jabatan','jabatan_id');
    }
    public function Golongan()
    {
    	return $this->belongsTo('App\Golongan','golongan_id');
    }
    public function TUnjanganPegawai()
    {
        return $this->hasMany('App\TUnjanganPegawai','kode_tunjangan_id');
    }
}
