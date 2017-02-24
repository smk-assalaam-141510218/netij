<?php $__env->startSection('content'); ?>
<div class="container">
	<center><h2><label>Tambah Data Jabatan</label></h2></center><hr>
	<form method="POST" action="<?php echo e(url('jabatan')); ?>">
		<?php echo e(csrf_field()); ?>


		<div class="form-group">
			<label class="col-md-4 control-label">Kode Jabatan</label>
			<div class="form-group col-md-6">
				<input class="form-control" type="text" name="kode_jabatan">
			</div>
		</div>

		<div class="form-group">
			<label class="col-md-4 control-label">Nama Jabatan</label>
			<div class="form-group col-md-6">
				<input class="form-control" type="text" name="nama_jabatan">
			</div>
		</div>

		<div class="form-group">
			<label class="col-md-4 control-label">Besaran Uang</label>
			<div class="form-group col-md-6">
				<input class="form-control" type="text" name="besaran_uang">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-6 col-md-offset-4">
				<input class="btn btn-success" type="submit" value="Simpan">
			</div>
		</div>
	</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>