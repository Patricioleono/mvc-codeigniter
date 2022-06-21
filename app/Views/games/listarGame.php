<?=$header?>

<!-- Button trigger modal -->
<button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
  INGRESAR NUEVO JUEGO
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<br/>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Game Name</th>
            <th>Type Game</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($games as $lista): ?>
        <tr>
            <td><?=$lista['id'];?></td>
            <td><?=$lista['ngame'];?></td>
            <td><?=$lista['tgame'];?></td>
            <td><?=$lista['dgame'];?></td>
            <td>
                <a href="<?=base_url('editarGame/'.$lista['id']);?>">EDITAR</a>
                /
                <a href="<?=base_url('eliminarGame/'.$lista['id']);?>">BORRAR</a>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>



<?=$footer?>