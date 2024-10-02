<div class="mainInicio">
    <div class="balance">
        <div class="cardHeader">
            <h2>Balance</h2>
        </div>
        <div class="cardBox">
            <div class="card">
                <div>
                    <div class="cardName">
                        <p>Puntuación total</p>
                    </div>
                    <div class="number totalPuntos">
                        <p><?php echo number_format($usuario1->getTotalPuntos()); ?></p>
                    </div>
                </div>
                <div class="iconBox puntos">
                    <i class="fas fa-star"></i>
                </div>
            </div>

            <div class="card">
                <div>
                    <div class="cardName">
                        <p>Reciclaje total</p>
                    </div>
                    <div class="number totalReciclaje">
                        <p><?php echo number_format($usuario1->getTotalReciclado()) . "g"; ?></p>
                    </div>
                </div>
                <div class="iconBox reciclaje">
                    <i class="fas fa-recycle"></i>
                </div>
            </div>


        </div>
        <div class="cardHeader">
            <h2>Reciclado</h2>
        </div>
        <div class="details">
            <div class="card">
                <div class="iconBox aprovechables">
                    <i class="fas fa-trash"></i>
                </div>
                <div class="cardDetail">
                    <div class="cardName">
                        <p>Total reciclado aprovechables</p>
                    </div>
                    <div class="number">
                        <p><?php echo number_format($reciclaje->getAprovechable()) . "g"; ?></p>
                    </div>
                    <div id="porcentajeA">
                        <p><?php echo number_format($reciclaje->getProcentaje($reciclaje->getAprovechable()), 2) . "%"; ?></p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="iconBox organicos">
                    <i class="fas fa-trash"></i>
                </div>
                <div class="cardDetail">
                    <div class="cardName">
                        <p>Total reciclado organicos</p>
                    </div>
                    <div class="number">
                        <p><?php echo number_format($reciclaje->getNoAprovechable()) . "g"; ?></p>
                    </div>
                    <div id="porcentajeO">
                        <p><?php echo number_format($reciclaje->getProcentaje($reciclaje->getNoAprovechable()), 2) . "%"; ?></p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="iconBox noAprovechables">
                    <i class="fas fa-trash"></i>
                </div>
                <div class="cardDetail">
                    <div class="cardName">
                        <p>Total reciclado no aprovechables</p>
                    </div>
                    <div class="number">
                        <p><?php echo number_format($reciclaje->getOrganico()) . "g"; ?></p>
                    </div>
                    <div id="porcentajeNa">
                        <p><?php echo number_format($reciclaje->getProcentaje($reciclaje->getOrganico()), 2) . "%"; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="recentActivities">
        <div class="cardHeader">
            <h2>Actividades recientes</h2>
            <table>
                <tbody>
                    <?php foreach ($actividadTabla as $actividadTabla) { ?>
                        <tr>
                            <td>
                                <div class="imgBox"><img width="40px" src="assets/img/usuario.png"></div>
                            </td>
                            <td>
                                <h4><?php echo $actividadTabla->getNombre(); ?></h4>
                                <span><?php echo $actividadTabla->getDescripcion(); ?></span>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>