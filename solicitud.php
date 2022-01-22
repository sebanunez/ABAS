<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Solicitud de Inscripción como Beneficiario</title>
  </head>
  <body>
    
  	<div class="container-fluid" style="text-align: center;">
  

    <!-- CABECERA -->

    <div class="row" id="cabecera" style="justify-content: center; align-items: center; background: linear-gradient(to bottom, powderblue, cornflowerblue); height: 100px;">
      
      <div class="row m-1" style="justify-content: center; align-items: center;">
        
        <div class="col-1">
          <img src="images/logo.png" width="100px" height="100px">
        </div>
        
        <div class="col-1">
          <!-- DIV DE ESPACIO -->
        </div>

        <div class="col" style="text-align: right;">
          <h1>Solicitud de Inscripción como Beneficiario</h1>
        </div> 
      
      </div>
           
    </div>  

    <!-- FIN CABECERA -->


  	<div class="row" style="justify-content: center; align-items: center; background: linear-gradient(to bottom, lightblue, lightskyblue);">
  	

  	<div class="col-10 mt-3 mb-3">  	
  	
  		<div class="mb-3">
  			<div class="alert alert-primary" role="alert">
				  Complete el siguiente formulario y envíe la solicitud.<br>Desde el Banco Alimentario se pondrán en contacto con usted.
				</div>  			
  		</div>


  	<form method="post" action="solicitud_fin.php">

  		<div class="mb-3">
  		  <input type="text" placeholder="Institución" class="form-control" name="cajaInstitucion" required>
    	  <div id="emailHelp" class="form-text">Ingrese el nombre de la institución.</div>
  		</div>

  		<div class="mb-3">
  		  <input type="text" placeholder="Referente" class="form-control" name="cajaReferente" required>
    	  <div id="emailHelp" class="form-text">Ingrese el nombre del responsable de la institución.</div>
  		</div>


  		<div class="mb-3">
  		<center>

  		
  		<div class="mb-3 form-check">
    	<input type="checkbox" class="form-check-input" name="cajaDesayuno" value="SI">
    	<p style="text-align: left;"><label class="form-check-label" for="desayuno">Desayuno</label></p>
  		</div>
  		
  		
  		<div class="mb-3 form-check">
    	<input type="checkbox" class="form-check-input" name="cajaAlmuerzo" value="SI">
    	<p style="text-align: left;"><label class="form-check-label" for="almuerzo">Almuerzo</label></p>
  		</div>

  		
  		<div class="mb-3 form-check">
  		<input type="checkbox" class="form-check-input" name="cajaMerienda" value="SI">
  		<p style="text-align: left;"><label class="form-check-label" for="merienda">Merienda</label></p>
    	</div>    	


    	<div class="mb-3 form-check">
    	<input type="checkbox" class="form-check-input" name="cajaCena" value="SI">
    	<p style="text-align: left;"><label class="form-check-label" for="cena">Cena</label></p>
  		</div>
  		

   		<div class="mb-3 form-check">
    	<input type="checkbox" class="form-check-input" name="cajaBolson" value="SI">
    	<p style="text-align: left;"><label class="form-check-label" for="bolson">Bolsones de comida</label></p>
  		</div>


  		</center>
  		</div>


		<div class="mb-3">
  		<textarea class="form-control" placeholder="Descripción del servicio" name="cajaDescripcion" rows="3" aria-describedby="descripcion"></textarea>
  		<div id="descripcion" class="form-text">Explique con más detalle el servicio que brinda su institución.</div>
  		</div>

  		<div class="mb-3">
  		  <input type="text" placeholder="Horario" class="form-control" name="cajaHorario" required>
    	  <div id="horario" class="form-text">Ingrese el horario de atención de la institución.</div>
  		</div>

  		<div class="row">
  			<div class="col-4">
    		<input type="text" class="form-control" placeholder="Calle" name="cajaCalle" required>
  			</div>
  			<div class="col-2">
    		<input type="text" class="form-control" placeholder="Nro." name="cajaNro" required>
  			</div>
			<div class="col">
    		<input type="text" class="form-control" placeholder="Entre calles (opcional)" name="cajaEntre">
  			</div>
  		</div>
  		<div class="row mt-2 mb-4">
  			<div class="col-6">
    		<input type="text" class="form-control" placeholder="Barrio (opcional)" name="cajaBarrio">
  			</div>
  			<div class="col-6">
  			<select id="inputState" class="form-select" name="cajaLocalidad">
      			<option selected>Localidad...</option>
      			<option value="ABASTO">ABASTO</option>
      			<option value="ALTOS DE SAN LORENZO">ALTOS DE SAN LORENZO</option>
      			<option value="ARANA">ARANA</option>
      			<option value="ARTURO SEGUI">ARTURO SEGUI</option>
      			<option value="BERISSO">BERISSO</option>
      			<option value="CASCO URBANO">CASCO URBANO (LA PLATA)</option>
      			<option value="CITY BELL">CITY BELL</option>
      			<option value="EL PELIGRO">EL PELIGRO</option>
      			<option value="ENSENADA">ENSENADA</option>
      			<option value="ETCHEVERRY">ETCHEVERRY</option>
      			<option value="GONNET">GONNET</option>
      			<option value="GORINA">GORINA</option>
      			<option value="HERNANDEZ">HERNANDEZ</option>
      			<option value="LOS HORNOS">LOS HORNOS</option>
      			<option value="MELCHOR ROMERO">MELCHOR ROMERO</option>
      			<option value="OLMOS">OLMOS</option>
      			<option value="RINGUELET">RINGUELET</option>
      			<option value="SAN CARLOS">SAN CARLOS</option>
      			<option value="SAVOIA">SAVOIA</option>
      			<option value="TOLOSA">TOLOSA</option>
      			<option value="VILLA CASTELLS">VILLA CASTELLS</option>
      			<option value="VILLA ELISA">VILLA ELISA</option>
      			<option value="VILLA ELVIRA">VILLA ELVIRA</option>
    		</select>
  			</div>  			
		</div>
  	
		<div class="row mt-5 mb-2">
  			<div class="col-4">
  			<select id="inputState" class="form-select" name="cajaTipoTel1">
      			<option selected value="FIJO">FIJO</option>
      			<option value="CELULAR">CELULAR</option>
    		</select>
    		<div id="tipo" class="form-text">Tipo de Teléfono 1</div>
  			</div>
  			<div class="col">
    		<input type="text" class="form-control" placeholder="Número de Teléfono 1" name="cajaTel1" required>
  			</div>
  		</div>

  		<div class="row mb-4">
  			<div class="col-4">
  			<select id="inputState" class="form-select" name="cajaTipoTel2">
      			<option selected>FIJO</option>
      			<option>CELULAR</option>
    		</select>
    		<div id="tipo" class="form-text">Tipo de Teléfono 2</div>
  			</div>
  			<div class="col">
    		<input type="text" class="form-control" placeholder="Número de Teléfono 2 (opcional)" name="cajaTel2">
  			</div>
  		</div>	


		<div class="mb-4">
	 	   <input type="email" placeholder="E-mail (opcional)" class="form-control" name="cajaMail">
 			<div id="emailHelp" class="form-text">Ingrese un correo electrónico de contacto.</div>
	  </div>
  		
  	<input type="submit" class="btn btn-primary" name="enviar" value="Enviar Solicitud"></input>
	</form>

	</div>

	</div>

	</div>

	</div>
  	</div>
    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>