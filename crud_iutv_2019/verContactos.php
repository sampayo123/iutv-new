<?php

include 'read.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap-4.3.1-dist/css/bootstrap.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-dark bg-dark"> 
            <a class="navbar-brand" href="./index.php" > 
                <img src="./src/icon-casa-blanco.svg" width="30" heigt="30" class="d-inline-block align-top">CRUD</a>
            <ul class="nav justufy-content-end">
                <li class="nav-item"><a class="nav-link active" href="./index.php">Inicio</a></li>
                <li class="nav-item"><a class="nav-link active" href="">Nosotros</a></li>
                <li class="nav-item"><a class="nav-link active" href="./verContactos.php">Contacto</a></li>
            </ul>
        </nav>
    </header>

    
    
<div class="container">
<table class="table table-dark">
<img src="./src/icon-mas.svg"  width="30" heigt="30" class="d-inline-block align-top" onclick="location.href='./contactos.php'">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Nacionalidad</th>
      <th scope="col">Cedula</th>
      <th scope="col">Direccion</th>
    </tr>
  </thead>

  
  <tbody>
  <?php foreach($resultado as $dato):  ?>
    <tr>
      <td><?php echo $dato['nombre']?></td>
      <td><?php echo $dato['tipo_pers']?></td>
      <td><?php echo $dato['cedula']?></td>
      <td><?php echo $dato['direccion']?></td>
    </tr>
    <?php endforeach?>
  </tbody>
  
</table>
</div>       

    


</body>
</html>