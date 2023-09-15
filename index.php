<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in (v2)</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page" style="background-image: url('imagenes/fondo_login.jpg'); background-size:cover;">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <img src="imagenes/logo.png" class="img-md">
      <a href="#" class="h1"><b>SISTEMA</b>POS</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Acceso al sistema</p>

      
      <form name="frmLogin" id="frmlogin" >
      <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Usuario" name="usuario" id="usuario">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Clave" name="clave" id="clave">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            
          </div>
          <!-- /.col -->
          <div class="col-4">
            
            <button  class="btn btn-primary btn-block" onclick="ingresarsistema()">Ingresar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    
      <!-- /.social-auth-links -->

      
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<script>
  function ingresarsistema(){
   usuario = $('#usuario').val();
    clave = $('#clave').val();
    
    $.ajax({
      method: "POST",
      url: "controlador/contusuario.php",
      data:{
            'usuario': usuario,
            'clave'  : clave
      }
      
    }).done(function(resultado){
      console.log(resultado);
      if(resultado="1"){
       window.open("principal.php","_self");
      }else{
        console.log("Error!!!!!!");
        alert("USUARIO O CLAVE INCORRECTA");
      }
    });
  }
</script>
</body>
</html>
