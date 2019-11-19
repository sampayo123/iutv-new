<?php
require'conexion.php';
//Codigo para insertar datos en la base de datos
$insert= $pdo->prepare('INSERT INTO datos_1(nombre,tipo_pers,cedula,direccion) values(:nombre,:tipo_pers,:cedula,:direccion)');
$insert->bindParam(':nombre',$nombre);
$insert->bindParam(':tipo_pers',$tipo_pers);
$insert->bindParam(':cedula',$cedula);
$insert->bindParam(':direccion',$direccion);

$insert->execute();

?>
<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
    <meta charset="utf-8">
 
    <link rel="stylesheet" href="css/bootstrap-4.3.1-dist/css/bootstrap.css">
</head>
<body>

<div class="alert alert-primary" role="alert">
    <?php echo 'Datos insertados' ?>
<div>
</body>
</html>