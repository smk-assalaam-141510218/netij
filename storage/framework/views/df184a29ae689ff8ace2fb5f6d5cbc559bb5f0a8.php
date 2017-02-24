<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<center><h2><label>Tambah Data Kategori Lembur</label></h2></center><hr>
		<form method="POST" action="<?php echo e(url('lembur-kategori')); ?>">
		<?php echo e(csrf_field()); ?>


		<div class="form-group">
			<label class="col-md-4 control-label">Kode Lembur</label>
			<div class="form-group col-md-6">
				<input class="form-control" type="text" name="kode_lembur">
			</div>
		</div>

		<div class="form-group">
			<label class="col-md-4 control-label">Jabatan</label>
			<div class="form-group col-md-6">
				<select name="jabatan_id" class="form-control">
				<option>Pilih Data Jabatan</option>
                    <?php $__currentLoopData = $jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                    <option value="<?php echo e($data->id); ?>"><?php echo e($data->nama_jabatan); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                </select>
			</div>
		</div>

		<div class="form-group">
			<label class="col-md-4 control-label">Golongan</label>
			<div class="form-group col-md-6">
				<select name="golongan_id" class="form-control">
				<option>Pilih Data Golongan</option>
                    <?php $__currentLoopData = $golongan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                    <option value="<?php echo e($data->id); ?>"><?php echo e($data->nama_golongan); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                </select>
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
				<input class="btn btn-primary" type="submit" value="Simpan">
			</div>
		</div>
	</form>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>