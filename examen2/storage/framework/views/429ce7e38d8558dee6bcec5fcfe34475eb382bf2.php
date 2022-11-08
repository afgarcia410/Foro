<?php $__env->startSection('content'); ?>
<div>
    <form action="<?php echo e(url('post')); ?>" method="post">
    <?php echo csrf_field(); ?>
<div class="form-group">
     <label for="mensaje">Mensaje</label>
     <input value="<?php echo e(old('mensaje')); ?>" _required type="text" minlength="2" maxlength="100" class="form-control" id="mensaje" name="mensaje" placeholder="Mensaje">
     <button type="register" class="btn btn-primary">Subir Post</button>
</div>
</form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('app.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/laravel/examen2/resources/views/Post/create.blade.php ENDPATH**/ ?>