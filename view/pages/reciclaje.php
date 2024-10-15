<div class="mainReciclaje">
    <div class="cardBoxReciclaje">
        <div class="cardReciclaje" id="organico">
            <div class="cardImg">
                <img src="assets/img/cestas/blanca.png" alt="">
            </div>
            <div class="number totalPuntos">
                <p><?php echo number_format(NOAPROVECHABLE); ?></p>
                <p>Gramos</p>
            </div>
        </div>
        <div class="cardReciclaje" id="aprovechable">
            <div class="cardImg">
                <img src="assets/img/cestas/verde.png" alt="">
            </div>
            <div class="number totalPuntos">
                <p><?php echo number_format(APROVECHABLE); ?></p>
                <p>Gramos</p>
            </div>
        </div>
        <div class="cardReciclaje" id="noAprovechable">
            <div class="cardImg">
                <img src="assets/img/cestas/negra.png" alt="">
            </div>
            <div class="number totalPuntos">
                <p><?php echo number_format(ORGANICO); ?></p>
                <p>Gramos</p>
            </div>
        </div>
    </div>
    <?php if ($reciclaje) { ?>
        <input id="btn-reciclar" class="btn-reciclar" type="button" value="Reciclar" disabled>
    <?php } else { ?>
        <input id="btn-reciclar" class="btn-reciclar" type="button" value="Reciclar">
    <?php } ?>


    <?php if ($reciclaje) { ?>

        <div id="modal_container" class="modal_container showDialog">
            <div class="modal">
                <h3>Mensaje</h3>
                <div class="modalDetalle">
                    <img src="assets/img/cancelar.png" alt="">
                    <p>Ya reciclaste hoy, regresa mañana.</p>
                </div>
                <button id="closeDialogo">Cerrar</button>
            </div>
        </div>

    <?php } else { ?>
        <div id="modal_container" class="modal_container showDialog">
            <div class="modal">
                <h3>Mensaje</h3>
                <div class="modalDetalle">
                    <img src="assets/img/flechas.png" alt="">
                    <p>Recuerda solo puedes reciclar una vez al día.</p>
                </div>
                <button id="closeDialogo">Cerrar</button>
            </div>
        </div>
    <?php } ?>

    <div id="modal_container1" class="modal_container1">
        <div class="modalObtenido">
            <h3>Mensaje</h3>
            <div class="modalDetalle">
                <h3>Reciclaje</h3>
                <p>Felicidades has obtenido</p>
                <div class="obtenidoDetalle">
                    <h3 class="reciclaje"><i class="fas fa-recycle"></i> <?php echo number_format($reciclaje1->getReciclado()); ?></h3>
                    <h3 class="puntos"><i class="fas fa-star"></i> <?php echo number_format($reciclaje1->getPuntos()); ?></h3>
                </div>
                <p>Sigue recilados para que puedas obtener mas puntos.</p>
            </div>
            <input id="closeDialog" class="reciclar" onclick="reciclar()" type="button" value="Reciclar">
        </div>
    </div>

</div>