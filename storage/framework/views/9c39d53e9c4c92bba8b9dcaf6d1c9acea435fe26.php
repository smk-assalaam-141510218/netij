<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">    
			<div class="panel-heading"><h2><b><center>Ubah Data</center></b></h2></div>
				<div class="panel-body">
					<form action="<?php echo e(route('pegawai.update', $pegawai->id)); ?>" method="post" enctype= "multipart/form-data">
					<?php echo e(csrf_field()); ?>

                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Masukkan NIP</label>
                        <div class="col-md-8 form-group">
                            <input type="text" name="nip" class="form-control" value="<?php echo e($pegawai->nip); ?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Pilih Jabatan</label>
                        <div class="col-md-8 form-group">
                            <select name="jabatan_id" class="form-control" required>
                            <option>Pilih Data Jabatan</option>
                                <?php $__currentLoopData = $jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                <option value="<?php echo e($data->id); ?>"><?php echo e($data->nama_jabatan); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Pilih Golongan</label>
                        <div class="col-md-8 form-group">
                            <select name="golongan_id" class="form-control" required>
                            <option>Pilih Data Golongan</option>
                                <?php $__currentLoopData = $golongan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                <option value="<?php echo e($data->id); ?>"><?php echo e($data->nama_golongan); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                            </select>
                        </div>
                    </div>
                        
                    <div class="form-group">
                        <label class="col-md-4 control-label">Pilih Foto</label>
                        <div class="col-md-8 form-group">
                            <input type="file" id="photo" name="photo">
                        </div>
                    </div>

                    <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                        <label class="col-md-4 control-label">Name</label>

                        <div class="col-md-8 form-group">
                            <input id="name" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" required autofocus>

                            <?php if($errors->has('name')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('name')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                        <label class="col-md-4 control-label">E-Mail Address</label>

                        <div class="col-md-8 form-group">
                            <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required>

                            <?php if($errors->has('email')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('email')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                        <label class="col-md-4 control-label">Password</label>

                        <div class="col-md-8 form-group">
                            <input id="password" type="password" class="form-control" name="password" required>

                            <?php if($errors->has('password')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('password')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Confirm Password</label>

                        <div class="col-md-8 form-group">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                    </div>

                    <div class="form-group<?php echo e($errors->has('permission') ? ' has error' : ''); ?>">
                        <label class="col-md-4 control-label">Permission</label>
                        <div class="col-md-8 form-group">
                            <input class="form-control" id="permission" type="text" name="permission" required>

                            <?php if($errors->has('permission')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('permission')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
    <div class="form-group">
        <div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-success">
                        Simpan
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>