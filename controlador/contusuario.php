<?php 
include_once("../modelo/usuario.php");

$objUsu = new usuario();
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
$correcto = 0;

$resultado = $objUsu->verificarusuario($usuario, $clave);
if($resultado->rowCount()>0){
    $correcto = 1;
    
}
echo $correcto;
?>