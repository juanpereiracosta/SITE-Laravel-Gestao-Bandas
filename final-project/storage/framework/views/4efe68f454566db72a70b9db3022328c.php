<?php $__env->startSection('content'); ?>
    <div style="display: flex; justify-content: center; margin-top: 20px;">
        <div style="width: 600px;">
            <table class="table" style="border: none; width: 100%; text-align: center;">
                <tbody>
                    <?php $__currentLoopData = $bands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $band): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($band->name); ?></td>
                            <td>
                                <?php if($band->photo): ?>
                                    <img src="<?php echo e(asset('storage/' . $band->photo)); ?>" style="width: 120px"
                                        alt="<?php echo e($band->name); ?>">
                                <?php endif; ?>
                            </td>
                            <td><?php echo e($band->albums_count); ?> album</td>
                            <td>
                                <a href="<?php echo e(route('bands.albums', $band->id)); ?>" style="text-decoration: none; color:black">See album</a>
                            </td>
                            <td>
                                <form action="<?php echo e(route('bands.destroy', $band->id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Juan\Documents\cesae-software-developer\SITE-Laravel-Gestao-Bandas\final-project\resources\views/layouts/index.blade.php ENDPATH**/ ?>