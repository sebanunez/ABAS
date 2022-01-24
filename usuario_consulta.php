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
    <div class="row" id="cabecera" style="justify-content: center; align-items: center; background: linear-gradient(to bottom, cornflowerblue, powderblue); height: 100px;">
      
      <div class="row m-1" style="justify-content: center; align-items: center;">
        <div class="col-1">
          <img src="images/logo.png" width="100px" height="100px">
        </div>
        
        <div class="col-9">
          <h1>ABAS</h1>
        </div>
        
        <div class="col-2">
          Usuario: <strong><?php echo $_SESSION['Usuario']; ?></strong>
          <div class="d-grid gap-2">
              
                <?php      
                  echo "<a href='index.php' class='btn btn-primary'>"."Cerrar Sesión"."</a>";
                
                ?>
                          
         </div>

        </div>
      
      </div>
      	
    
    </div>  

    <!-- CAJA AZUL -->
    <div class="row mt-4 mb-4 g-4" style="justify-content: center; align-items: center;"> <!-- Div Cuadro -->
      <div class="col col-sm-5" style="border-radius: 10px; background: linear-gradient(to bottom, royalblue, lightblue);">

    
      <!-- MENU DE OPCIONES --> 
        <div class="row mt-4 mb-3" id="caja_opciones" style="justify-content: center; align-items: center;">

  	      <div class="col col-sm">  

            <?php
              
              if ($_SESSION['Rol'] == 'ADMINISTRADOR') {
                ?>
                 <div class="col mt-5 mb-5">   
    
                 <form method="post" action="usuario_consulta_fin.php">

                  <div class="mb-3">
                    <div class="form-text mb-2" style="color: black; text-align: left; font-size: medium;">Seleccione el criterio de búsqueda:</div>
                    <select id="inputState" class="form-select" aria-label="tipo" name="cajaCriterio">
                        <option selected value="USUARIO">USUARIO</option>
                        <option value="APELLIDO">APELLIDO</option>
                        <option value="NOMBRE">NOMBRE</option>
                        <option value="DNI">DNI (Sin Puntos)</option>
                        <option value="ESTADO">ESTADO (Activo/Inactivo)</option>
                      </select>
                    </div>

                  <div class="mb-3">
                    <input type="text" required placeholder="Escriba aquí el texto a buscar" class="form-control" name="cajaBusqueda">
                  </div>
                  
                  <div class="row">
                    <div class="col-6" style="text-align:left;"> 
                      <a  href="principal.php" class="btn btn-primary">Cancelar</a>
                      </div>
                    <div class="col" style="text-align:right;"> 
                      <button type="submit" class="btn btn-primary">Buscar</button>
                    </div>
                   </div>
                </form>

              </div>
   

            <?php
                  }
              else
              {

                if ($_SESSION['Rol'] == 'OPERADOR') {

                  echo "ERROR: Acceso denegado";
                  
                } else {
                  
                  echo "ERROR: Acceso denegado";

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