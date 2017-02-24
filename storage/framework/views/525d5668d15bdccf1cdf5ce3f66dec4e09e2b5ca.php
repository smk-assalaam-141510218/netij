<?php $__env->startSection('content'); ?>
<div class="container">
	<center><h2><label>Tambah Data Tunjangan Pegawai</label></h2></center><hr>
	<form method="POST" action="<?php echo e(url('tunjangan-pegawai')); ?>">
		<?php echo e(csrf_field()); ?>


		<div class="form-group">
			<label class="col-md-4 control-label">Tunjangan</label>
			<div class="form-group col-md-6">
				<select name="kode_tunjangan_id" class="form-control">
                    <?php $__currentLoopData = $tunjangan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                    <option value="<?php echo e($data->id); ?>"><?php echo e($data->besaran_uang); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                </select>
			</div>
		</div>

		<div class="form-group">
			<label class="col-md-4 control-label">NIP</label>
			<div class="form-group col-md-6">
				<select name="pegawai_id" class="form-control">
                    <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                    <option value="<?php echo e($data->id); ?>"><?php echo e($data->nip); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                </select>
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