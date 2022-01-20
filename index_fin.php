<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Administración de Beneficiarios del Área Social (ABAS) - BALP</title>
  </head>
  <body style="background-color: lightsteelblue;">
    
  	<div class="container-fluid" style="text-align: center; background: linear-gradient(to bottom, cornflowerblue, lightsteelblue);">

  	<div class="row" id="cabecera" style="justify-content: center; align-items: center; background: linear-gradient(to bottom, cornflowerblue, powderblue); /*background-color: cornflowerblue; */height: 100px;">
    <h1>Administración de Beneficiarios del Área Social (ABAS)</h1>	
    </div>  

  	<div class="row mt-4" id="leyenda" style="justify-content: center; align-items: center;
      ">
  	
  	<div class="col-7" style="background-color: aqua; border-radius: 10px; font-size: 20px;">
 
  		<?php

        include ("clases/sistema.php");

        $sist = new Sistema();

        $usu = strtoupper($_REQUEST['cajaUsuario']);
        $cla = $_REQUEST['cajaPassword'];

        $sist->autenticarUsuario($usu, $cla);

      ?>

  	</div>
    
    </div>


    <!--

    <div class="row mt-4" id="caja_login" style="justify-content: center; align-items: center;">

  	<div class="col-6">  	
  	<form>  
  	
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Usuario</label>
    <input type="text" class="form-control" id="cajaUsuario" aria-describedby="emailHelp" required>
    
	</div>
  
	<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
    <input type="password" class="form-control" id="cajaPassword" required>
  	</div>
 	
  	<button type="submit" class="btn btn-primary">Iniciar sesión</button>

	</form>
	</div>

	</div>

  -->

  	</div>
    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>