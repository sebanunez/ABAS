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


  <body style="background: lightskyblue;">
    
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
    
        <!-- LECTURA DE DATOS Y ENVÍO A BD -->
        
        <?php

        if(isset($_POST['enviar'])) { //Boton procesar
          
          include ("clases/sistema.php");

          $sist = new Sistema();
          $nom = strtoupper($_REQUEST['cajaInstitucion']);
          $refer = strtoupper($_REQUEST['cajaReferente']);
          $fec = date('d/m/Y');
          $hor = date('H:i');

          $desa = "NO";
          $alm = "NO";
          $mer = "NO";
          $cena = "NO";
          $bol = "NO";

          if(isset($_REQUEST['cajaDesayuno']))
            $desa = $_REQUEST['cajaDesayuno'];
     
          if(isset($_REQUEST['cajaAlmuerzo']))
            $alm = $_REQUEST['cajaAlmuerzo'];
         
          if(isset($_REQUEST['cajaMerienda']))
            $mer = $_REQUEST['cajaMerienda'];
     
          if(isset($_REQUEST['cajaCena']))
            $cena = $_REQUEST['cajaCena'];

          if(isset($_REQUEST['cajaBolson']))
            $bol = $_REQUEST['cajaBolson'];


          $desc = $_REQUEST['cajaDescripcion'];
          $horario = $_REQUEST['cajaHorario'];
          $cal = strtoupper($_REQUEST['cajaCalle']);
          $nro = $_REQUEST['cajaNro'];
          $entre = $_REQUEST['cajaEntre'];
          $bar = strtoupper($_REQUEST['cajaBarrio']);
          $loc = $_REQUEST['cajaLocalidad'];
          $tipo1 = $_REQUEST['cajaTipoTel1'];
          $tel1 = $_REQUEST['cajaTel1'];

          if(!empty($_REQUEST['cajaTel2'])) {
            
            $tipo2 = $_REQUEST['cajaTipoTel2'];
            $tel2 = $_REQUEST['cajaTel2'];

          } else {

            $tipo2 = null;
            $tel2 = null;

          }     
          

          if(!empty($_REQUEST['cajaMail'])) {

            $email = $_REQUEST['cajaMail'];

          } else {

            $email = null;

          }
          


          //echo $nom, $refer, $fec, $hor, $desa, $alm, $mer, $cena, $bol, $desc, $horario, $cal, $nro, $entre, $bar, $loc, $tipo1, $tel1, $tipo2, $tel2, $email;


        $sist->crearSolicitud($sist, $nom, $refer, $fec, $hor, $desa, $alm, $mer, $cena, $bol, $desc, $horario, $cal, $nro, $entre, $bar, $loc, $tipo1, $tel1, $tipo2, $tel2, $email);


        }


      ?>
      

      </div>

    </div>

  </div>
  

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>