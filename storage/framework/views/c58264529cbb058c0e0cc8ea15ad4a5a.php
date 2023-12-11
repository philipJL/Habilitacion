<?php $__env->startSection('content'); ?>

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
    Agregar
  </button>

<div class="table-responsive">
    <br>
    <table class="table">
        <thead class="bg-dark text-white">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre/empresa</th>
                <th scope="col">Contacto</th>
                <th scope="col">Direccion</th>
                <th scope="col">Telefono</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $cliente; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="">
                <td scope="row"><?php echo e($cliente->idCliente); ?></td>
                <td><?php echo e($cliente->nom_empresa); ?></td>
                <td><?php echo e($cliente->per_contacto); ?></td>
                <td><?php echo e($cliente->direccion); ?></td>
                <td><?php echo e($cliente->telefono); ?></td>
                <td>

                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit<?php echo e($cliente->idCliente); ?>">
                        Editar
                      </button>

                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete<?php echo e($cliente->idCliente); ?>">
                        Eliminar
                    </button>

                </td>
            </tr>

            <?php echo $__env->make('cliente.info', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php echo $__env->make('cliente.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\habilitacion\resources\views/cliente/index.blade.php ENDPATH**/ ?>