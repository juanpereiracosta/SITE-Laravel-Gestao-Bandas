<?php $__env->startSection('content'); ?>

<!-- Verifica se o usuário está autenticado e exibe a saudação e botão de logout -->
<?php if(Auth::check()): ?>
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <h1>Olá, <?php echo e(Auth::user()->name); ?></h1> <!-- Exibe o nome do usuário logado -->
                <a href="<?php echo e(route('logout')); ?>" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Sair
                </a>

                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                    <?php echo csrf_field(); ?>
                </form>
            </div>
        </div>
    </div>
<?php endif; ?>

<!-- Conteúdo existente da Home -->
<div class="container mt-5">
    <div class="row g-4"> <!-- Classe g-4 adiciona espaço entre as colunas -->
        <div class="col-lg-4 col-md-6">
            <div class="card">
                <img src="https://us.123rf.com/450wm/studiostoks/studiostoks1606/studiostoks160600052/58173508-m%C3%A1scara-de-gas-caucho-vendimia-verde-pop-retro-del-arte-del-vector-qu%C3%ADmica-y-protecci%C3%B3n-biol%C3%B3gica.jpg?ver=6" class="card-img-top" alt="Foto da Banda">
                <div class="card-body">
                    <a href="<?php echo e(route('create')); ?>"><h5 class="card-title fw-bold">Add band</h5></a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="card">
                <img src="https://image-cdn.neatoshop.com/styleimg/110280/none/black/default/470741-20;1599719634y.jpg" class="card-img-top" alt="Foto da Banda">
                <div class="card-body">
                    <h5 class="card-title fw-bold">News</h5>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="card">
                <img src="https://funkybunky.co.uk/media/ecom/prodlg/iggypop2.jpg" alt="Foto da Banda">
                <div class="card-body">
                    <a href="<?php echo e(route('index')); ?>"><h5 class="card-title fw-bold">My bands</h5></a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Juan\Documents\cesae-software-developer\SITE-Laravel-Gestao-Bandas\final-project\resources\views/layouts/home.blade.php ENDPATH**/ ?>