<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Aqui convoca todos los CSS que usted use para sus estilos y tal -->

    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">

    <title>Empleados</title>
</head>
<body>
    
    <center>

        <br>
        <!-- Button trigger modal -->

        <!-- CRUD EMPLEADOS -->
        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <a href="/empleados">empleados</a>
        </button>

        <!-- CRUD USUARIOS -->
        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <a href="/usuarios">usuarios</a>
        </button>

        <!-- CRUD INVENTARIOS -->
        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <a href="/inventario">inventario</a>
        </button>

        </button><!-- CRUD FINANCIERO -->
        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <a href="/financiero">financiero</a>
        </button>

        <!-- CRUD VENTAS -->
        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <a href="/ventas">ventas</a>
        </button>

        <!-- CRUD Stripe metodo de pago con tarjeta -->
        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <a href="/stripe">Stripe</a>
            </button>
        
                

    </center>

</body>

    <!-- Aqui convoca todos los JS que usted use para sus funciones y eso -->
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery-3.6.0.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/Steven.js')); ?>"></script>

</html><?php /**PATH C:\xampp\htdocs\financiero\resources\views/vistas.blade.php ENDPATH**/ ?>