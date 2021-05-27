<?php $__env->startSection('page'); ?>
    Продукт
<?php $__env->stopSection(); ?>

<?php $__env->startSection('table'); ?>
    <?php if($product && $stores && $prices): ?>
        <table>
            <tr>
                <th>Назва</th>
                <th>Магазин</th>
                <th>Ціна</th>
            </tr>
            <?php for($i = 0; $i < count($stores); $i++): ?>
                <tr>
                    <td><?php echo e($product); ?></td>
                    <td><a href="/<?php echo e($stores[$i]); ?>/StorePage"><?php echo e($stores[$i]); ?></td>
                    <td><?php echo e($prices[$i]); ?></td>
                </tr>
            <?php endfor; ?>
            <?php endif; ?>
        </table>
        <a href="/" class="button">Назад</a>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\illya\lab5\resources\views/ProductPage.blade.php ENDPATH**/ ?>