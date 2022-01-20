<?php 

	include ("usuario.php");

	class Sistema {


		public function conectar (&$conexion) {

			$conexion = new mysqli("localhost","root","","abas");

			if ($conexion->connect_error) die ("Problemas con la conexión."); 

		}

		public function desconectar (&$conexion,$registros){

			mysqli_free_result($registros);
			mysqli_close($conexion);

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
						echo "Contraseña incorrecta. "."<a href='index.php'>"."Intente nuevamente"."</a></center>";
						/*session_unset();*/
						/*echo "Contraseña incorrecta.";
						?>

						<a href="index.php">Intente nuevamente</a>

						<?php*/
								
					}

				}

				else // Si no existe el usuario

				{
					echo "Usuario inexistente.";
					?>

					<a href="index.php">Intente nuevamente</a>

					<?php

				}

				$this->desconectar($conex,$registros);

			} // FIN FUNCIÓN Autenticar

		}

	
 ?>