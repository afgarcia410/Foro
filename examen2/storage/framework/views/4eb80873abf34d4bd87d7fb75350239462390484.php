<?php $__env->startSection('content'); ?>
<div>
    <form "<?php echo e(url('post/' . $post->id )); ?>" method="post">
        <?php echo csrf_field(); ?>
        <?php echo method_field('put'); ?>
        <div class="form-group">
            <label for="mensaje">Mensaje</label>
            <input value="<?php echo e(old('mensaje')); ?>" _required type="text" minlength="2" maxlength="100" class="form-control" id="mensaje" name="mensaje" placeholder="Mensaje">
            <button type="submit" class="btn btn-primary">Editar Post</button>
            &nbsp;
             <a href="<?php echo e(url('post')); ?>" class="btn btn-primary">Volver atras</a>
        </div>
        <?php echo csrf_field(); ?>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/laravel/examen2/resources/views/Post/edit.blade.php ENDPATH**/ ?>