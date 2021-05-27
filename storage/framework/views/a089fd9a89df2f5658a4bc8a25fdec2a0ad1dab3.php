<?php $__env->startSection('page'); ?>
    Продукт
<?php $__env->stopSection(); ?>

<?php $__env->startSection('table'); ?>
    <?php if($product && $store): ?>
        <table>
            <tr>
                <th>Назва</th>
                <th>Магазин</th>
                <th>Ціна</th>
            </tr>
            <tr>
                <td><?php echo e($product->name); ?></td>
                <td><a href="/<?php echo e($store); ?>/StorePage"><?php echo e($store); ?></td>
                <td><?php echo e($product->price); ?></td>
            </tr>
            <?php endif; ?>
        </table>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\illya\lab5\resources\views//ProductPage.blade.php ENDPATH**/ ?>