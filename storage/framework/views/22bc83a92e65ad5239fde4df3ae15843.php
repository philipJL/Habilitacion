<!doctype html>
<html lang="en">

<head>
  <title>Ventas</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>

    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <ul class="nav navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="<?php echo e('/'); ?>" aria-current="page">Sistema de ventas <span class="visually-hidden">(current)</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('empleados')); ?>">Empleados</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('factura')); ?>">factura</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('financiero')); ?>">financiero</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('finanzas')); ?>">finanzas</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('inventario')); ?>">inventario</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('productos')); ?>">productos</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('usuarios')); ?>">usuarios</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('ventas')); ?>">Ventas</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('vistas')); ?>">Vistas</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('stripe')); ?>">stripe</a>
            </li>

        </ul>
    </nav>

  <main class="container">

    <div class="row">
        <div class="col-md-2"></div>

        <div class="col-md-8">
            <br><br>
            <?php echo $__env->yieldContent('content'); ?>

        </div>

        <div class="col-md-2"></div>
    </div>

  </main>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
  </script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\financiero\resources\views/welcome.blade.php ENDPATH**/ ?>