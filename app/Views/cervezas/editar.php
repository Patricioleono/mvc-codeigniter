<?=$header;?>

<div class="card text-center">
  <div class="card-body">
    <h4 class="card-title">Cervezas</h4>
    <p class="card-text">Editar Registro de Cervezas</p>

<form action="<?= site_url('/actualizar');?>" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $beer['id'];?>">
    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre Cerveza</label>
      <input type="text" name="nombre" value="<?= $beer['namebeer'];?>" id="nombre" class="form-control" placeholder="" >
    </div>
    <div class="mb-3">
      <label for="grado" class="form-label">Grado Cerveza</label>
      <input type="text" name="grado" value="<?= $beer['gradebeer'];?>" id="grado" class="form-control" placeholder="">
    </div>
    <div class="mb-3">
      <label for="tipo" class="form-label">Tipo Cerveza</label>
      <input type="text" name="tipo" value="<?= $beer['typebeer'];?>" id="tipo" class="form-control" placeholder="">
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
</form>

  </div>
</div>   
<?=$footer?>