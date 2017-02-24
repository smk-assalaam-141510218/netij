<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="panel panel-info">
		<div class="panel-heading"><b>Tambah Data Golongan</b></div>
		<div class="panel-body">
			<form method="POST" action="<?php echo e(url('golongan')); ?>">
				<?php echo e(csrf_field()); ?>

				
				<div class="form-group">
					<label class="col-md-4 control-label">Kode Golongan</label>
					<div class="form-group col-md-6">
						<input class="form-control" type="text" name="kode_golongan">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">Nama Golongan</label>
					<div class="form-group col-md-6">
						<input class="form-control" type="text" name="nama_golongan">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">Besaran Uang</label>
					<div class="form-group col-md-6">
						<input class="form-control" type="text" name="besaran_uang">
					</div>
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