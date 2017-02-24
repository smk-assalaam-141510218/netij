@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<center><h2><label>Tambah Data Penggajian</label></h2></center><hr>
	<form method="POST" action="{{route('penggajian.update', $penggajian->id)}}">
		{{csrf_field()}}

		<div class="form-group">
			<label class="col-md-4 control-label">Tunjangan Pegawai</label>
			<div class="form-group col-md-6">
				<select name="tunjangan_pegawai_id" class="form-control" required="">
				<option>Pilih Tunjangan Pegawai</option>
                    @foreach($tun as $data)
                    <option value="{{$data->id}}">{{$data->kode_tunjangan}}</option>
                    @endforeach
                </select>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-4 control-label">Jumlah Jam</label>
			<div class="form-group col-md-6">
				<input class="form-control" type="text" name="jumlah_jam_lembur" value="{{$penggajian->jumlah_jam_lembur}}" required="">
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-4 control-label">Uang lembur</label>
			<div class="form-group col-md-6">
				<input class="form-control" type="text" name="jumlah_uang_lembur" required="">
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-4 control-label">Gaji Pokok</label>
			<div class="form-group col-md-6">
				<input class="form-control" type="text" name="gaji_pokok" required="">
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-4 control-label">Total Gaji</label>
			<div class="form-group col-md-6">
				<input class="form-control" type="text" name="total_gaji" required="">
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-4 control-label">Tanggal Pengambilan</label>
			<div class="form-group col-md-6">
				<input class="form-control" type="date" name="tanggal_pengambilan" required="">
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-4 control-label">Status Pengambilan</label>
			<div class="form-group col-md-6">
				<input class="form-control" type="boolean" name="status_pengambilan" required="">
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-4 control-label">Petugas Penerima</label>
			<div class="form-group col-md-6">
				<input class="form-control" type="text" name="petugas_penerima" required="">
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-6 col-md-offset-4">
				<input class="btn btn-primary" type="submit" value="Simpan">
			</div>
		</div>
	</form>
		</div>
	</div>
</div>
@endsection