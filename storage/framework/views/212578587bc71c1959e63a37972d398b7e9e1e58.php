<?php $__env->startSection('content'); ?>
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

				<?php 
				$no=1;
				 ?>
				<tbody>
					<?php $__currentLoopData = $penggajian; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
					<tr>
						<td> <?php echo e($no++); ?> </td>
						<td> <?php echo e($data->Tunjangan->kode_tunjangan); ?> </td>
						<td> <?php echo e($data->jumlah_jam_lembur); ?> </td>
						<td> <?php echo e($data->jumlah_uang_lembur); ?> </td>
						<td> <?php echo e($data->gaji_pokok); ?> </td>
						<td> <?php echo e($data->total_gaji); ?> </td>
						<td> <?php echo e($data->tanggal_pengambilan); ?> </td>
						<td> <?php echo e($data->status_pengambilan); ?> </td>
						<td> <?php echo e($data->petugas_penerima); ?> </td>
						<td>
							<a class="btn btn-info btn-sm" href="<?php echo e(route('penggajian.edit', $data->id)); ?>">Ubah</a>
						</td>
						<td>
							<form method="POST" action="<?php echo e(route('penggajian.destroy', $data->id)); ?>">
								<?php echo e(csrf_field()); ?>

								<input type="hidden" name="_method" value="DELETE">
								<input class="btn btn-danger btn-sm" onclick="return confirm('Apakah yakin ingin menghapus data ?');" type="submit" value="Hapus">
							</form>
						</td>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
				</tbody>
			</table>
			<center><a class="btn btn-success" href="<?php echo e(url('penggajian/create')); ?>"><b>Tambah Data</b></a></center>
			Note:
			<br>1=>Sudah Diambil<br>
				 0=>Belum Diambil
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>