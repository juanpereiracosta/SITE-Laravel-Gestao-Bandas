<?php $__env->startSection('content'); ?>
<div style="display: flex; justify-content: center; margin-top: 20px;">
    <div style="width: 600px;">
        <h1 style="text-align: center;">Álbuns de <?php echo e($band->name); ?></h1>
        <table class="table" style="border: none; width: 100%; text-align: center;">
            <thead>
                <tr>
                    <th style="font-size: 1.5rem; background-color: white;">Album Name</th>
                    <th style="font-size: 1.5rem; background-color: white;">Actions</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Juan\Documents\cesae-software-developer\SITE-Laravel-Gestao-Bandas\final-project\resources\views/layouts/show.blade.php ENDPATH**/ ?>