
  <!-- Modal create-->
  <div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar cliente</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form action="<?php echo e(route('cliente.store')); ?>" method="post">
            <?php echo csrf_field(); ?>

        <div class="modal-body">
          <div class="mb-3">
            <label for="" class="form-label">Nombre/empresa</label>
            <input type="text"
              class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="">
          </div>

          <div class="mb-3">
            <label for="" class="form-label">Contacto</label>
            <input type="text"
              class="form-control" name="contacto" id="" aria-describedby="helpId" placeholder="">
          </div>

          <div class="mb-3">
            <label for="" class="form-label">Direccion</label>
            <input type="text"
              class="form-control" name="direccion" id="" aria-describedby="helpId" placeholder="">
          </div>

          <div class="mb-3">
            <label for="" class="form-label">Telefono</label>
            <input type="text"
              class="form-control" name="telefono" id="" aria-describedby="helpId" placeholder="">
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </form>
      </div>
    </div>
  </div>
<?php /**PATH C:\xampp\htdocs\habilitacion\resources\views/cliente/create.blade.php ENDPATH**/ ?>