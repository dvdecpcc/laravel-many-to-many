<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Welcome to the Administration Area, <?php echo e(Auth::user()->name); ?></h1>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/utente/Desktop/Laravel-Boolpress/resources/views/admin/home.blade.php ENDPATH**/ ?>