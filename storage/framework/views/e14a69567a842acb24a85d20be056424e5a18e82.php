<?php $__env->startSection('page'); ?>
    Главная
<?php $__env->stopSection(); ?>


<?php $__env->startSection('table'); ?>


    <?php if(count([$Products,$Stores])): ?>
        <table>
            <tr>
                <th>Магазин</th>
                <th>Продукт</th>
            </tr>
            <?php $__currentLoopData = $Stores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $store): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $__currentLoopData = $Products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($product->store_id == $store->id): ?>
                    <tr>
                        <td><?php echo e($store->name); ?></a></td>
                        <td><?php echo e($product->name); ?></td>
                    </tr>
                    <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    <?php endif; ?>
    <a href="/" class="button">Назад</a>
    <a href="/belongsToMany" class="button">belongsToMany</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\illya\lab5\resources\views/StorePage.blade.php ENDPATH**/ ?>
