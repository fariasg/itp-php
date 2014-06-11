<?php
$nomina = [['hugo',3400],['paco',3670],['luis',5348]];
$i=0;
$j=0;
echo " Nombre     Pago \n";
while($i<3)
{
	
		echo $nomina[$i][0];
		echo "  ";
		$ingreso = $nomina[$i][1];
		$iva = $ingreso* 15/100;
		$isr= $ingreso * 10/100;
		$pago = $ingreso - $iva - $isr;
		echo $pago;
		echo "\n";
		$i++;
		
	}