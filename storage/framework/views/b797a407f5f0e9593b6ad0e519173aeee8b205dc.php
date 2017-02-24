<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="panel panel-info">
		<div class="panel-heading"><b>Tunjangan</b></div>
		<div class="panel-body">
		<a class="btn btn-success" href="<?php echo e(url('tunjangan/create')); ?>"><b>+ Tambah</b></a>
		<br><br>
			<table class="table table-striped table-bordered table-hover">
				<thead>
				<tr class="bg-primary">
					<th>No</th>
					<th>Kode Tunjangan</th>
					<th>Jabatan</th>
					<th>Golongan</th>
					<th>Status</th>
					<th>Jumlah Anak</th>
					<th>Besaran Uang</th>
					<th colspan="2">Action</th>
				</tr>
				</thead>

				<?php 
				$no=1;
				 ?>
				<tbody>
					<?php $__currentLoopData = $tunjangan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
					<tr>
						<td> <?php echo e($no++); ?> </td>
						<td> <?php echo e($data->kode_tunjangan); ?> </td>
						<td> <?php echo e($data->Jabatan->nama_jabatan); ?> </td>
						<td> <?php echo e($data->Golongan->nama_golongan); ?> </td>
						<td> <?php echo e($data->status); ?> </td>
						<td> <?php echo e($data->jumlah_anak); ?> </td>
						<td> <?php echo e($data->besaran_uang); ?> </td>
						<td>
							<a class="btn btn-info btn-sm" href="<?php echo e(route('tunjangan.edit', $data->id)); ?>">Ubah</a>
						</td>
						<td>
							<form method="POST" action="<?php echo e(route('tunjangan.destroy', $data->id)); ?>">
								<?php echo e(csrf_field()); ?>

								<input type="hidden" name="_method" value="DELETE">
								<input class="btn btn-danger btn-sm" onclick="return confirm('Apakah yakin ingin menghapus data ?');" type="submit" value="Hapus">
							</form>
						</td>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>