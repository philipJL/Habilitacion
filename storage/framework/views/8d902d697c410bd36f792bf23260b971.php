<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Aqui convoca todos los CSS que usted use para sus estilos y tal -->

    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">

    <title>Usuario</title>
</head>
<body>
    
    <center>

        <br>
        <!-- Button trigger modal -->

        <!-- CRUD USUARIOS -->
        <button onclick="usuarios()" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        usuarios
        </button>

        <!-- PERMISOS -->
        <button onclick="permisos()" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        ver permisos
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="contenido">
                    
                </div>
                <div class="modal-footer" id="opciones">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </div>
            </div>
        </div>  

    </center>

</body>

    <!-- Aqui convoca todos los JS que usted use para sus funciones y eso -->
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery-3.6.0.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/brayan.js')); ?>"></script>

</html><?php /**PATH C:\xampp\htdocs\financiero\resources\views/usuarios.blade.php ENDPATH**/ ?>