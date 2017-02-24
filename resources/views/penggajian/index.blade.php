@extends('layouts.app')

@section('content')
<div class="container">
	<div class="panel panel-info">
		<div class="panel-heading"><b><h2><center>Penggajian</center></h2></b></div>
		<div class="panel-body">
			<table class="table table-striped table-bordered table-hover">
				<thead>
				<tr class="bg-primary">
					<th>No</th>
					<th>Tunjangan Pegawai</th>
					<th>Jam Lembur</th>
					<th>Uang Lembur</th>
					<th>Gaji Pokok</th>
					<th>Total Gaji</th>
					<th>Tanggal Penggambilan</th>
					<th>Status Pengambilan</th>
					<th>Petugas Penerima</th>
					<th colspan="2">Action</th>
				</tr>
				</thead>

				@php
				$no=1;
				@endphp
				<tbody>
					@foreach($penggajian as $data)
					<tr>
						<td> {{$no++}} </td>
						<td> {{$data->Tunjangan->kode_tunjangan}} </td>
						<td> {{$data->jumlah_jam_lembur}} </td>
						<td> {{$data->jumlah_uang_lembur}} </td>
						<td> {{$data->gaji_pokok}} </td>
						<td> {{$data->total_gaji}} </td>
						<td> {{$data->tanggal_pengambilan}} </td>
						<td> {{$data->status_pengambilan}} </td>
						<td> {{$data->petugas_penerima}} </td>
						<td>
							<a class="btn btn-info btn-sm" href="{{route('penggajian.edit', $data->id)}}">Ubah</a>
						</td>
						<td>
							<form method="POST" action="{{route('penggajian.destroy', $data->id)}}">
								{{csrf_field()}}
								<input type="hidden" name="_method" value="DELETE">
								<input class="btn btn-danger btn-sm" onclick="return confirm('Apakah yakin ingin menghapus data ?');" type="submit" value="Hapus">
							</form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			<center><a class="btn btn-success" href="{{url('penggajian/create')}}"><b>Tambah Data</b></a></center>
			Note:
			<br>1=>Sudah Diambil<br>
				 0=>Belum Diambil
		</div>
	</div>
</div>
@endsection