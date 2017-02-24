@extends('layouts.app')

@section('content')
<div class="container">
	<div class="panel panel-info">
		<div class="panel-heading"><b><h2><center>Pegawai</center></h2></b></div>
		<div class="panel-body">
			<table class="table table-striped table-bordered table-hover">
				<thead>
				<tr class="bg-primary">
					<th>No</th>
					<th>NIP</th>
					<th>Email</th>
					<th>Nama Jabatan</th>
					<th>Nama Golongan</th>
					<th>Photo</th>
					<th colspan="3">Action</th>
				</tr>
				</thead>

				@php
				$no=1;
				@endphp
				<tbody>
					@foreach($pegawai as $data)
					<tr>
						<td> {{$no++}} </td>
						<td> {{$data->nip}} </td>
						<td> {{$data->User->email}} </td>
						<td> {{$data->Jabatan->nama_jabatan}} </td>
						<td> {{$data->Golongan->nama_golongan}} </td>
						<td><img src="gambar/{{$data->photo}}" height="90px" width="100px"></td>
						<td>
						<a class="btn btn-info btn-sm" href="{{route('pegawai.edit', $data->id)}}">Ubah</a>
						</td>
						<td>
							<form method="POST" action="{{route('pegawai.destroy', $data->id)}}">
								{{csrf_field()}}
								<input type="hidden" name="_method" value="DELETE">
								<input class="btn btn-danger btn-sm" onclick="return confirm('Apakah yakin ingin menghapus data ?');" type="submit" value="Hapus">
							</form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			<center><a class="btn btn-success" href="{{url('pegawai/create')}}"><b>Tambah Data</b></a></center>
		</div>
	</div>
</div>
@endsection