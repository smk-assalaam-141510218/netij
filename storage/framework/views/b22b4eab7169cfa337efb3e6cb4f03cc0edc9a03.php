<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<center><h2><label>Tambah Data Lembur Pegawai</label></h2></center><hr>
	<form method="POST" action="<?php echo e(url('lembur-pegawai')); ?>">
		<?php echo e(csrf_field()); ?>


		<div class="form-group">
			<label class="col-md-4 control-label">Kode Lembur</label>
			<div class="form-group col-md-6">
				<select name="kode_lembur_id" class="form-control">
				<option>Pilih Kode Lembur</option>
                    <?php $__currentLoopData = $kategoril; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                    <option value="<?php echo e($data->id); ?>"><?php echo e($data->kode_lembur); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                </select>
			</div>
		</div>

		<div class="form-group">
			<label class="col-md-4 control-label">Pegawai</label>
			<div class="form-group col-md-6">
				<select name="pegawai_id" class="form-control">
					<option>Pilih Data Pegawai</option>
                    <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                    <option value="<?php echo e($data->id); ?>"><?php echo e($data->nip); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                </select>
			</div>
		</div>

		<div class="form-group">
			<label class="col-md-4 control-label">Jumlah Jam</label>
			<div class="form-group col-md-6">
				<input class="form-control" type="text" name="jumlah_jam">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-6 col-md-offset-4">
				<input class="btn btn-primary" type="submit" value="Simpan">
			</div>
		</div>
	</form>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>