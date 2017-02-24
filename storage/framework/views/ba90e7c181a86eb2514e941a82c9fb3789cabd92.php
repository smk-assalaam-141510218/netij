<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="panel panel-info">
		<div class="panel-heading"><b>Ubah Data Golongan</b></div>
		<div class="panel-body">
			<form method="POST" action="<?php echo e(route('golongan.update', $golongan->id)); ?>">
				<?php echo e(csrf_field()); ?>

				<input type="hidden" name="_method" value="PATCH">
				<div class="form-group">
					<label>Kode Golongan</label>
					<input class="form-control" type="text" name="kode_golongan" value="<?php echo e($golongan->kode_golongan); ?>" >
				</div>
				<div class="form-group">
					<label>Nama Golongan</label>
					<input class="form-control" type="text" name="nama_golongan" value="<?php echo e($golongan->nama_golongan); ?>" >
				</div>
				<div class="form-group">
					<label>Besaran Uang</label>
					<input class="form-control" type="text" name="besaran_uang" value="<?php echo e($golongan->besaran_uang); ?>" >
				</div>
				<div class="form-group">
					<input class="btn btn-success" type="submit" value="Simpan">
				</div>
			</form>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>