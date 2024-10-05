<?php $__env->startSection('content'); ?>
<div style="display: flex; justify-content: center; margin-top: 20px;">
    <div style="width: 600px;">
        <h2 style="text-align: center;">Álbuns de <?php echo e($band->name); ?></h2>
        <table class="table" style="border: none; width: 100%; text-align: center;">
            <thead>
                
            </thead>
            <tbody>
                <?php $__currentLoopData = $albums; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $album): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($album->album_name); ?></td>
                        <td>
                            <?php if($album->album_photo): ?>
                                <img src="<?php echo e(asset('storage/' . $album->album_photo)); ?>" style="width: 120px" alt="<?php echo e($album->album_name); ?>">
                            <?php endif; ?>
                        </td>
                        <td>
                            <a href="#">Ver detalhes</a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Juan\Documents\cesae-software-developer\SITE-Laravel-Gestao-Bandas\final-project\resources\views/layouts/show.blade.php ENDPATH**/ ?>