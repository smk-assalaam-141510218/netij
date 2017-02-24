<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penggajian extends Model
{
    //
    protected $table='penggajians';
    protected $fillable=['tunjangan_pegawai_id','jumlah_jam_lembur','jumlah_uang_lembur','gaji_pokok','total_gaji','tanggal_pengambilan','status_pengambilan','petugas_penerima'];

    public function TunjanganPegawai()
    {
    	return $this->belongsTO('App\TunjanganPegawai','tunjangan_pegawai_id');
    }
    public function LemburPegawai()
    {
    	return $this->belongsTO('App\LemburPegawai','jumlah_jam_lembur');
    }
    public function Tunjangan()
    {
        return $this->belongsTO('App\Tunjangan','tunjangan_pegawai_id');
    }
    public function Pegawai()
    {
        return $this->belongsTO('App\Pegawai','pegawai_id');
    }
}
