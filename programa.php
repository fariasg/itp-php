<?php
$ingreso = 10870;
$iva = $ingreso* 15/100;
$isr= $ingreso * 10/100;
$pago = $ingreso - $iva - $isr;
echo $pago;
