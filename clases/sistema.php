<?php 

	// include ("solicitante.php");

	class Sistema {


		public function conectar (&$conexion) {

			$conexion = new mysqli("localhost","root","","abas");

			if ($conexion->connect_error) die ("Problemas con la conexión."); 

		}

		public function desconectar (&$conexion,$registros){

			//mysqli_free_result($registros);
			mysqli_close($conexion);

		}
		

		public function crearSolicitud ($sist, $nom, $refer, $fec, $hor, $desa, $alm, $mer, $cena, $bol, $desc, $horario, $cal, $nro, $entre, $bar, $loc, $tipo1, $tel1, $tipo2, $tel2, $email) {

			$this->conectar($conex);

			$est = "PENDIENTE";

			// Agrego una nueva solicitud:
			$registros = $conex->query("insert into solicitante (nombre, nomReferente, fecha, hora, estado) values ('$nom', '$refer', '$fec', '$hor', '$est')") or die("$conex->error");


			// Extraigo el código de solicitante generado:
			$regcod = mysqli_query($conex, "select * from solicitante where nombre = '$nom' and estado = 'PENDIENTE'") or die('Error en la consulta');


			// Si encontré ese código:
			if ($reg=$regcod->fetch_array()) {

				$cod = $reg['id'];


				// Agrego el servicio que ofrece:
				$regserv = mysqli_query($conex, "insert into servicio (desayuno, almuerzo, merienda, cena, bolson, descripcion, horario, codInstitucion, tipoInstitucion) values ('$desa', '$alm', '$mer', '$cena', '$bol', '$desc', '$horario', '$cod', 'S')") or die($conex->error);


				// Agrego la dirección:
				$regdir = $conex->query("insert into direccion (calle, nro, entre, barrio, codInstitucion, tipoInstitucion, localidad) values ('$cal', '$nro', '$entre', '$bar', '$cod', 'S', '$loc')") or die($conex->error);


				// Agrego los teléfonos:
				$regtel1 = mysqli_query($conex, "insert into telefono (nro, tipo, nomContacto, codInstitucion, tipoInstitucion) values ('$tel1', '$tipo1', '$refer', '$cod', 'S')") or die("Error en la conexión");

				if (!is_null($tel2)) {
					
					$regtel2 = mysqli_query($conex, "insert into telefono (nro, tipo, nomContacto, codInstitucion, tipoInstitucion) values ('$tel2', '$tipo2', '$refer', '$cod', 'S')") or die("Error en la conexión");

				}

				
				// Agrego el mail (si hay):
				if (!is_null($email)) {
					
					$regmail = mysqli_query($conex, "insert into mail (email, nomContacto, codInstitucion, tipoInstitucion) values ('$email', '$refer', '$cod', 'S')") or die("Error en la conexión");	

				}
				

				?>

				<div class="mb-3">
          <div class="alert alert-success" role="alert">
            ¡La solicitud fue enviada con éxito! Número de Solicitud: <strong><?php echo $cod ?></strong><br>Desde el Banco Alimentario se pondrán en contacto con usted.
          </div>        
        </div>

        <div class="d-grid gap-2">
              
                <a href='https://www.bancoalimentario.org.ar' class='btn btn-primary'>Ir al sitio web del Banco Alimentario</a>       
                          
         </div>

        <?php


			} else { // Si no encontré el código

				echo "No se encontró la solicitud buscada.";

			}


				$this->desconectar($conex,$registros);			

		}  // FIN FUNCIÓN crearSolicitud


		public function consultarSolicitud ($sist)

			{

				$this->conectar($conex);
				
				$registros = $conex->query("select * from solicitante where estado LIKE 'PENDIENTE'") or die($conex->error);
                  			
                ?>
                 		
				<center>
                	<table style="text-align: center; box-shadow: 5px 5px 5px grey;">

                  		<tr style="background: royalblue; color: white;">
                  			<th style="border: 1px solid black; padding: 5px;">NÚMERO</th>
                  			<th style="border: 1px solid black; padding: 5px;">INSTITUCIÓN</th>
                  			<th style="border: 1px solid black; padding: 5px;">REFERENTE</th>
                  			<th style="border: 1px solid black; padding: 5px;">FECHA</th>
                  			<th style="border: 1px solid black; padding: 5px;">HORA</th>
                  			<th style="border: 1px solid black; padding: 5px;">ACCIÓN</th>
                  	    </tr>

						<?php

						$hay = false;			// $hay es un booleano que indica si hay resultados en la búsqueda
						$fondo = false;   // $fondo es un booleano que determina el color fondo de cada fila
						$fila = 0;        // $fila sirve para identificar la fila con la que se va a trabajar
							
                  		while ($reg=$registros->fetch_array()) {

 	                 		$fila = $fila + 1;
               				$solic = 'cajaSolicitud'.$fila;
               				$insti = 'cajaInstitucion'.$fila;
							$refer = 'cajaReferente'.$fila;
							$fecha = 'cajaFecha'.$fila;
							$hora = 'cajaHora'.$fila;
							
							// A continuación se guardan los datos obtenidos en cada pasada para el formulario respectivo:

                			?>
                					
                			<form method="post" action="solicitud_detalle.php">

                				<input type="hidden" value="<?php echo $reg['id'] ?>" name="<?php echo $solic ?>">
                				<input type="hidden" value="<?php echo $reg['nombre'] ?>" name="<?php echo $insti ?>">
                				<input type="hidden" value="<?php echo $reg['nomReferente'] ?>" name="<?php echo $refer ?>">
                				<input type="hidden" value="<?php echo $reg['fecha'] ?>" name="<?php echo $fecha ?>">
                				<input type="hidden" value="<?php echo $reg['hora'] ?>" name="<?php echo $hora ?>">
                				<input type="hidden" value="<?php echo $reg['telMovil'] ?>" name="<?php echo $movil ?>">
                					
                				<?php  				
              				
                				// El siguiente IF sirve para determinar el tipo de fondo a aplicar:
                  				
                  				if (!$fondo) {
 								
                  					?>

                  					<tr style="background: lightsteelblue;">
                  							
                  						<td style="border: 1px solid black; padding: 5px;"><?php echo $reg['id'] ?></td>
                  						<td style="border: 1px solid black; padding: 5px;"><?php echo $reg['nombre'] ?></td>
                  						<td style="border: 1px solid black; padding: 5px;"><?php echo $reg['nomReferente'] ?></td>
                  						<td style="border: 1px solid black; padding: 5px;"><?php echo $reg['fecha'] ?></td>
                  						<td style="border: 1px solid black; padding: 5px;"><?php echo $reg['hora'] ?></td>
                  						<td style="border: 1px solid black; padding: 5px;"><input type="submit" value="Ver Solicitud" class="btn btn-primary"></td>
                  					
                  					</tr>

                  					<?php

 									$fondo = true;
								
								} else {
    							
    								?>

    								<tr style="background: lightblue;">
                  							
                  						<td style="border: 1px solid black; padding: 5px;"><?php echo $reg['id'] ?></td>
                  						<td style="border: 1px solid black; padding: 5px;"><?php echo $reg['nombre'] ?></td>
                  						<td style="border: 1px solid black; padding: 5px;"><?php echo $reg['nomReferente'] ?></td>
                  						<td style="border: 1px solid black; padding: 5px;"><?php echo $reg['fecha'] ?></td>
                  						<td style="border: 1px solid black; padding: 5px;"><?php echo $reg['hora'] ?></td>
                  						<td style="border: 1px solid black; padding: 5px;"><input type="submit" value="Ver Solicitud" class="btn btn-primary"></td>
                  					
                  					</tr>

    								<?php

    								$fondo = false;
								
								}

								?>

							</form>

							<?php 

                  			$hay = true; // Significa que hay al menos un resultado

                  		} // Fin While


                  		if (!$hay) {  // Si no encontró resultados

                  			?>

                  			<div class="alert alert-warning" role="alert">
  												
								<strong>No hay solicitudes pendientes.</strong>
													
							</div>
											
							<?php

			     		}

						?>

					</table>
				</center>	
                 
                <div class="row mt-4" style="justify-content: center; text-align: center;">

                	<div class="col-3" style="text-align:center;"> 
                      			
                      	<a  href="principal.php" class="btn btn-primary">Menú Principal</a>
                     
                    </div>

                    <!-- <div class="col-3" style="text-align:right;"> 
                      			<a  href="usuario_consulta.php" class="btn btn-primary">Nueva Búsqueda</a>
                    		</div> -->
                   		  
                </div>

         		<?php

              	$this->desconectar($conex,$registros);

			}



	}

	
 ?>