<div class="mainPuntuacion">
    <table class="tablaPuntuacion">
        <thead>
            <tr>
                <th>#</th>
                <th>Usuario</th>
                <th>Reciclado</th>
                <th>Puntos</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach( $usuarioTablas as $usuarioTabla){ ?>
            <tr>
                <td><?php echo $usuarioTabla -> getPosicion(); ?></td>
                <td> <img src="assets/img/usuario.png" width="20px" style="vertical-align: middle; margin-right: 5px;"> <?php echo $usuarioTabla -> getNombre() . $usuarioTabla -> getApellido(); ?></td>
                <td><?php echo  number_format($usuarioTabla -> getTotalPuntos()); ?></td>
                <td><?php echo  number_format($usuarioTabla -> getTotalReciclado()); ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>