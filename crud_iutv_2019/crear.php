<?php
require'conexion.php';
//Codigo para insertar datos en la base de datos
$insert= $pdo->prepare('INSERT INTO datos(nombre,cedula,direccion) values(:nombre,:cedula,:direccion)');
$insert->bindParam(':nombre',$nombre);
$insert->bindParam(':cedula',$cedula);
$insert->bindParam(':direccion',$direccion);


$insert->execute();




?>