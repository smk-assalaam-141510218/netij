<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LemburPegawai extends Model
{
    //
    protected $table='lembur_pegawais';
    protected $fillable=['kode_lembur_id','pegawai_id','jumlah_jam'];

    public function KategoriLembur()
    {
    	return $this->belongsTo('App\KategoriLembur','kode_lembur_id');
    }
    public function Pegawai()
    {
    	return $this->belongsTo('App\Pegawai','pegawai_id');
    }
}
