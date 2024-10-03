<?php $__env->startSection('content'); ?>
<div style="display: flex; justify-content: center; margin-top: 50px; margin-bottom: 50px;">
    <div style="width: 800px; padding: 40px; border: 1px solid #ccc; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);">
        <h1 style="text-align: center; font-size: 3rem; font-weight: bold; margin-bottom: 40px;">Add Band</h1>
        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <form action="<?php echo e(route('bands.store')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="name">Nome da Banda:</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div style="padding-top: 1rem" class="form-group">
                <label for="photo">Foto da Banda:</label>
                <input type="file" name="photo" id="photo" class="form-control" accept="image/*">
            </div>
            <div style="padding-top: 1rem" class="form-group">
                <label for="album_name">Nome do Álbum:</label>
                <input type="text" name="album_name" id="album_name" class="form-control" placeholder="Digite o nome do álbum" required>
            </div>
            <button type="submit" class="btn btn-primary">Add band</button>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Juan\Documents\cesae-software-developer\SITE-Laravel-Gestao-Bandas\final-project\resources\views/layouts/create.blade.php ENDPATH**/ ?>