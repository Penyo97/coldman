<div>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color:#<?php echo e($bg); ?> !important">
        <a class="navbar-brand" href="#">
            <img src="img/cm_logo.png" style="height: 40px"/>
          </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
		                 <li class="nav-item ">
              <a style="color: #<?php echo e($color ?? '0077B6'); ?>" class="nav-link links" href="#reference"><b>Referenciák</b></a>
            </li>
            
               <li class="nav-item ">
              <a style="color: #<?php echo e($color ?? '0077B6'); ?>" class="nav-link links" href="#product"><b>Termékek</b></a>
            </li>
            <li class="nav-item ">
              <a style="color: #<?php echo e($color ?? '0077B6'); ?>" class="nav-link links" href="#underwater"><b>Írj nekünk</b></a>
            </li>
               <li class="nav-item ">
              <a style="color: #<?php echo e($color ?? '0077B6'); ?>" class="nav-link links" href="#contact"><b>Kapcsolat</b></a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="<?php echo e(route('changecolor',['color' => '72AEFD','bgcolor' => '02033B'])); ?>"><i style="color:#<?php echo e($color); ?> " class="fas fa-moon"></i></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('changecolor',['color' => '0077B6','bgcolor' => 'CAF0F8'])); ?>"><i style="color:#<?php echo e($color); ?>" class="fas fa-sun"></i></a>
            </li>
          </ul>
        </div>
      </nav>
</div>
<?php /**PATH C:\xampp\htdocs\ColdmanEles\resources\views/components/header.blade.php ENDPATH**/ ?>