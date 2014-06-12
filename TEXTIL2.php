<?php
$deptos =require 'empleados.php';

echo "\nNombre Sueldo Departamento Iva Isr Total ";
foreach($deptos as $departamento => $empleados) {
	echo "\n$departamento";
	$totalDepartamento = 0;
	array_walk($empleados,function($empleado) use($departamento, &$totalDepartamento) {
		$iva = $empleado['sueldo'] *.15;
		$isr = $empleado['sueldo'] * .1;
		$total = $empleado['sueldo']-$iva-$isr;
		$totalDepartamento += $total;
		echo "\n{$empleado['nombre']}  {$empleado['sueldo']} ";
		echo "$departamento  $iva  $isr  $total";
	});
	}
?>