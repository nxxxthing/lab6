<?php $__env->startSection('page'); ?>
    Добавление
<?php $__env->stopSection(); ?>

<?php $__env->startSection('add'); ?>
    <form method="POST" style="margin: auto">
        <?php echo csrf_field(); ?>
        <input type="text" name="name" placeholder="Назва" ><br><br>
        <button type="submit">Пошук</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\illya\lab5\resources\views/SearchProduct.blade.php ENDPATH**/ ?>