<?=$header; ?>


<br/>
<a class="btn btn-primary" href="<?=base_url('crear')?>">Ingresar Producto</a>
<br/>
<br/>

        <table class="table table-dark">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre Cerveza</th>
                    <th>Grados</th>
                    <th>Tipo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($beer as $date): ?>
                <tr>
                    <td><?= $date['id'];?></td>
                    <td><?= $date['namebeer'];?></td>
                    <td><?= $date['gradebeer'];?></td>
                    <td><?= $date['typebeer'];?></td>
                    <td>
                        <a href="<?=base_url('editar/'.$date['id']);?>" class="btn btn-success">Editar</a>
                        /
                        <a href="<?=base_url('borrar/'.$date['id']);?>" class="btn btn-danger">Borrar</a>
                    </td>   
                </tr>
            <?php endforeach ?>
                
            </tbody>
        </table>
        
<?=$footer;?>   