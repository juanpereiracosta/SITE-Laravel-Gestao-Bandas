<?php $__env->startSection('content'); ?>
<div style="display: flex; justify-content: center; margin-top: 20px;">
    <div style="width: 600px;">
        <h1 style="text-align: center;">Bandas</h1>
        <table class="table" style="border: none; width: 100%; text-align: center;">
            <thead>
                <tr>
                    <th style="font-size: 1.5rem; background-color: white;">Name</th>
                    <th style="font-size: 1.5rem; background-color: white;">Photo</th>
                    <th style="font-size: 1.5rem; background-color: white;">Records</th>
                    <th style="font-size: 1.5rem; background-color: white;">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $bands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $band): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($band->name); ?></td>
                        <td>
                            <img src=<?php echo e(asset($band->photo)); ?> alt="<?php echo e($band->name); ?>" style="width: 100px;">
                        </td>
                        <td><?php echo e($band->albums); ?></td>
                        <td>
                            <a href="#">Records</a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Juan\Documents\cesae-software-developer\SITE-Laravel-Gestao-Bandas\final-project\resources\views/layouts/index.blade.php ENDPATH**/ ?>