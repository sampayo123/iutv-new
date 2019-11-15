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
                <li class="nav-item"><a class="nav-link active" href="./contactos.php">Contacto</a></li>
            </ul>
        </nav>
    </header>
    
    <div class="row justify-content-md-center" >
        <div class="col-6"> 
         
                 <div class="card" style="width: 50rem;">
                    <div class="card-body">
                     <h5 class="card-title">Card title</h5>
                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" class="">
                                     <div class="form-group">
                                        <label class="col 2 col-form-label">Nombre</label>
                                        <input type="text" name="nombre" placeholder="Nombre" class="form-control col-10">
                                     </div>
                                     <div class="form-group">
                                        <label class="col 2 col-form-label">Cedula</label>
                                        <input type="number" name="cedula" placeholder="Cedula" class="form-control col-10">
                                     </div>
                                     <div class="form-group">
                                        <label class="col 2 col-form.label">Dirección</label>
                                        <input type="text" name="direccion" placeholder="Dirección" class="form-control col-10">
                                     </div>
                                     <div class="form-group">
                                        <button type="submit" name="btn" class="btn btn-primary">Enviar</button>
                                        <button type="delete" name="btn2" class="btn btn-danger">Borrar</button>
                                        <!-- se agrega el archivo de validacion -->
                                        <?php include ('validacion.php')?>
                                    </div>
                             </form>
                     </div>

                </div>
            </div> 

</body>
</html>