<?php $__env->startSection('content'); ?>
<div>
    <form action="<?php echo e(url('usuario')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="interprete">Correo</label>
            <input value="<?php echo e(old('correo')); ?>" required type="text" minlength="2" maxlength="100" class="form-control" id="correo" name="correo" placeholder="correo">
            
        </div>
        <button type="signin" class="btn btn-primary">Sign in</button>
        &nbsp;
        <a href="<?php echo e(url('usuario/create')); ?>" class="btn btn-primary">Register</a>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/laravel/examen2/resources/views/usuario/index.blade.php ENDPATH**/ ?>