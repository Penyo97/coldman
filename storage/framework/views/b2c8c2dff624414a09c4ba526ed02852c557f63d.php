<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php echo $__env->yieldContent('title'); ?>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="https://kit.fontawesome.com/9419b934fb.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" integrity="sha384-v8BU367qNbs/aIZIxuivaU55N5GPF89WBerHoGA4QTcbUjYiLQtKdrfXnqAcXyTv" crossorigin="anonymous">

        <!-- Bootstrap -->

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        <link  rel="stylesheet" href="<?php echo e(URL::to('css/admin.css')); ?>"/>
    </head>
    <body>
        <?php if(session('sikertelen')): ?>
        <div class="alert alert-danger" role="alert">
            <strong><?php echo e(session('sikertelen')); ?></strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <?php endif; ?>
        <?php if(session('siker')): ?>
        <nav class="navbar navbar-expand-lg " style="background-color: #82c8ec !important">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-item nav-link link" href="<?php echo e(route('back')); ?>">Kilépés</span></a>
              </div>
            </div>
          </nav>
        <div class="container-fluid">
            <div class="col-sm-12">
            <?php if(session('orders') != "[]"): ?>
            <table class="table">
                <thead>
                <tr>
                    <th style="padding-left: 15px">Név</th>
                    <th style="padding-left: 15px">Telefonszám</th>
                    <th style="padding-left: 15px">E-mail</th>
                    <th style="padding-left: 15px">Üzenet</th>
                </tr>
                </thead>
                <?php $__currentLoopData = session('orders'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr><td style="padding-left: 15px"><?php echo e($order->name); ?> </td>
                    <td style="padding-left: 15px"><?php echo e($order->number); ?> </td>
                    <td style="padding-left: 15px"><?php echo e($order->mail); ?> </td>
                    <td style="padding-left: 15px"><?php echo e($order->text); ?> </td>
                    <td style="padding-left: 15px"><a href="/<?php echo e($order->id); ?>"><button class="btn btn-primary">Törlés</button></a></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
            </div>
            <?php else: ?>
            <div class="col-sm-6">
            <div class="col-sm-6 nincs">
                <h1> Nics elem</h1>
            </div>
            </div>
            <?php endif; ?>
        </div>
         <?php else: ?>
            <div class="container-fluid login ">
                <div class="row justify-content-md-center align-items-center">
                <div class="col-sm-6">
                    <h1 style="text-align:center">Login</h1>
                    <hr class="line">
                <form method="POST" action="<?php echo e(route('login')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="form-group" >
                      <label for="exampleInputEmail1">E-mail</label>
                      <input type="text" class="form-control" id="name" name="mail" value="<?php echo e(old('name')); ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Jelszó</label>
                        <input type="password" class="form-control" id="password" name="password" value="<?php echo e(old('password')); ?>">
                      </div>
                    <button type="submit" class="btn btn-primary">Belépés</button>
                  </form>
                </div>
                <div class="col-sm-3">
                    <img src="svg/login.svg" class="login_img"/>
                </div>
            </div>
            </div>
        <?php endif; ?>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\ColdmanEles\resources\views/admin/admin.blade.php ENDPATH**/ ?>