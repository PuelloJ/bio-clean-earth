<div class="mainPremios">

    <div class="premios">

        <?php foreach ($premios as $premio) {
            if ($premio->getTipo() == 1) {
        ?>
                <div class="cardBoxPremio">
                    <dvi class="precioPremio">
                        <p><?php echo "$" . $premio->getPrecioUDS(); ?></p>
                    </dvi>
                    <div class="imgResiduo">
                        <img src="data:image/png;base64,<?php echo $premio->getImagen(); ?>" alt="">
                    </div>
                    <div class="infoPremio">
                        <h3><?php echo $premio->getNombre(); ?></h3>
                        <p><?php echo $premio->getDescripcion(); ?></p>
                    </div>
                    <div class="precioCanjePremio">
                        <h3><i class="fas fa-star"></i><?php echo " " . number_format($premio->getPrecio()); ?></h3>
                    </div>
                </div>
            <?php } else { ?>

                <div class="cardBoxPremio">
                    <dvi class="precioPremio">

                    </dvi>
                    <div class="imgResiduo">
                        <img src="data:image/png;base64,<?php echo $premio->getImagen(); ?>" alt="">
                    </div>
                    <div class="infoPremio">
                        <h3><?php echo $premio->getNombre(); ?></h3>
                        <p><?php echo $premio->getDescripcion(); ?></p>
                    </div>
                    <div class="precioCanjeSticker">
                        <h3><i class="fas fa-recycle"></i><?php echo " " . number_format($premio->getPrecio()); ?></h3>
                    </div>
                </div>

        <?php
            }
        } ?>
    </div>

</div>