<?php
  
  session_start();

?>

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

    <!-- CABECERA -->
    <div class="row" id="cabecera" style="justify-content: center; align-items: center; background: linear-gradient(to bottom, cornflowerblue, powderblue); /*background-color: cornflowerblue; */height: 100px;">
      <h1>Administración de Beneficiarios del Área Social (ABAS)</h1>	
    
    </div>  

    <!-- CAJA AZUL -->
    <div class="row mt-4 mb-4 g-4" style="justify-content: center; align-items: center;"> <!-- Div Cuadro -->
      <div class="col col-sm-5" style="border-radius: 10px; background: linear-gradient(to bottom, royalblue, lightblue);">

    <!-- LEYENDA -->
  	   <div class="row mt-4" id="leyenda" style="justify-content: center; align-items: center;">
  	
    	   <div class="col-7" style="background-color: aqua; border-radius: 10px; font-size: 20px;">
    		 Menú Principal
    	   </div>
    
        </div>


      <!-- MENU DE OPCIONES --> 
        <div class="row mt-4 mb-3" id="caja_opciones" style="justify-content: center; align-items: center;">

  	      <div class="col col-sm">  

            <?php
              
              if ($_SESSION['Rol'] == 'ADMINISTRADOR') {

                // Inicio acordeón
                ?>

                <div class="accordion" id="accordionExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" style="color: black; font-weight: bold; font-size: 20px; background: linear-gradient(to bottom, cornflowerblue, lightskyblue);">
                      BENEFICIARIOS
                      </button>
                    </h2>

                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">

                        <div class="d-grid gap-2">
                          <a href="" class="btn btn-primary">ALTA</a>
                          <a href="" class="btn btn-primary">BAJA</a>
                          <a href="" class="btn btn-primary">MODIFICAR</a>
                          <a href="" class="btn btn-primary">CONSULTA</a>
                        </div>
                       
                      </div>
                    </div>
                  </div>
  
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="color: black; font-weight: bold; font-size: 20px; background: linear-gradient(to bottom, lightskyblue, powderblue);">
                      SOLICITUDES
                      </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <div class="d-grid gap-2">
                          <p>En esta sección se evaluarán las <strong>solicitudes</strong> realizadas por diversas instituciones con fines benéficos, que desean convertirse en beneficiarias del Banco Alimentario.</p> 
                          <a href="" class="btn btn-primary">ADMINISTRAR SOLICITUDES</a>
                        </div>
                      </div>
                    </div>
                  </div>
  
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="color: black; font-weight: bold; font-size: 20px; background: linear-gradient(to bottom, powderblue, white);">
                      USUARIOS
                      </button>
                    </h2>
                    
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                         
                        <div class="d-grid gap-2">
                           <p>Administración de las cuentas de usuario con acceso a este sistema.</p> 
                           <a href="" class="btn btn-primary">ALTA</a>
                           <a href="" class="btn btn-primary">BAJA</a>
                           <a href="" class="btn btn-primary">MODIFICAR</a>
                           <a href="" class="btn btn-primary">CONSULTA</a>
                        </div>
 
                    </div>
                  </div>
                </div>
              </div>
                <?php
                // Fin acordeón  

              }
              else
              {

                if ($_SESSION['Rol'] == 'OPERADOR') {

                  // Inicio acordeón de operador
                  ?>

                  <div class="accordion" id="accordionExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" style="color: black; font-weight: bold; font-size: 20px; background: linear-gradient(to bottom, cornflowerblue, lightskyblue);">
                      BENEFICIARIOS
                      </button>
                    </h2>

                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">

                        <div class="d-grid gap-2">
                          <a href="" class="btn btn-primary">ALTA</a>
                          <a href="" class="btn btn-primary">BAJA</a>
                          <a href="" class="btn btn-primary">MODIFICAR</a>
                          <a href="" class="btn btn-primary">CONSULTA</a>
                        </div>
                       
                      </div>
                    </div>
                  </div>

                  <?php
                  // Fin acordeón de operador

                } else {
                  
                  echo "ERROR: Acceso denegado ;)";

                }
                
  

              }

            ?>
            
	
          </div>

	      </div>
  
      </div>

    </div> <!-- Fin Div Cuadro -->

  </div>
    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>