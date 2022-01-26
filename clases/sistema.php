<?php 

	include ("usuario.php");

	class Sistema {


		public function conectar (&$conexion) {

			$conexion = new mysqli("localhost","root","","abas");

			if ($conexion->connect_error) die ("Problemas con la conexión."); 

		}

		public function desconectar (&$conexion,$registros){

			//mysqli_free_result($registros);
			mysqli_close($conexion);

		}
		

		public function crearUsuario($sist, $apynom, $dni, $domicilio, $telFijo, $telMovil, $email, $usu, $cla, $rol){

			$this->conectar($conex);

			// Busco si existe alguna tupla con ese usuario y contraseña en la BD:
			$registros = $conex->query("select * from usuario where nombre='$usu'") or die($conex->error);


			// SI ENCUENTRA EL USUARIO:
			if ($reg=$registros->fetch_array()) {
				?>
				<div class="alert alert-danger" role="alert">
				ATENCIÓN: Ya existe el usuario <?php echo $usu ?>. Elija uno distinto. 
				</div>
				

                 <div class="col mt-5 mb-5">   
    
                 <form method="post" action="usuario_alta_fin.php">

                  <div class="mb-3">
                    <div class="form-text mb-2" style="color: black; text-align: left;">Ingrese Apellido y Nombre:
                    </div>
                    <input type="text" required value="<?php echo $apynom ?>" class="form-control" name="cajaApyNom">
                  </div>
                  
                  <div class="mb-3">
                    <div class="form-text mb-2" style="color: black; text-align: left;">Ingrese el DNI:
                    </div>
                    <input type="text" required value="<?php echo $dni ?>" class="form-control" name="cajaDNI">
                  </div>
 
                   <div class="mb-3">
                    <div class="form-text mb-2" style="color: black; text-align: left;">Ingrese el Domicilio:
                    </div>
                    <input type="text" value="<?php echo $domicilio ?>" class="form-control" name="cajaDomicilio">
                  </div>

                  <div class="mb-3">
                    <div class="form-text mb-2" style="color: black; text-align: left;">Ingrese un teléfono fijo:
                    </div>
                    <input type="text" value="<?php echo $telFijo ?>" class="form-control" name="cajaTelFijo">
                  </div>

                  <div class="mb-3">
                    <div class="form-text mb-2" style="color: black; text-align: left;">Ingrese un teléfono movil:
                    </div>
                    <input type="text" value="<?php echo $telMovil ?>" class="form-control" name="cajaTelMovil">
                  </div>

                  <div class="mb-3">
                    <div class="form-text mb-2" style="color: black; text-align: left;">Ingrese un correo electrónico:
                    </div>
                    <input type="email" value="<?php echo $email ?>" class="form-control" name="cajaEmail">
                  </div>

                  <div class="mb-3">
                    <div class="form-text mb-2" style="color: black; text-align: left;">Asigne un nombre de usuario:
                    </div>
                    <input type="text" required placeholder="Ej.: jperez" class="form-control" name="cajaUsuario">
                  </div>

                   <div class="mb-3">
                    <div class="form-text mb-2" style="color: black; text-align: left;">Asigne una clave al usuario:
                    </div>
                    <input type="text" required value="<?php echo $cla ?>" class="form-control" name="cajaClave">
                  </div>

                    <div class="mb-3">
                      <div class="form-text mb-2" style="color: black; text-align: left;">Seleccione un Rol</div>
                      <select id="inputState" class="form-select" aria-label="tipo" name="cajaRol">
                        <option selected  value="OPERADOR">OPERADOR</option>
                        <option value="ADMINISTRADOR">ADMINISTRADOR</option>
                      </select>
                    </div>                 
      
                    <button type="submit" class="btn btn-primary">Crear Usuario</button>
 
                </form>

              </div>				

				<?php
				}

				else // Si no existe el usuario

				{
					$registros = $conex->query("insert into usuario (nombre, clave, rol, dni, apynom, domicilio, telFijo, telMovil, email, estado) values ('$usu', '$cla', '$rol', '$dni', '$apynom', '$domicilio', '$telFijo', '$telMovil', '$email', 'ACTIVO')") or die($conex->error);
					?>
					<div class="alert alert-success" role="alert">
  					¡Alta de usuario exitosa!
  					</div>
  					<a href="usuario_alta.php" class="btn btn-primary">Cargar otro usuario</a>
  					<a href="principal.php" class="btn btn-primary">Volver al menú principal</a>
  					<?php

				}

				$this->desconectar($conex,$registros);			

		}


		public function autenticarUsuario($usu, $cla) {

			$this->conectar($conex);

			// Busco si existe alguna tupla con ese usuario y contraseña en la BD:
			$registros = $conex->query("select * from usuario where nombre='$usu'") or die($conex->error);


			// SI ENCUENTRA EL USUARIO:
			if ($reg=$registros->fetch_array()) {
				

				// Si encuentra la clave:
				if ($reg['clave']==$cla) {
					
						
						if ($reg['estado']=='ACTIVO') {
						

								// Inicio sesión con los datos ingresados:
								session_start();
								$_SESSION['Usuario'] = $usu;
								$_SESSION['Rol'] = $reg['rol'];

								echo "<script language='javascript'>window.location='principal.php'</script>";


						}

						else

						{

								?>

								<div class="alert alert-danger" role="alert">
									Usuario dado de baja. Comuníquese con el administrador.
								</div>
								<a href="index.php" class="btn btn-primary">Volver al inicio</a>

								<?php

						}

						

					}

					else
					
					{
					
					?>
						<div class="alert alert-danger" role="alert">
							Contraseña Incorrecta
						</div>
						<a href="index.php" class="btn btn-primary">Reintentar</a>

					<?php

								
					}

				}

				else // Si no existe el usuario

				{
					
					?>
					<div class="alert alert-danger" role="alert">
						Usuario inexistente
					</div>
					<a href="index.php" class="btn btn-primary">Reintentar</a>

					<?php

				}

				$this->desconectar($conex,$registros);

			} // FIN FUNCIÓN Autenticar



		public function consultar ($sist, $criterio, $busqueda)

			{

				$this->conectar($conex);
				
				?>
				

                  <?php

                  	
                  	switch ($criterio) {
                  		case 'USUARIO':
                  			$registros = $conex->query("select * from usuario where nombre='$busqueda'") or die($conex->error);
                  			break;
                  		case 'APELLIDO':
                  			$aux='%'.$busqueda.'%';
                  			$registros = $conex->query("select * from usuario where apynom LIKE '$aux'") or die($conex->error);
                  			break;
                  		case 'NOMBRE':
                  			$aux='%'.$busqueda.'%';
                  			$registros = $conex->query("select * from usuario where apynom LIKE '$aux'") or die($conex->error);
                  			break;
                  		case 'DNI':
                  			$registros = $conex->query("select * from usuario where dni='$busqueda'") or die($conex->error);
                  			break;
                  		case 'ESTADO':
                  			$registros = $conex->query("select * from usuario where estado='$busqueda'") or die($conex->error);
                  			break;
                  				      	}
                 		               		
                  		?>
                 		
									
								<center>
                 					<table style="text-align: center; box-shadow: 5px 5px 5px grey;">
                  						<tr style="background: royalblue; color: white;">
                  							<th style="border: 1px solid black; padding: 5px;">USUARIO</th>
                  							<th style="border: 1px solid black; padding: 5px;">APELLIDO Y NOMBRE</th>
                  							<th style="border: 1px solid black; padding: 5px;">DNI</th>
                  							<th style="border: 1px solid black; padding: 5px;">DOMICILIO</th>
                  							<th style="border: 1px solid black; padding: 5px;">TEL. FIJO</th>
                  							<th style="border: 1px solid black; padding: 5px;">TEL. MÓVIL</th>
                  							<th style="border: 1px solid black; padding: 5px;">E-MAIL</th>
                  							<th style="border: 1px solid black; padding: 5px;">ROL</th>
                  							<th style="border: 1px solid black; padding: 5px;">ESTADO</th>
                  						</tr>

							<?php

							$hay = false;			// $hay es un booleano que indica si hay resultados en la búsqueda
							$fondo = false;   // $fondo es un booleano que determina el color fondo de cada fila
							$fila = 0;        // $fila sirve para identificar la fila con la que se va a trabajar

                  			while ($reg=$registros->fetch_array()) {

 	                 				$fila = $fila + 1;

                  				$usu = "cajaUsuario".$fila;
                  				$apynom = 'cajaApynom'.$fila;
													$dni = 'cajaDNI'.$fila;
													$dom = 'cajaDom'.$fila;
													$fijo = 'cajaFijo'.$fila;
													$movil = 'cajaMovil'.$fila;
													$mail = 'cajaMail'.$fila;
													$rol = 'cajaRol'.$fila;
													$estado = 'cajaEstado'.$fila;

													// A continuación se guardan los datos obtenidos en cada pasada para el formulario respectivo:

                					?>
                					
                					
                					<form method="post" action="usuario_baja.php">


                						<input type="hidden" value="<?php echo $reg['nombre'] ?>" name="<?php echo $usu ?>">
                						<input type="hidden" value="<?php echo $reg['apynom'] ?>" name="<?php echo $apynom ?>">
                						<input type="hidden" value="<?php echo $reg['dni'] ?>" name="<?php echo $dni ?>">
                						<input type="hidden" value="<?php echo $reg['domicilio'] ?>" name="<?php echo $dom ?>">
                						<input type="hidden" value="<?php echo $reg['telFijo'] ?>" name="<?php echo $fijo ?>">
                						<input type="hidden" value="<?php echo $reg['telMovil'] ?>" name="<?php echo $movil ?>">
                						<input type="hidden" value="<?php echo $reg['email'] ?>" name="<?php echo $mail ?>">
                						<input type="hidden" value="<?php echo $reg['rol'] ?>" name="<?php echo $rol ?>">
                						<input type="hidden" value="<?php echo $reg['estado'] ?>" name="<?php echo $estado ?>">
                						<input type="hidden" value="<?php echo $fila ?>" name="cajaFila">




                					<?php  				

                					// El siguiente IF sirve para determinar el tipo de fondo a aplicar:

                  			
                  				if (!$fondo) {
 								
                  						?>

                  					

                  					<tr style="background: lightsteelblue;">
                  							<td style="border: 1px solid black; padding: 5px;"><?php echo $reg['nombre'] ?></td>
                  							<td style="border: 1px solid black; padding: 5px;"><?php echo $reg['apynom'] ?></td>
                  							<td style="border: 1px solid black; padding: 5px;"><?php echo $reg['dni'] ?></td>
                  							<td style="border: 1px solid black; padding: 5px;"><?php echo $reg['domicilio'] ?></td>
                  							<td style="border: 1px solid black; padding: 5px;"><?php echo $reg['telFijo'] ?></td>
                  							<td style="border: 1px solid black; padding: 5px;"><?php echo $reg['telMovil'] ?></td>
                  							<td style="border: 1px solid black; padding: 5px;"><?php echo $reg['email'] ?></td>
                  							<td style="border: 1px solid black; padding: 5px;"><?php echo $reg['rol'] ?></td>
                  							<td style="border: 1px solid black; padding: 5px;"><?php echo $reg['estado'] ?></td>
                  							<td style="border: 1px solid black; padding: 5px;"><input type="submit" value="Dar de Baja" class="btn btn-primary"></td>
                  						</tr>

                  					<?php

 														$fondo = true;
								
													} else {
    							
    								
    												?>

    												<tr style="background: lightblue;">
                  							<td style="border: 1px solid black; padding: 5px;"><?php echo $reg['nombre'] ?></td>
                  							<td style="border: 1px solid black; padding: 5px;"><?php echo $reg['apynom'] ?></td>
                  							<td style="border: 1px solid black; padding: 5px;"><?php echo $reg['dni'] ?></td>
                  							<td style="border: 1px solid black; padding: 5px;"><?php echo $reg['domicilio'] ?></td>
                  							<td style="border: 1px solid black; padding: 5px;"><?php echo $reg['telFijo'] ?></td>
                  							<td style="border: 1px solid black; padding: 5px;"><?php echo $reg['telMovil'] ?></td>
                  							<td style="border: 1px solid black; padding: 5px;"><?php echo $reg['email'] ?></td>
                  							<td style="border: 1px solid black; padding: 5px;"><?php echo $reg['rol'] ?></td>
                  							<td style="border: 1px solid black; padding: 5px;"><?php echo $reg['estado'] ?></td>
                  							<td style="border: 1px solid black; padding: 5px;"><input type="submit" value="Dar de Baja" class="btn btn-primary"></td>
                  					</tr>

    												<?php

    												$fondo = false;
								
													}

													?>

													</form>


													<?php 


                  				$hay = true; // Significa que hay al menos un resultado


                  			} // Fin While


                  			if (!$hay){  // Si no encontró resultados

                  				?>

                  				<div class="alert alert-warning" role="alert">
  												
														<strong>No se encontraron resultados</strong>
													
													</div>
											<div class="row">
                  							  <div class="col-6" style="text-align:left;"> 
                    							  <a  href="principal.php" class="btn btn-primary">Volver al menú principal</a>
                   							 </div>
                   							 </div>

											<?php

			     							}


								?>


								</table>
							</center>	
                 
                	<div class="row mt-4" style="justify-content: center; text-align: center;">

                		
                    		<div class="col-3" style="text-align:left;"> 
                      			<a  href="principal.php" class="btn btn-primary">Menú Principal</a>
                      		</div><div class="col-3" style="text-align:right;"> 
                      			<a  href="usuario_consulta.php" class="btn btn-primary">Nueva Búsqueda</a>
                    		</div>
                   		  
                   	</div>

         

                <?php

              $this->desconectar($conex,$registros);

			}



			public function eliminarUsuario($usu) {

				
				$this->conectar($conex);

				$registros = $conex->query("update usuario set estado='INACTIVO' where nombre='$usu'") or die($conex->error);

				?>


				<div class="alert alert-success" role="alert">
  					El usuario <strong><?php echo $usu ?></strong> ha sido dado de baja. Su estado ahora es INACTIVO.
  			</div>
  			
  			<!-- <a href="usuario_alta.php" class="btn btn-primary">Cargar otro usuario</a> -->
  			<a href="principal.php" class="btn btn-primary">Volver al menú principal</a>


				<?php			

				$this->desconectar($conex,$registros);

			}



		}

	
 ?>