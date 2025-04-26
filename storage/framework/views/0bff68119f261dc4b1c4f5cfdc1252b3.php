<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.0/css/all.min.css" />


</head>

<body class="h-screen flex items-center justify-center ">
    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>
</body>

</html><?php /**PATH C:\Users\JOANDESSON\Desktop\convite\convite\resources\views/layouts/app.blade.php ENDPATH**/ ?>