<?php
    include_once('conf/funcion.php');
	$carreraid = $_POST['carreraid'];
	if ($carreraid){

	$sql="SELECT c.carreraid,
				 c.nivel_formacionid,
				 nf.descripcion as nivel,
				 c.certificacion,
				 c.modalidadid,
				 m.descripcion as modalidad,
				 c.carga_horaria,
				 c.duracion,
				 c.perfil,
				 c.alcances,
				 c.requisitos,
				 c.doc
			FROM iusm_carreras c,
				 iusm_modalidades m,
				 iusm_nivel_formacion nf
			WHERE c.nivel_formacionid = nf.nivel_formacionid  
				 AND c.modalidadid = m.modalidadid 
				 AND c.estadoid = '1'
				 AND c.carreraid = '$carreraid' ";
	

	$row=sql_do_array(sql_do_query($sql,'1'));

	//Recodificacion de array
	$alcances = mb_convert_encoding($row['ALCANCES'], "UTF-8", "ISO-8859-1");
	$carga =  mb_convert_encoding($row['CARGA_HORARIA'], "UTF-8", "ISO-8859-1");
	$duracion = mb_convert_encoding($row['DURACION'], "UTF-8", "ISO-8859-1");
	$requisitos = mb_convert_encoding($row['REQUISITOS'], "UTF-8", "ISO-8859-1");



	

?> 

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PNA</title>

        <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"  rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="dist/css/poncho.min.css" rel="stylesheet">
        <link href="dist/css/icono-arg.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/styles.css">
       


    </head>
<body>
<!-- head-->
	<div class="fixed-top">
	<div class="container-fluid bg-pna d-none d-lg-block" style="padding: 13px 0px 10px 0px; background-color: #1074A6; color: white">
		<div class="container">
			<div class="row">
				<div class="col-md-3 text-light">
					<i class="icono-arg-telefono-neg" style="font-size: 12px;"></i> <span class="small text-light"> +54 11 4512 1014</span></div>
				<div class="col-md-6 text-light">
					<i class="fa fa-envelope-o"></i><span class="small text-light"> informes@iusm.edu.ar</span></div>
				<div class="col-md-3 small text-right">
					<a href="https://www.facebook.com/prefecturanavalar" target="_blank" class="pictogramanav"><i class="fa fa-facebook-official"></i></a>
        			<a href="https://twitter.com/PrefecturaNaval" target="_blank" class="pictogramanav"><i class="fa fa-twitter-square"></i></a>
        			<a href="https://www.youtube.com/c/prefecturanavalar" target="_blank" class="pictogramanav" style="font-size: 16px"><i class="icono-arg-youtube"></i></a>
        			<a href="https://www.instagram.com/prefecturanaval/" target="_blank" class="pictogramanav"><i class="fa fa-instagram"></i></a>
					
				</div>
			</div>
		</div>
	</div>
 
<!-- nav-->
	<nav class="navbar navbar-light shadow navbar-expand-lg" style="background-color: rgba(255,255,255,1); padding: 0px;">
		<div class="container" style="padding:0px;">
			
			<a class="navbar-brand" href="index.html" style="padding:0px; width: 20%; height: 20%; margin-top: 10px"><img class="logomenu" src="img/fragmentos/logo_iusm 2.png"></a>
			<div class="nav-item-float">
			<ul class="nav nav-pills" style="padding-top: 40px; float: right; text-decoration: none;">
				<li class="nav-item"><a href="index.html"> <i class="icono-arg-casa-negativo" style="color: black"></i> </a></li>
				<li class="nav-item"><a href="institucional.html" class="textomenu">INSTITUCIONAL</a></li>
				<li class="nav-item"><a href="carreras.php" class="textomenu">CARRERAS</a></li>
				<li class="nav-item"><a href="academica.html" class="textomenu">ACADÉMICA</a></li>
				<li class="nav-item"><a href="posgrado.html" class="textomenu">POSGRADO</a></li>
				<li class="nav-item"><a href="extension.html" class="textomenu">EXTENSIÓN</a></li>
				<li class="nav-item"><a href="revista/index.html" target="_blank" class="textomenu">REVISTA</a></li>
				<!--<li class="nav-item"><a href="http://www.biblioteca.prefecturanaval.gov.ar/" class="textomenu">BIBLIOTECA</a></li>-->
				<li class="nav-item"><a href="investigacion.html" class="textomenu">INVESTIGACIÓN</a></li>
				<li class="nav-item"><a href="ubicacion.html"><i class="icono-arg-marcador-ubicacion-2" style="color: black"></i>
				</a></li>

			</ul>
			</div>
 		  		
          		<span class="navbar-toggler-icon"></span>
        	<div class="collapse navbar-collapse justify-content-end" id="navbarContent"> 			
    			<ul class="navbar-nav">
				</ul>
			</div>
  		</div>
	
		
	</nav>
    
</div>
<!-- boody-->
<!-- imagen banner-->
	
<div class="caja_imagen2 img-fluid">
      <div class="texto_encima col-md-12">
		  
        <h1 class="textobanner">Carreras</h1>
      </div>
  
</div>

<main> 
    <div class="container">
      <div class="row">
          
	  	   <div class="col-sm-3">
            <ul class="nav nav-pills nav-stacked"></ul>
            <ul class="nav nav-pills nav-stacked" style="margin-top: 0;">
                  <li data-seccion="1" class="active"><a data-toggle="tab" href="#presentación" class="boton0" style="margin-left: -9px"><p class="boton1">Presentación</p></a></li>
                  <!--<li><a data-toggle="tab" href="carreras.php" class="boton0"><p class="boton1">Volver</p></a></li>-->
				  <li class="nav-item"><a href="javascript:history.back()" class="boton1">Volver</a></li>


            </ul>
          </div>


         <div class="col-sm-9" style="margin-top: -25px">
            <div class="tab-content">
              
				<div id="presentación" class="tab-pane fade in active">
					<p style="text-align: justify">
				    	<h1><?php echo $row['CERTIFICACION'];?></h1>
				  		<br>
				  		<p style="text-align: justify"><?php echo $alcances; ?>
						<b>Duración:</b> <?php echo $carga." horas en ".$duracion." a&ntilde;os";?> <br><br>
						<br><br>
						<b>Requisitos de Egreso:</b><?php echo $requisitos;?>
						<br><br>			  		
				  		
				  
				  		<strong class="text-primary" style="font-size: 20px"><b>Modalidad:</b></strong> PRESENCIAL <br><br>
						<h5>Descargas</h5>
				  		Plan de Estudios, Alcances y Perfil del Egresado <br><br>
				  		<div class="col-md-12 col-xs12 col-sm-6 m-b-2" style="text-align: left; margin-bottom: 30px; margin-left: -13px">
<!--Aca van los links-->	<a href="<?php echo $row['DOC'];?>" class="btn btn-primary btn-sm" download 				style="border-radius: 15px; background-color: #0073a5">
							<i class="fa fa-download"></i> Descargar archivo </a></div> <br><br>
						</div>
					</p>
      		 </div>

              			
			</div>	  		
		</div>	  	
				  	
    </div>
             
		
 
	
           
</main>
	
<!-- Footer-->
<footer>
			
<!-- 
	<div col-lg-12 style="background-color: #ECE8E5; width: 100%; margin-left: auto; margin-right: auto; margin-top: -1px"  >

		<a href="https://www.siu.edu.ar/" target="_blank"  style="padding-left: 15px"><img src="img/fragmentos/4.png" alt="SIU"></a>
		<a href="https://www.coneau.gob.ar/" target="_blank" style="padding-left: 10px"><img src="img/fragmentos/3.png" alt="CONEAU"></a>
		<a href="https://www.conicet.gov.ar/" target="_blank" style="padding-left: 10px"><img src="img/fragmentos/7.png" alt="CONICET"></a>
		<a href="https://www.cin.edu.ar/" target="_blank" style="padding-left: 20px"><img src="img/fragmentos/1.png" alt="CIN"></a>	
		<a href="https://www.imo.org/" target="_blank" style="padding-left: 0px"><img src="img/fragmentos/9.png" alt="IMO"></a>	
		<a href="http://www.rocram.net/prontus_rocram/site/edic/base/port/inicio.php" target="_blank" style="padding-left: 5px"><img src="img/fragmentos/5.png" 	alt="rocram"></a>
		<a href="https://iamu-edu.org" target="_blank" style="padding-left: 7px"><img src="img/fragmentos/8.png" alt="iamu"></a>
		<a href="https://www.mercosur.int/" target="_blank" style="padding-left: 5px"><img src="img/fragmentos/2.png" alt="mercosur"></a>
		<a href="https://www.unasursg.org/" target="_blank" style="padding-left: 10px"><img src="img/fragmentos/6.png" alt="unasur"></a>
       
	</div>
-->

	<div class="container-fluid" style="background-color:white">
	    <div class="row">
             <div col-lg-12 style="background-color: white; width: 100%; margin-left: auto; margin-right: auto; margin-top: -1px"  >
	            <a href="https://www.argentina.gob.ar" target="_blank"><img src="img/fragmentos/LogoArgentina.jpg" alt="Min.Seguridad" style="width: 20%; float: left; margin-left: 10%"></a>
	            <a href="https://www.argentina.gob.ar/educacion" target="_blank"><img src="img/fragmentos/Logo Min Edu.jpg" alt="Prefectura" style="width: 20%; float: left"></a>
	            <a href="https://www.argentina.gob.ar/seguridad" target="_blank"><img src="img/fragmentos/Logo Min Seg.jpg" alt="Min.Educacion" style="width: 20%; float: left"></a>
	            <a href="https://www.argentina.gob.ar/prefecturanaval" target="_blank"><img src="img/fragmentos/Logo PNA.jpg" alt="Min.Educacion" style="width: 20%; float: left"></a>
            </div>
        </div>
    </div>

	<div class="container-fluid home-footer" style="padding: 0px; background-color: #343A40; color: white; padding-top: 10px">
<br><br>
	
	
<div class="container">
  <div class="row">
  
    <div class="col-md-7">
      <p class="small text-light text-justify" style="font-size: 20px; padding-left: 20px;">La <strong>Prefectura Naval Argentina</strong> posee una extensa tradici&oacute;n hist&oacute;rica ampliamente reconocida. Las m&uacute;ltiples actividades de indudable repercusi&oacute;n p&uacute;blica y las sucesivas innovaciones en sus procedimientos y medios, renuevan el inter&eacute;s hacia lo que constituye un verdadero ejemplo de dedicaci&oacute;n a los cometidos que el Estado le ha confiado.<br><br></p><br>
      
      
      <br>
      <br>
      
    </div>
    <div class="col-md-1"> </div>
	<div class="col-md-2" style="text-align: left; font-size: 22px;">
      <h5 style="margin-top: 0px;">CONTACTO</h5>
      <p class="small text-light">IUSM<br>Juan Díaz de Solís 2371 <br>Olivos, Buenos Aires, Argentina </p>
	  <h5>VISITÁ NUESTRAS REDES</h5>
      
	</div>

	

	<div class="col-md-2" style="text-align: left; font-size: 22px;">
		<p class="text-light small"><i class="icono-arg-telefono-neg"></i> +54 11 4512 1014</p>
		<p class="text-light small"><i class="icono-arg-mail-1"></i> informes@iusm.edu.ar </p>
		<p class="text-light small"><i class="icono-arg-mundo"></i> https://prefecturanaval.gob.ar</p>
		<a href="https://www.facebook.com/prefecturanavalar" target="_blank" class="pictogramanav"style="font-size: 16px"><i class="icono-arg-facebook-f-"></i></a>
		<a href="https://twitter.com/PrefecturaNaval" target="_blank" class="pictogramanav" style="font-size: 16px"><i class="icono-arg-twitter-pajaro"></i></a>
		<a href="https://www.youtube.com/c/prefecturanavalar" target="_blank" class="pictogramanav" style="font-size: 16px"><i class="icono-arg-youtube"></i></a>
		<a href="https://www.instagram.com/prefecturanaval/" target="_blank" class="pictogramanav"style="font-size: 16px"><i class="icono-arg-instagram"></i></a>
	  </div>

	  <br>
		  
	   
	
		
      <ul class="sitemap">
             
      </ul>
    </div>
  </div>
  
</div>
</div>
</footer>
	</div>
 </body>
        
</html>

 
<?php
} else {
header('Location: https://iusm.edu.ar/carreras.php');
}
?>
