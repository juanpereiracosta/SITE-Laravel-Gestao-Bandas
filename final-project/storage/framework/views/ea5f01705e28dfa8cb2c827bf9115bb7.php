<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cosmic</title>

    <!-- CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Reem+Kufi+Fun:wght@400..700&display=swap');

        .header {
        background-color: #000;
        text-align: center;
        padding: 50px 0;
        font-family: 'Reem Kufi Fun', sans-serif;
        }

        .header h1 {
        font-weight: bold;
        font-size: 6rem;
        margin: 0;
        color: #f2b409;
        }

        .header p {
        font-size: 1.5rem;
        margin: 5px 0;
        color: white;
        }
    </style>
</head>

</body>
      <header class="header">
        <h1>Cosmic</h1>
        <p>Music is everywhere</p>
      </header>

<!-- Conteúdo da página -->
<?php echo $__env->yieldContent('content'); ?>

<!-- footer do Bootstrap -->
<style>
    .footer {
        background-color: black;
        color: white;
        font-weight: bold;
        text-align: center;
        padding: 10px 0;
    }
</style>
<footer class="footer">
    <a href="#" class="text-white" aria-label="Instagram">
        <i class="fab fa-instagram"></i>
    </a>
    <div>&copy; 2024 Seu Nome</div>
</footer>

<!-- JS do Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


<?php /**PATH C:\Users\Juan\Documents\cesae-software-developer\SITE-Laravel-Gestao-Bandas\final-project\resources\views/layouts/main.blade.php ENDPATH**/ ?>