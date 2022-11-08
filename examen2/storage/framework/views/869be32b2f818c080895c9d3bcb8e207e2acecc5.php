<?php $__env->startSection('content'); ?>
<div class="row" style="margin-top: 8px;">
<table>
    <thead>
        <tr>
            <th scope="col">Titulo Post</th>
            <th scope="col">Comentarios</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td> <?php echo e($post->mensaje); ?></td>
            <td>
                <a href="<?php echo e(url('post/' . $post->id .'/edit')); ?>">Editar Comentario</a>
            </td>
            <td>
                <a href="<?php echo e(url('post/' . $post->id)); ?>">Borrar Comentario</a>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
</div>
<div>
    <form action="<?php echo e(url('post')); ?>" method="post">
         <?php echo csrf_field(); ?>
        &nbsp;
        <a href="<?php echo e(url('post/create')); ?>" class="btn btn-primary">Añadir Post</a>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/laravel/examen2/resources/views/Post/index.blade.php ENDPATH**/ ?>