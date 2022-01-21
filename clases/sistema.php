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
					$registros = $conex->query("insert into usuario (nombre, clave, rol, dni, apynom, domicilio, telFijo, telMovil, email) values ('$usu', '$cla', '$rol', '$dni', '$apynom', '$domicilio', '$telFijo', '$telMovil', '$email')") or die($conex->error);
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
					
						// Inicio sesión con los datos ingresados:
						session_start();
						$_SESSION['Usuario'] = $usu;
						$_SESSION['Rol'] = $reg['rol'];

						// Verifico qué rol tiene el usuario y lo redirijo a su pantalla correspondiente:
						/*if ($_SESSION['Rol'] == 'ADMINISTRADOR') {
							*/
							echo "<script language='javascript'>window.location='principal.php'</script>";

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

		}

	
 ?>