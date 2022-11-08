<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>laravel - dwes - <?php echo e($table ?? 'forum'); ?></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="<?php echo e(url('')); ?>">Forum</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item <?php echo e($activeHome ?? ''); ?>">
                        <a class="nav-link" href="<?php echo e(url('usuario')); ?>">Home</a>
                    </li>
                    <li class="nav-item <?php echo e($activeUsuario ?? ''); ?>">
                        <a class="nav-link" href="<?php echo e(url('usuario')); ?>">Log In</a>
                    </li>
                    <li class="nav-item <?php echo e($activePost ?? ''); ?>">
                        <a class="nav-link" href="<?php echo e(url('post')); ?>">Posts</a>
                    </li>
                </ul>
            </div>
        </nav>
        <?php echo $__env->yieldContent('modalContent'); ?>
        <main role="main">
            <div class="jumbotron">
                <div class="container">
                    <h4 class="display-4"><?php echo e($title ?? 'Forum'); ?></h4>
                </div>
            </div>
            <div class="container">
                <?php if(session()->has('message')): ?>
                    <div class="alert alert-primary" role="alert">
                        <?php echo e(session()->get('message')); ?>

                    </div>
                <?php endif; ?>
                <div class="row">
                    <h3><?php echo e($subTitle ?? 'Home'); ?></h3>
                </div>
             <?php echo $__env->yieldContent('content'); ?>
                <hr>
            </div>
        </main>
        <footer class="container">
            <p>&copy; ForumLaravel</p>
        </footer>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <?php echo $__env->yieldContent('scripts'); ?>
    </body>
</html><?php /**PATH /var/www/html/laravel/examen2/resources/views/app/base.blade.php ENDPATH**/ ?>