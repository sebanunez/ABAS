<?php 

	require_once ("usuario.php");

	class Sistema {


		public function conectar (&$conexion) {

			$conexion = new mysqli("localhost","root","","abas");

			if ($conexion->connect_error) die ("Problemas con la conexión."); 

		}
		

		public function autenticarUsuario($usu, $cla) {

			$this->conectar($conex);

			$registros = $conex->query("select * from usuario") or die($conex->error);
			// Revisar qué pasa con la consulta SQL.


			// SI ENCUENTRA EL REGISTRO:
			if ($reg=$registros->fetch_array()) {
				
					echo "USUARIO"."<br>";
					echo "Nombre: ".$reg['nombre']."<br>";
					echo "Clave: ".$reg['clave']."<br>";
					echo "Rol: ".$reg['rol']."<br>";
					echo "DNI: ".$reg['dni']."<br>";
					echo "Apellido y Nombre: ".$reg['apynom']."<br>";
				}
				else
				{
					echo "Usuario y/o contraseña incorrectos.";
					?>

					<a href="index.php">Intente nuevamente</a>

					<?php

				}

			} // FIN FUNCIÓN Autenticar

		}

	
 ?>