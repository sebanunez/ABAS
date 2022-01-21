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
                ?>
                 <div class="col mt-5 mb-5">   
    
                 <form method="post" action="usuario_alta_fin.php">

                  <div class="mb-3">
                    <div class="form-text mb-2" style="color: black; text-align: left;">Ingrese Apellido y Nombre:
                    </div>
                    <input type="text" required placeholder="Apellido y Nombre" class="form-control" name="cajaApyNom">
                  </div>
                  
                  <div class="mb-3">
                    <div class="form-text mb-2" style="color: black; text-align: left;">Ingrese el DNI:
                    </div>
                    <input type="text" required placeholder="DNI" class="form-control" name="cajaDNI">
                  </div>
 
                   <div class="mb-3">
                    <div class="form-text mb-2" style="color: black; text-align: left;">Ingrese el Domicilio:
                    </div>
                    <input type="text" placeholder="Domicilio" class="form-control" name="cajaDomicilio">
                  </div>

                  <div class="mb-3">
                    <div class="form-text mb-2" style="color: black; text-align: left;">Ingrese un teléfono fijo:
                    </div>
                    <input type="text" placeholder="Ej.: 4240358" class="form-control" name="cajaTelFijo">
                  </div>

                  <div class="mb-3">
                    <div class="form-text mb-2" style="color: black; text-align: left;">Ingrese un teléfono movil:
                    </div>
                    <input type="text" placeholder="Ej.: 2214569999" class="form-control" name="cajaTelMovil">
                  </div>

                  <div class="mb-3">
                    <div class="form-text mb-2" style="color: black; text-align: left;">Ingrese un correo electrónico:
                    </div>
                    <input type="email" placeholder="jperez@gmail.com" class="form-control" name="cajaEmail">
                  </div>

                  <div class="mb-3">
                    <div class="form-text mb-2" style="color: black; text-align: left;">Asigne un nombre de usuario:
                    </div>
                    <input type="text" required placeholder="Ej.: jperez" class="form-control" name="cajaUsuario">
                  </div>

                   <div class="mb-3">
                    <div class="form-text mb-2" style="color: black; text-align: left;">Asigne una clave al usuario:
                    </div>
                    <input type="text" required placeholder="Ej.: Abc123." class="form-control" name="cajaClave">
                  </div>

                    <div class="mb-3">
                      <div class="form-text mb-2" style="color: black; text-align: left;">Seleccione un Rol</div>
                      <select id="inputState" class="form-select" aria-label="tipo" name="cajaRol">
                        <option selected>OPERADOR</option>
                        <option>ADMINISTRADOR</option>
                      </select>
                    </div>                 
      
                    <button type="submit" class="btn btn-primary">Crear Usuario</button>
 
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