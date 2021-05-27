<?php $__env->startSection('page'); ?>
    Главная
<?php $__env->stopSection(); ?>


<?php $__env->startSection('table'); ?>


    <?php if(count($Products)): ?>
    <table>
        <tr>
            <th>Назва</th>
        </tr>
        <?php $__currentLoopData = $Products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><a href="/<?php echo e($product->name); ?>/ProductPage" style="text-decoration: none"><?php echo e($product->name); ?></a></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\illya\lab5\resources\views/main.blade.php ENDPATH**/ ?>