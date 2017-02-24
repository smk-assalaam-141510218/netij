@extends('layouts.app')

@section('content')
<div class="container">
	<div class="panel panel-info">
		<div class="panel-heading"><b><h2><center>Tunjangan Pegawai</center></h2></b></div>
		<div class="panel-body">
			<table class="table table-striped table-bordered table-hover">
				<thead>
				<tr class="bg-primary">
					<th>No</th>
					<th>Tunjangan</th>
					<th>NIP</th>
					<th colspan="2">Action</th>
				</tr>
				</thead>

				@php
				$no=1;
				@endphp
				<tbody>
					@foreach($tpegawai as $data)
					<tr>
						<td> {{$no++}} </td>
						<td> {{$data->Tunjangan->besaran_uang}} </td>
						<td> {{$data->Pegawai->nip}} </td>
						<td>
							<a class="btn btn-info btn-sm" href="{{route('tunjangan-pegawai.edit', $data->id)}}">Ubah</a>
						</td>
						<td>
							<form method="POST" action="{{route('tunjangan-pegawai.destroy', $data->id)}}">
								{{csrf_field()}}
								<input type="hidden" name="_method" value="DELETE">
								<input class="btn btn-danger btn-sm" onclick="return confirm('Apakah yakin ingin menghapus data ?');" type="submit" value="Hapus">
							</form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			<center><a class="btn btn-success" href="{{url('tunjangan-pegawai/create')}}"><b>Tambah Data</b></a></center>
		</div>
	</div>
</div>
@endsection