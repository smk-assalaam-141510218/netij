<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row">
        <div class="col-md-8 col-md-offset-2">
        	<center><h2><label>Ubah Data Golongan</label></h2></center><hr>
				<form method="POST" action="<?php echo e(route('golongan.update', $golongan->id)); ?>">
					<?php echo e(csrf_field()); ?>

						<input type="hidden" name="_method" value="PATCH">
							<div class="form-group">
								<label class="col-md-4 control-label">Kode Golongan</label>
									<div class="form-group col-md-6">
										<input class="form-control" type="text" name="kode_golongan" value="<?php echo e($golongan->kode_golongan); ?>">
									</div>
								</div>

							<div class="form-group">
								<label class="col-md-4 control-label">Nama Golongan</label>
									<div class="form-group col-md-6">
										<input class="form-control" type="text" name="nama_golongan" value="<?php echo e($golongan->nama_golongan); ?>">
									</div>
								</div>

							<div class="form-group">
								<label class="col-md-4 control-label">Besaran Uang</label>
									<div class="form-group col-md-6">
										<input class="form-control" type="text" name="besaran_uang" value="<?php echo e($golongan->besaran_uang); ?>">
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
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>