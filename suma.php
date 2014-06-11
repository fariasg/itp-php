<?php
// parametros variables en funciones
function suma()
{
	$suma = 0;
	foreach (func_get_args() as $number)
	{
		$suma+=$number;
	}
	return $suma;
}
echo suma(2,5,6,7,10);
//echo suma();

// funcion anonima
$mayor=function($a,$b)
{
	if($a>$b)
	  return $a;
	else return $b;
};
echo $mayor(12,21);
// funciones que recibem funciones
$numbers = [1,3,4,11,100,5];
usort($numbers, function($a,$b){return $b-$a});
print_r($numbers);
