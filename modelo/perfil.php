<? 
include_once("conexion.php");


class perfil(){

   // primera forma  ---- consulta directa
   
   function listarperfiles(){
        $sql = "SELECT * FROM perfil where estado<2";
        global $cnx;
        $resultado = $cnx->query($sql);   
        return $resultado;
     
    }


    // segunda forma con un solo parametro - preparar consulta
    function obtenerperfil($id){
      $sql = "SELECT * FROM perfil WHERE idperfil=?";
      global $cnx;
      $pre = $cnx->prepare($sql);
      $pre->execute(array($id));
      return $pre;
    }


    function buscarperfiles($nombre, $estado){

          $sql = "SELECT * FROM perfil WHERE descripcion LIKE :nombre ";   
          $parametros = array (':nombre'=>$nombre);
          

          if($estado!==""){
            $sql .= " AND estado=estado ";
            $parametros[":estado"] = $estado;
          }
          global $cnx;
          $pre = $cnx->prepare($sql);
          $pre->execute($parametros);
          return $pre;
          }

    function obteneracceso($idperfil){
      $sql = "SELECT * FROM acceso t1
              INNER JOIN  opcion t2 ON t1.idopcion=t2.idopcion
              WHERE t1.idperfil=? AND t1.estado=1 AND t2.estado=1";
      global $cnx;
      $pre= $cnx->prepare($sql);
      $pre->execute(array($idperfil));
      return $pre;
    }

  }


?>