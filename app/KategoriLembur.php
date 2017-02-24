<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriLembur extends Model
{
    //
    protected $table='kategori_lemburs';
    protected $fillable=['kode_lembur','jabatan_id','golongan_id','besaran_uang'];

    public function LemburPegawai()
    {
    	return $this->hasMany('App\LemburPegawai','kode_lembur_id');
    }
    public function Jabatan()
    {
    	return $this->belongsTo('App\Jabatan','jabatan_id');
    }
    public function Golongan()
    {
    	return $this->belongsTo('App\Golongan','golongan_id');
    }
}
