<?php $__env->startSection('content'); ?>
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

				<?php 
				$no=1;
				 ?>
				<tbody>
					<?php $__currentLoopData = $tpegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
					<tr>
						<td> <?php echo e($no++); ?> </td>
						<td> <?php echo e($data->Tunjangan->besaran_uang); ?> </td>
						<td> <?php echo e($data->Pegawai->nip); ?> </td>
						<td>
							<a class="btn btn-info btn-sm" href="<?php echo e(route('tunjangan-pegawai.edit', $data->id)); ?>">Ubah</a>
						</td>
						<td>
							<form method="POST" action="<?php echo e(route('tunjangan-pegawai.destroy', $data->id)); ?>">
								<?php echo e(csrf_field()); ?>

								<input type="hidden" name="_method" value="DELETE">
								<input class="btn btn-danger btn-sm" onclick="return confirm('Apakah yakin ingin menghapus data ?');" type="submit" value="Hapus">
							</form>
						</td>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
				</tbody>
			</table>
			<center><a class="btn btn-success" href="<?php echo e(url('tunjangan-pegawai/create')); ?>"><b>Tambah Data</b></a></center>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>