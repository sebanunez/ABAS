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
    <div class="row mt-2 mb-2 g-4" style="justify-content: center; align-items: center;"> <!-- Div Cuadro -->
      <div class="col col-sm-5" style="border-radius: 10px; background: linear-gradient(to bottom, royalblue, lightblue);">

    <!-- LEYENDA -->
  	   <div class="row mt-4" id="leyenda" style="justify-content: center; align-items: center;">
  	
    	   <div class="col-7" style="background-color: aqua; border-radius: 10px; font-size: 20px;">
    		 Menú Principal
    	   </div>
    
        </div>


      <!-- MENU DE OPCIONES --> 
        <div class="row mt-4 mb-1" id="caja_opciones" style="justify-content: center; align-items: center;">

  	      <div class="col col-sm">  

            <?php
              
              if ($_SESSION['Rol'] == 'ADMINISTRADOR') {

                    $fila = $_REQUEST['cajaFila'];
                    $usu = 'cajaUsuario'.$fila;
                    $apynom = 'cajaApynom'.$fila;
                    $dni = 'cajaDNI'.$fila;
                    $dom = 'cajaDom'.$fila;
                    $fijo = 'cajaFijo'.$fila;
                    $movil = 'cajaMovil'.$fila;
                    $mail = 'cajaMail'.$fila;
                    $rol = 'cajaRol'.$fila;
                    $estado = 'cajaEstado'.$fila;
                    if ($_REQUEST[$estado]=='ACTIVO'){

                      ?>

                      <div class="col mt-2 mb-2">   
    
                 <form method="post" action="usuario_baja_fin.php">

                  

                  <!-- La sig. línea es para almacenar el nombre de usuario, para la consulta de la siguiente página -->
                  <input type="hidden" value="<?php echo $_REQUEST[$usu] ?>" name="cajaUsuario">


                  <div class="row mb-2 g-2" style="justify-content: center; align-items: flex-end;">
                    <div class="col-3 form-text mb-1" style="color: black; text-align: left;">Usuario:
                    </div>
                    <input type="text" class="col form-control" value="<?php echo $_REQUEST[$usu] ?>" disabled>
                  </div>
                  
                  <div class="row mb-2 g-2" style="justify-content: center; align-items: flex-end;">
                    <div class="col-3 form-text mb-1" style="color: black; text-align: left;">Apellido y Nombre:
                    </div>
                    <input type="text" class="col form-control" value="<?php echo $_REQUEST[$apynom] ?>" disabled>
                  </div>
 
                   <div class="row mb-2 g-2" style="justify-content: center; align-items: flex-end;">
                    <div class="col-3 form-text mb-1" style="color: black; text-align: left;">DNI:
                    </div>
                    <input type="text" class="col form-control" value="<?php echo $_REQUEST[$dni] ?>" disabled>
                  </div>

                  <div class="row mb-2 g-2" style="justify-content: center; align-items: flex-end;">
                    <div class="col-3 form-text mb-1" style="color: black; text-align: left;">Domicilio:
                    </div>
                    <input type="text" class="col form-control" value="<?php echo $_REQUEST[$dom] ?>" disabled>
                  </div>

                  <div class="row mb-2 g-2" style="justify-content: center; align-items: flex-end;">
                    <div class="col-3 form-text mb-1" style="color: black; text-align: left;">Teléfono Fijo:
                    </div>
                    <input type="text" class="col form-control" value="<?php echo $_REQUEST[$fijo] ?>" disabled>
                  </div>

                  <div class="row mb-2 g-2" style="justify-content: center; align-items: flex-end;">
                    <div class="col-3 form-text mb-1" style="color: black; text-align: left;">Teléfono móvil:
                    </div>
                    <input type="email" class="col form-control" value="<?php echo $_REQUEST[$movil] ?>" disabled>
                  </div>

                  <div class="row mb-2 g-2" style="justify-content: center; align-items: flex-end;">
                    <div class="col-3 form-text mb-1" style="color: black; text-align: left;">E-mail:
                    </div>
                    <input type="text" class="col form-control" value="<?php echo $_REQUEST[$mail] ?>" disabled>
                  </div>

                   <div class="row mb-2 g-2" style="justify-content: center; align-items: flex-end;">
                    <div class="col-3 form-text mb-1" style="color: black; text-align: left;">Rol:
                    </div>
                    <input type="text" class="col form-control" value="<?php echo $_REQUEST[$rol] ?>" disabled>
                  </div>

                  <div class="row mb-2 g-2" style="justify-content: center; align-items: flex-end;">
                    <div class="col-3 form-text mb-1" style="color: black; text-align: left;">Estado:</div>
                    <input type="text" class="col form-control" value="<?php echo $_REQUEST[$estado] ?>" disabled>
                  </div>                 

                    <div class="row">
                    <div class="col-6" style="text-align:left;"> 
                      <a  href="principal.php" class="btn btn-primary">Cancelar</a>
                    </div>
                    <div class="col" style="text-align:right;"> 
                      <button type="submit" class="btn btn-primary">Confirmar</button>
                    </div>
                    </div>
                </form>

              </div>

              <?php

                    } else {
                              ?>

                              <div class="alert alert-warning" role="alert">
                          
                              <strong>El usuario ya está dado de baja.</strong>

                          
                            </div>
                            <div class="row">
                                  <div class="col" style="text-align:center;"> 
                                    <a  href="principal.php" class="btn btn-primary">Volver al menú principal</a>
                                 </div>
                                 </div>
                              <?php

                    }
                             
   
            
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