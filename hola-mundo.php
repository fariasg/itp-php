<?php
echo "hola mundo";
$bigVariable = 'PHP';
$short = &$bigVariable;
$bigVariable.='Rocks!';
echo "Short is $short";
echo "Long is $bigVariable";

function update_counter()
{
  static $counter;
  $counter++;
  echo "\n valor static = $counter";
 }
 $counter=10;
 update_counter();
 update_counter();
 echo "\n valor global= $counter";
 
 function saludo($nombre)
 {
	echo"\n hola $nombre";
	}
saludo('JUAN');
echo "\n";
$edad=30;
$edad = (string) $edad;
echo "\n";
var_dump($edad);
$edad = (boolean) $edad;
echo "\n";
var_dump($edad);

$clave=123;

if($clave==='123')
   echo 'correcto';
else
     echo 'INCORRECTO';
	 
$color='rojo';

switch($color)
{
	case 'verde': echo 'verde';
				  break;
    case 'rojo' : echo 'rojo';
                  break;	
}

$product=[
			'name'=>'ajax',
			'price'=>230,
			available=>true,
			];
//foreach ($product as $field => $value)
$configuration = requiere 'configuration.php';
print_r($configuration);

