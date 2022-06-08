<?php $__env->startSection('title', $user->name); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container">
    <div class="card mt-3">
        <div class="card-body">
            <div class="d-flex flex-row">
                <a href="<?php echo e(route('users.show', ['name' => $user->name])); ?>" class="text-dark">
                    <i class="fas fa-user-circle fa-3x"></i>
                </a>
            </div>
            <h2 class="h5 card-title m-0">
                <a href="<?php echo e(route('users.show', ['name' => $user->name])); ?>" class="text-dark">
                    <?php echo e($user->name); ?>

                </a>
            </h2>
        </div>
        <div class="card-body">
            <div class="card-text">
                <a href="" class="text-muted">
                    10 フォロー
                </a>
                <a href="" class="text-muted">
                    10 フォロワー
                </a>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_ap\resources\views/users/show.blade.php ENDPATH**/ ?>