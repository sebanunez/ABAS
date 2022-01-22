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


	}

	
 ?>