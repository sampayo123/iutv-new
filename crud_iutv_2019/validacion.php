<?php
if(isset($_POST['btn'])){
   $nombre= $_POST['nombre'];
   $cedula= $_POST['cedula'];
   $direccion= $_POST['direccion'];
//saniamiento y limpieza del nombre
 if(empty($nombre)){
  
 echo "*Introduce tu nombre";

 }else{
    $nombre= strip_tags($nombre);
    $nombre=htmlspecialchars($nombre);
    $nombre= stripslashes($nombre);
    $nombre=trim($nombre);

    filter_var($nombre, FILTER_SANITIZE_STRING);
      //no muestra los datos mientras sino no estan llenos todos los campos
    if(empty($nombre) && empty($cedula) && empty($direccion)){
    echo "<br>".$nombre."<br>";
    }
 } 

 
//saniamiento y limpieza de la cedula
 if(empty($cedula)){

    echo "*Introduce tu cedula";
 }else if(!is_numeric($cedula)){
     echo "*Debe ser un numero";
 }else{
      //no muestra los datos mientras sino no estan llenos todos los campos
   if(empty($nombre) && empty($cedula) && empty($direccion)){
    echo "<br>".$cedula."<br>";
   }
 }
//saniamiento y limpieza de la direccion
 if(empty($direccion)){


    echo "*Introduce direccion";    

 }else{
    $direccion= strip_tags($direccion);
    $direccion= stripslashes($direccion);
    $direccion=trim($direccion);

    filter_var($direccion, FILTER_SANITIZE_STRING);

    //no muestra los datos mientras sino no estan llenos todos los campos
    if(empty($nombre) && empty($cedula) && empty($direccion)){
    echo "<br>".$direccion."<br>";
    }
 }
//valida que los datos no se manden vacios a la base de datos
 if(!empty($nombre) and !empty($cedula) and !empty($direccion)){
 include 'crear.php';
   print('<br>Datos insertados');
 }

}
  

?>