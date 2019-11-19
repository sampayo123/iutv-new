<?php
$usuario= "AdIsra_17";
$contraseña="Sampayo.1.2.3";
$ruta ='mysql:host=localhost;dbname=crud_iutv_2019';
try{
$pdo= new PDO($ruta,$usuario,$contraseña);
//echo 'Conectado';
} catch (PDOException $e){
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>