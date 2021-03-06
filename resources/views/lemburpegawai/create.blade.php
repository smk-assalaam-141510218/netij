@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<center><h2><label>Tambah Data Lembur Pegawai</label></h2></center><hr>
	<form method="POST" action="{{url('lembur-pegawai')}}">
		{{csrf_field()}}

		<div class="form-group">
			<label class="col-md-4 control-label">Kode Lembur</label>
			<div class="form-group col-md-6">
				<select name="kode_lembur_id" class="form-control" required="">
				<option>Pilih Kode Lembur</option>
                    @foreach($kategoril as $data)
                    <option value="{{$data->id}}">{{$data->kode_lembur}}</option>
                    @endforeach
                </select>
			</div>
		</div>

		<div class="form-group">
			<label class="col-md-4 control-label">Pegawai</label>
			<div class="form-group col-md-6">
				<select name="pegawai_id" class="form-control" required="">
					<option>Pilih Data Pegawai</option>
                    @foreach($pegawai as $data)
                    <option value="{{$data->id}}">{{$data->nip}}</option>
                    @endforeach
                </select>
			</div>
		</div>

		<div class="form-group">
			<label class="col-md-4 control-label">Jumlah Jam</label>
			<div class="form-group col-md-6">
				<input class="form-control" type="text" name="jumlah_jam" required="">
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