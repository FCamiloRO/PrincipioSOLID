<?php
    include "clasevarios.php";
    $suma = new clasevarios();

    $sum1=$suma->captura();
    $sum2=$suma->captura();
    $suma->suma($sum1, $sum2);
?>
