<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
    <script src="<?php echo e(asset('js/jquery-3.6.0.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>

    <title>Ventas</title>
</head>

<body onload="mostrarVentas()">

    <div class="container mt-5">
        <center>

            <!-- Botones para acciones relacionadas con ventas -->
            <button onclick="F_CVenta()" type="button" class="btn btn-primary" data-bs-toggle="modal"
                data-bs-target="#exampleModal">
                Crear Venta
            </button>

            <!-- Botones adicionales para otras acciones relacionadas con ventas -->
            <button onclick="mostrarPedidosCompra()" type="button" class="btn btn-info" data-bs-toggle="modal"
                data-bs-target="#exampleModal">
                Pedidos de Compra
            </button>

            <button onclick="registrarMovimiento()" type="button" class="btn btn-warning" data-bs-toggle="modal"
                data-bs-target="#exampleModal">
                Registrar Movimiento
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
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

            <br>
            <br>

            <!-- Tabla para mostrar las ventas -->
            <table id="ventasTable" class="table" style="width: 80%;">
                <tr>
                    <td>ID Venta</td>
                    <td>Fecha</td>
                    <td>Total Venta</td>
                    <td>ID Empleado</td>
                    <td>ID Cliente</td>
                    <td>Opciones</td>
                </tr>
                <!-- Aquí se llenarán dinámicamente los datos de las ventas -->
            </table>

        </center>
    </div>

</body>
<script src="<?php echo e(asset('js/Venta.js')); ?>"></script>
</html>
<?php /**PATH C:\xampp\htdocs\habilitacion\resources\views/ventas.blade.php ENDPATH**/ ?>