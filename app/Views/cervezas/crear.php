<?=$header;?>
<?php if(session('mensaje')){?>



<div class="alert alert-danger" role="alert">
  <strong><?php echo session('mensaje'); ?></strong>
</div>

<?php
  }
?>
<div class="card text-center">
  <div class="card-body">
    <h4 class="card-title">Cervezas</h4>
    <p class="card-text">Ingreso tipo de Cervezas</p>

<form action="<?= site_url('/guardar');?>" method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre Cerveza</label>
      <input type="text" name="nombre" value="<?=old('nombre')?>" id="nombre" class="form-control" placeholder="" >
    </div>
    <div class="mb-3">
      <label for="grado" class="form-label">Grado Cerveza</label>
      <input type="text" name="grado" id="grado" class="form-control" placeholder="">
    </div>
    <div class="mb-3">
      <label for="tipo" class="form-label">Tipo Cerveza</label>
      <input type="text" name="tipo" id="tipo" class="form-control" placeholder="">
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
</form>

  </div>
</div>

<?=$footer;?>