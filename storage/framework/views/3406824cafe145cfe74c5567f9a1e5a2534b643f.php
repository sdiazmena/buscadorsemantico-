

<?php $__env->startSection('content'); ?>
<?php echo e(dd($categorias)); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>