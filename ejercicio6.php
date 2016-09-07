<?php

$equipo = array('portero'=>'lampe', 'defensa'=>'ramos', 'medio'=>'abi', 'delantero'=>'celia');
 
foreach($equipo as $posicion=>$jugador)
	{
	echo "El " . $posicion . " es " . $jugador;
	echo "<br>";
	}
?>