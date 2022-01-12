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
  <body>
    
  	<div class="container-fluid" style="text-align: center;">
  	<div class="row" id="cabecera" style="justify-content: center; align-items: center; background-color: red; height: 100px;">
    <h1>Administración de Beneficiarios del Área Social (ABAS)</h1>	
    </div>  

  	<div class="row" style="justify-content: center; align-items: center; background-color: #AAFFFF;">
  	
  	<!-- <div class="col-3" style="background-color: aqua;">
  		Bienvenido a ABAS, el sistema de Administración de Beneficiarios del Área Social.
  	</div> -->

  	<div class="col-10 mt-5 mb-5">  	
  	
  	<form>

  		<div class="mb-3">
  		  <input type="text" placeholder="Institución" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    	  <div id="emailHelp" class="form-text">Ingrese el nombre de la institución.</div>
  		</div>

  		<div class="mb-3">
  		  <input type="text" placeholder="Referente" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    	  <div id="emailHelp" class="form-text">Ingrese el nombre del responsable de la institución.</div>
  		</div>


  		<div class="mb-3">
  		<center>

  		
  		<div class="mb-3 form-check">
    	<input type="checkbox" class="form-check-input" id="desayuno">
    	<p style="text-align: left;"><label class="form-check-label" for="desayuno">Desayuno</label></p>
  		</div>
  		
  		
  		<div class="mb-3 form-check">
    	<input type="checkbox" class="form-check-input" id="almuerzo">
    	<p style="text-align: left;"><label class="form-check-label" for="almuerzo">Almuerzo</label></p>
  		</div>

  		
  		<div class="mb-3 form-check">
  		<input type="checkbox" class="form-check-input" id="merienda">
  		<p style="text-align: left;"><label class="form-check-label" for="merienda">Merienda</label></p>
    	</div>    	


    	<div class="mb-3 form-check">
    	<input type="checkbox" class="form-check-input" id="cena">
    	<p style="text-align: left;"><label class="form-check-label" for="cena">Cena</label></p>
  		</div>
  		

   		<div class="mb-3 form-check">
    	<input type="checkbox" class="form-check-input" id="bolson">
    	<p style="text-align: left;"><label class="form-check-label" for="bolson">Bolsones de comida</label></p>
  		</div>


  		</center>
  		</div>


		<div class="mb-3">
  		<textarea class="form-control" placeholder="Descripción del servicio" id="exampleFormControlTextarea1" rows="3" aria-describedby="descripcion"></textarea>
  		<div id="descripcion" class="form-text">Explique con más detalle el servicio que brinda su institución.</div>
  		</div>

  		<div class="mb-3">
  		  <input type="text" placeholder="Horario" class="form-control" id="exampleInputEmail1" aria-describedby="horario">
    	  <div id="horario" class="form-text">Ingrese el horario de atención de la institución.</div>
  		</div>

  		<div class="row">
  			<div class="col-4">
    		<input type="text" class="form-control" placeholder="Calle" aria-label="calle">
  			</div>
  			<div class="col-2">
    		<input type="text" class="form-control" placeholder="Nro." aria-label="numero">
  			</div>
			<div class="col">
    		<input type="text" class="form-control" placeholder="Entre calles (opcional)" aria-label="entre">
  			</div>
  		</div>
  		<div class="row mt-2 mb-4">
  			<div class="col-6">
    		<input type="text" class="form-control" placeholder="Barrio (opcional)" aria-label="barrio">
  			</div>
  			<div class="col-6">
  			<select id="inputState" class="form-select">
      			<option selected>Localidad...</option>
      			<option>ABASTO</option>
      			<option>ALTOS DE SAN LORENZO</option>
      			<option>ARANA</option>
      			<option>ARTURO SEGUI</option>
      			<option>BERISSO</option>
      			<option>CASCO URBANO (LA PLATA)</option>
      			<option>CITY BELL</option>
      			<option>EL PELIGRO</option>
      			<option>ENSENADA</option>
      			<option>ETCHEVERRY</option>
      			<option>GONNET</option>
      			<option>GORINA</option>
      			<option>HERNANDEZ</option>
      			<option>LOS HORNOS</option>
      			<option>MELCHOR ROMERO</option>
      			<option>OLMOS</option>
      			<option>RINGUELET</option>
      			<option>SAN CARLOS</option>
      			<option>SAVOIA</option>
      			<option>TOLOSA</option>
      			<option>VILLA CASTELLS</option>
      			<option>VILLA ELISA</option>
      			<option>VILLA ELVIRA</option>
    		</select>
  			</div>  			
		</div>
  	
		<div class="row mt-5 mb-2">
  			<div class="col-4">
  			<select id="inputState" class="form-select" aria-label="tipo">
      			<option selected>FIJO</option>
      			<option>CELULAR</option>
    		</select>
    		<div id="tipo" class="form-text">Tipo de Teléfono 1</div>
  			</div>
  			<div class="col">
    		<input type="text" class="form-control" placeholder="Número de Teléfono 1" aria-label="tel1">
  			</div>
  		</div>

  		<div class="row mb-4">
  			<div class="col-4">
  			<select id="inputState" class="form-select" aria-label="tipo">
      			<option selected>FIJO</option>
      			<option>CELULAR</option>
    		</select>
    		<div id="tipo" class="form-text">Tipo de Teléfono 2</div>
  			</div>
  			<div class="col">
    		<input type="text" class="form-control" placeholder="Número de Teléfono 2 (opcional)" aria-label="tel2">
  			</div>
  		</div>	


		<div class="mb-4">
	 	   <input type="email" placeholder="E-mail (opcional)" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
 			<div id="emailHelp" class="form-text">Ingrese un correo electrónico de contacto.</div>
	  </div>
  		
  	<button type="submit" class="btn btn-primary">Enviar Solicitud</button>
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