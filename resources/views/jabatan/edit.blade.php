@extends('layouts.app')

@section('content')
<div class="container">
	<div class="col-md-8 col-md-offset-2">
				<center><h2><label>Ubah Data Jabatan</label></h2></center><hr>
					<form method="POST" action="{{route('jabatan.update', $jabatan->id)}}">
		{{csrf_field()}}
		<input type="hidden" name="_method" value="PATCH">

		<div class="form-group">
			<label class="col-md-4 control-label">Kode Jabatan</label>
			<div class="form-group col-md-6">
				<input class="form-control" type="text" name="kode_jabatan" value="{{$jabatan->kode_jabatan}}" required="tidak boleh kosong">
			</div>
		</div>

		<div class="form-group">
			<label class="col-md-4 control-label">Nama Jabatan</label>
			<div class="form-group col-md-6">
				<input class="form-control" type="text" name="nama_jabatan" value="{{$jabatan->nama_jabatan}}" required="">
			</div>
		</div>

		<div class="form-group">
			<label class="col-md-4 control-label">Besaran Uang</label>
			<div class="form-group col-md-6">
				<input class="form-control" type="text" name="besaran_uang" value="{{$jabatan->besaran_uang}}" required="">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-6 col-md-offset-4">
				<input class="btn btn-success" type="submit" value="Simpan">
			</div>
		</div>
	</form>
			
	</div>
</div>
@endsection