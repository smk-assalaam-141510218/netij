<?php $__env->startSection('content'); ?>
<div class="container">
	<center><h2><label>Ubah Data Kategori</label></h2></center><hr>
	<form method="POST" action="<?php echo e(route('lembur-kategori.update',$kategoril->id)); ?>">
		<?php echo e(csrf_field()); ?>

		<input type="hidden" name="_method" value="PATCH">

		<div class="form-group">
			<label class="col-md-4 control-label">Kode Lembur</label>
			<div class="form-group col-md-6">
				<input class="form-control" type="text" name="kode_lembur" value="<?php echo e($kategoril->kode_lembur); ?>">
			</div>
		</div>

		<div class="form-group">
			<label class="col-md-4 control-label">Nama Jabatan</label>
			<div class="form-group col-md-6">
				<select name="jabatan_id" class="form-control">
                    <?php $__currentLoopData = $jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                    <option value="<?php echo e($data->id); ?>"><?php echo e($data->nama_jabatan); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                </select>
			</div>
		</div>

		<div class="form-group">
			<label class="col-md-4 control-label">Nama Golongan</label>
			<div class="form-group col-md-6">
				<select name="golongan_id" class="form-control">
                    <?php $__currentLoopData = $golongan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                    <option value="<?php echo e($data->id); ?>"><?php echo e($data->nama_golongan); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                </select>
			</div>
		</div>

		<div class="form-group">
			<label class="col-md-4 control-label">Besaran Uang</label>
			<div class="form-group col-md-6">
				<input class="form-control" type="text" name="besaran_uang" value="<?php echo e($kategoril->besaran_uang); ?>">
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