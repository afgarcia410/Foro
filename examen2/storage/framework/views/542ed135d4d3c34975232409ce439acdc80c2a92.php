<?php $__env->startSection('content'); ?>
<div>
    <form action="<?php echo e(url('usuario')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input value="<?php echo e(old('nombre')); ?>" _required type="text" minlength="2" maxlength="50" class="form-control" id="nombre" name="nombre" placeholder="Nombre Usuario">
            <label for="correo">Correo</label>
            <input value="<?php echo e(old('correo')); ?>" required type="text" minlength="2" maxlength="100" class="form-control" id="correo" name="correo" placeholder="correo">
            <label for="fechaNacimiento">Fecha Nacimiento</label>
            <input value="<?php echo e(old('fechaNacimiento')); ?>" type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" placeholder="fechaNacimiento">
        </div>
        <button type="register" class="btn btn-primary">Register</button>
        &nbsp;
        <a href="<?php echo e(url('usuario')); ?>" class="btn btn-primary">back</a>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/laravel/examen2/resources/views/usuario/create.blade.php ENDPATH**/ ?>