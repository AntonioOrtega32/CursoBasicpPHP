<?php
/*Primer ejemplo */
$arreglo1 = array("Uno", "Dos");
foreach ($arreglo1 as $mostrar) {
  echo $mostrar. "<br>";
}

/*Segundo ejemplo */

$asoci = array("clave1" => "Cosa1", "clave2" => "Cosa2" );

foreach ($asoci as $claves => $elemento) {
  echo $claves."=".$elemento."<br>";
}




 ?>
