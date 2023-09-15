<?php 
include_once("conexion.php");

class usuario{
    function verificarusuario($usuario, $clave){
     $sql = "SELECT * FROM usuario
            WHERE  usuario=:usuario AND clave=SHA1(:clave) 
            AND estado=1";
     global $cnx;
     $parametros = array(':usuario'=>$usuario, ':clave'=>$clave);
     $pre = $cnx->prepare($sql);
     $pre ->execute($parametros);
     return $pre;



    }
}
?>