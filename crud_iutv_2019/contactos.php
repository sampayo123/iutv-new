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
    <div class="row justify-content-center mt-5 pt-5">
    <div class="col-md-7">
    <form>
                <div class="row form-group" >
                    <label for="nombre" class="col-form-label col-md-4">Nombre</label>
                    <div class="col-md-8">
                        <input type="text" name="nombre" placeholder="Nombre" id="nombre" class="form-control" >
                        </div>
                     </div>

                    <div class="row form-group">
                     <label>Nacionalidad</label>
                        <select name="tipo_pers">
                            <option value="V">V</option>
                            <option value="E">E</option>
                        </select>
                    </div>

                     <div class="row form-group">                                        
                        <label>Cedula</label>
                        <input type="number" name="cedula" placeholder="Cedula">
                    </div>

                    <div class="row form-group">
                        <label>Dirección</label>
                        <input type="text" name="direccion" placeholder="Dirección" >
                    </div>

                    <div class="row form-group">
                        <button type="submit" name="btn"  class="btn btn-primary" onclick="location.href='./verContactos.php'" >Enviar</button>
             
                    </div>
    
    </form>
    </div>
    </div>
    </div>   

</body>
</html>