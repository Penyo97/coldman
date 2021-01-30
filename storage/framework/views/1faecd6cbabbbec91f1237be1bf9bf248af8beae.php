<?php $__env->startSection('title'); ?>
<title>Main</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php if(session('bgcolor') && session('color')): ?>
<?php
 $bg = session('bgcolor');
 $color = session('color')
?>
 <?php if (isset($component)) { $__componentOriginalfb1aa0eecf6db69d68b59a00d7a39d9fd1c2ae81 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Main::class, ['bg' => $bg,'color' => $color]); ?>
<?php $component->withName('main'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalfb1aa0eecf6db69d68b59a00d7a39d9fd1c2ae81)): ?>
<?php $component = $__componentOriginalfb1aa0eecf6db69d68b59a00d7a39d9fd1c2ae81; ?>
<?php unset($__componentOriginalfb1aa0eecf6db69d68b59a00d7a39d9fd1c2ae81); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
<?php else: ?>
 <?php if (isset($component)) { $__componentOriginalfb1aa0eecf6db69d68b59a00d7a39d9fd1c2ae81 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Main::class, ['bg' => 'CAF0F8','color' => '0077B6']); ?>
<?php $component->withName('main'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalfb1aa0eecf6db69d68b59a00d7a39d9fd1c2ae81)): ?>
<?php $component = $__componentOriginalfb1aa0eecf6db69d68b59a00d7a39d9fd1c2ae81; ?>
<?php unset($__componentOriginalfb1aa0eecf6db69d68b59a00d7a39d9fd1c2ae81); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ColdmanEles\resources\views/main/main.blade.php ENDPATH**/ ?>