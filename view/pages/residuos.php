<div class="mainResiduo">

    <div class="residuo">
        <?php foreach ($residuo as $residuo) { ?>
            <a href="?controlador=paginas&accion=residuos&idresiduo=<?= $residuo->getIdResiduo() ?>">
                <div class="cardBoxResiduo">
                    <?php if ($residuo->getEtiqueta() != "") { ?>
                        <div class="etiqueta">
                            <p> <?php echo $residuo->getEtiqueta() ?></p>
                        </div>
                    <?php } else { ?>
                        <div class="etiquetaVacia">
                        </div>
                    <?php } ?>
                    <div class="imgResiduo">
                        <img src="<?= $residuo->getDireccionIMG() ?>" alt="">
                    </div>
                    <div class="cardDetailResiduo">
                        <div id="cardNameResiduo">
                            <h4><?php echo $residuo->getNombre() . "  " ?><i class="fas fa-chevron-right"></i></h4>
                        </div>
                        <div class="descripcionResiduo">
                            <?php if ($residuo->getClasificacion() == "Aprovechable") { ?>
                                <p><?php echo $residuo->APROVECHABLES; ?></p>
                            <?php } else if ($residuo->getClasificacion() == "No aprovechable") { ?>
                                <p><?php echo $residuo->NOAPROVECHABLES; ?></p>
                            <?php } else { ?>
                                <p><?php echo $residuo->ORGANICOS; ?></p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </a>
        <?php } ?>
    </div>

    <div class="detalleResiduo">
        <div class="contentResiduo">
            <div class="residuoNombre">
                <h2><?php echo $residuo->getNombre(); ?></h2>
            </div>
            <div class="imgResiduodetalle">
                <img src="<?= $residuo->getDireccionIMG() ?>" alt="">
            </div>
            <h3>¿Donde va?</h3>
            <div class="clasificacion">
                <div class="img"><img src="<?= $residuo->getDireccionClasiIMG() ?>" alt=""></div>
                <div class="descripcionClasificacion">
                    <h3><?php echo $residuo->getClasificacion(); ?></h3>
                    <p><?php echo $residuo->getDescripcion(); ?></p>
                </div>
            </div>
            <h3>¿En que se transforma?</h3>
            <div class="descripcion">
                <div class="img"><img src="<?= $residuo->getDireccionTransformacionIMG() ?>" alt=""></div>
                <div class="descripcionTrans">
                    <h3><?php echo $residuo->getNombreTansformacion(); ?></h3>
                    <p><?php echo $residuo->getDescripcionTransformacion(); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>