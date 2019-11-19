<?php

include ('conexion.php');

$leer= 'SELECT * FROM datos_1';

$guardarDatos= $pdo->prepare($leer);
$guardarDatos->execute();

$resultado = $guardarDatos->fetchAll();


?>