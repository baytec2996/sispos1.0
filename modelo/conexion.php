<?php 
$manejador = "mysql";
$servidor  = "localhost";
$usuario   = "root";
$pass      = "";
$base      = "sispos";
$cadena    = "$manejador:host=$servidor;dbname=$base";

$cnx       = new PDO($cadena, $usuario, $pass, array(PDO::ATTR_PERSISTENT => "true", PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));


// probando conexion
/*
$resultado = $cnx->query("SELECT * FROM usuario");
foreach($resultado as $k=>$v){
    var_dump($v);
}
*/




?>