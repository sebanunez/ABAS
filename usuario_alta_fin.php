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
        $apynom = strtoupper($_REQUEST['cajaApyNom']);
        $dni = strtoupper($_REQUEST['cajaDNI']);
        $domicilio = strtoupper($_REQUEST['cajaDomicilio']);
        $telFijo = strtoupper($_REQUEST['cajaTelFijo']);
        $telMovil = strtoupper($_REQUEST['cajaTelMovil']);
        $email = strtoupper($_REQUEST['cajaEmail']);
        $usu = strtoupper($_REQUEST['cajaUsuario']);
        $cla = $_REQUEST['cajaClave'];
        $rol = $_REQUEST['cajaRol'];
        $sist->crearUsuario($sist, $apynom, $dni, $domicilio, $telFijo, $telMovil, $email, $usu, $cla, $rol);

      ?>

  	</div>
    
    </div>

  	</div>
    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>