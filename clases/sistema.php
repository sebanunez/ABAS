<?php 

	include ("usuario.php");

	class Sistema {


		public function conectar (&$conexion) {

			$conexion = new mysqli("localhost","root","","abas");

			if ($conexion->connect_error) die ("Problemas con la conexión."); 

		}
		

		public function autenticarUsuario($usu, $cla) {

			$this->conectar($conex);

			// Busco si existe alguna tupla con ese usuario y contraseña en la BD:
			$registros = $conex->query("select * from usuario where nombre='$usu'") or die($conex->error);


			// SI ENCUENTRA EL USUARIO:
			if ($reg=$registros->fetch_array()) {
				

				// Si encuentra la clave:
				if ($reg['clave']==$cla) {
					
						echo "USUARIO"."<br>";
						echo "Nombre: ".$reg['nombre']."<br>";
						echo "Clave: ".$reg['clave']."<br>";
						echo "Rol: ".$reg['rol']."<br>";
						echo "DNI: ".$reg['dni']."<br>";
						echo "Apellido y Nombre: ".$reg['apynom']."<br>";

					}

					else
					
					{
						echo "Contraseña incorrecta.";
						?>

						<a href="index.php">Intente nuevamente</a>

						<?php
								
					}

				}

				else // Si no existe el usuario

				{
					echo "Usuario inexistente.";
					?>

					<a href="index.php">Intente nuevamente</a>

					<?php

				}

			} // FIN FUNCIÓN Autenticar

		}

	
 ?>