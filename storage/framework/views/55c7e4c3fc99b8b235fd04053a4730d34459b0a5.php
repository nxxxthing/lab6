<?php $__env->startSection('page'); ?>
    Главная
<?php $__env->stopSection(); ?>


<?php $__env->startSection('table'); ?>


    <?php if(count([$Products, $st_name])): ?>
        <table>
            <tr>
                <th>Магазин</th>
                <th>Продукт</th>
            </tr>
            <?php $__currentLoopData = $Products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($st_name); ?></a></td>
                    <td><?php echo e($product->name); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    <?php endif; ?>
    <a href="/" class="button">Назад</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\illya\lab5\resources\views//StorePage.blade.php ENDPATH**/ ?>