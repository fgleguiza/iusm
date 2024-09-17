<?php
   
    include_once('conf/funcion.php');
    include_once('conf/queries.php');

    $result0 = sql_do_query($sql0,'1');
    $result1 = sql_do_query($sql1,'1');
    $result2 = sql_do_query($sql2,'1');
    $result3 = sql_do_query($sql3,'1');
            
            
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />
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
        			<a href="" class="pictogramanav"><i class="fa fa-linkedin-square"></i></a>
        			<a href="https://www.instagram.com/prefecturanaval/" target="_blank" class="pictogramanav"><i class="fa fa-instagram"></i></a>
					
				</div>
			</div>
		</div>
	</div>
 
<!-- nav-->
	<nav class="navbar navbar-light shadow navbar-expand-lg" style="background-color: rgba(255,255,255,1); padding: 0px;">
		<div class="container" style="padding:0px;">
			
			<a class="navbar-brand" href="index.html" style="padding:0px; width: 7%; height: 7%; margin-left: 20%; margin-top: 10px"><img class="logomenu" src="img/fragmentos/logo_iusm.png"></a>
			<div class="nav-item-float">
			<ul class="nav nav-pills" style="padding-top: 40px; float: right; text-decoration: none;">
				<li class="nav-item"><a href="index.html"> <i class="icono-arg-casa-negativo" style="color: black"></i> </a></li>
				<li class="nav-item"><a href="institucional.html" class="textomenu">INSTITUCIONAL</a></li>
				<li class="nav-item"><a href="carreras.php" class="textomenu">CARRERAS</a></li>
				<li class="nav-item"><a href="academica.html" class="textomenu">ACADÉMICA</a></li>
				<li class="nav-item"><a href="posgrado.html" class="textomenu">POSGRADO</a></li>
				<li class="nav-item"><a href="extension.html" class="textomenu">EXTENSIÓN</a></li>
				<!--<li class="nav-item"><a href="revista/index.html" target="_blank" class="textomenu">REVISTA</a></li>-->
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
	
	<div class="caja_image caja_image--carreras img-fluid">
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
                  <li><a data-toggle="tab" href="#pregrado" class="boton0"><p class="boton1">Pregrado</p></a></li>
				  <li><a data-toggle="tab" href="#grado" class="boton0"><p class="boton1">Grado</p></a></li>
                  <li><a data-toggle="tab" href="#ciclo" class="boton2"><p class="boton3">Ciclo de Complementación</p></a></li>
                  
                  <li><a data-toggle="tab" href="#posgrado" class="boton0"><p class="boton1">Posgrado</p></a></li>
				  

            </ul>
          </div>
          <div class="col-sm-9" style="margin-top: -25px">
            <div class="tab-content">
              <div id="presentación" class="tab-pane fade in active">
                    <p style="text-align: justify">Las carreras de una Institución Universitaria son unidades 
                    de administración curricular cuyo propósito, además de la obtención de la certificación correspondiente, 
                    consiste en contribuir al logro de la misión institucional. Las carreras dependen de las respectivas 
                    Unidades Académicas a las cuales corresponda su nivel de formación: Pregrado, Grado y Posgrado.
                    </p>
              </div>
            <div id="pregrado" class="tab-pane fade">
  					<p style="text-align: justify"><?php while($row=sql_do_array($result0))  { ?>
                        <div class="container" style="padding-top: 25px; padding-bottom:25px; border-bottom: 1px solid rgba(0,0,0,0.3);">
                            <div class="row">
                                <div class="col-lg-2 text-center d-flex align-items-center justify-content-center">
                                    <img class="img-fluid" style="max-height:200px; padding-bottom: 20px;" src="img/escudos/<?php echo $row['SCHOOL'];?>.png">
                                </div>
                                <div class="col-lg-7">
                                    <h4><?php echo $row['CERTIFICACION'];?></h4>
                                    <p class="text-justify"><?php //echo $row['DESCRIPCION'];?></p>
                                    <p class="text-justify"><?php //echo $row['DESCRIPCION_LARGA'];?></p>
                                    <p class="text-justify"><?php echo "Modalidad: ".$row['MODALIDAD'];?></p>
                                    <p class="text-justify"><?php echo "Nivel: ".$row['NIVEL'];?></p>
                                    <p class="text-justify">Duraci&oacute;n: <?php echo $row['CARGA_HORARIA']." horas en ".$row['DURACION']." a&ntilde;os";?></p>
                                </div>
                            <div class="col-lg-3 text-center d-flex align-items-center justify-content-center style="display:block"">
                                    <form id="form1" name="form1" method="post" action="detalle.php">
                                        <input type="hidden" name="carreraid" id="carreraid" value="<?php echo $row['CARRERAID'];?>"/>
                                        <button type="submit" class="btn btn-pna">M&aacute;s info</button>
                                    </form>
                            </div>
                        </div>
                    </div> 
                <?php }?></p>
    		</div>

            <div id="grado" class="tab-pane fade">
              		<p style="text-align: justify"><?php while($row=sql_do_array($result1))  { ?>
                        <div class="container" style="padding-top: 25px; padding-bottom:25px; border-bottom: 1px solid rgba(0,0,0,0.3);">
                            <div class="row">
                                <div class="col-lg-2 text-center d-flex align-items-center justify-content-center">
                                    <img class="img-fluid" style="max-height:200px; padding-bottom: 20px;" src="img/escudos/<?php echo $row['SCHOOL'];?>.png">
                                </div>
                                <div class="col-lg-7">
                                    <h4><?php echo $row['CERTIFICACION'];?></h4>
                                    <p class="text-justify"><?php //echo $row['DESCRIPCION'];?></p>
                                    <p class="text-justify"><?php //echo $row['DESCRIPCION_LARGA'];?></p>
                                    <p class="text-justify"><?php echo "Modalidad: ".$row['MODALIDAD'];?></p>
                                    <p class="text-justify"><?php echo "Nivel: ".$row['NIVEL'];?></p>
                                    <p class="text-justify">Duraci&oacute;n: <?php echo $row['CARGA_HORARIA']." horas en ".$row['DURACION']." a&ntilde;os";?></p>
                                </div>
                            <div class="col-lg-3 text-center d-flex align-items-center justify-content-center">
                                    <form id="form1" name="form1" method="post" action="detalle.php">
                                        <input type="hidden" name="carreraid" id="carreraid" value="<?php echo $row['CARRERAID'];?>"/>
                                        <button type="submit" class="btn btn-pna">M&aacute;s info</button>
                                    </form>
                            </div>
                        </div>
                    </div> 
                <?php }?></p>
             </div>

        
            <div id="ciclo" class="tab-pane fade">
                	<p style="text-align: justify"><?php while($row=sql_do_array($result2))  { ?>
                        <div class="container" style="padding-top: 25px; padding-bottom:25px; border-bottom: 1px solid rgba(0,0,0,0.3);">
                            <div class="row">
                                <div class="col-lg-2 text-center d-flex align-items-center justify-content-center">
                                    <img class="img-fluid" style="max-height:175px; padding-bottom: 20px;" src="img/escudos/<?php echo $row['SCHOOL'];?>.png">
                                </div>
                                <div class="col-lg-7">
                                    <h4><?php echo $row['CERTIFICACION'];?></h4>
                                    <p class="text-justify"><?php //echo $row['DESCRIPCION'];?></p>
                                    <p class="text-justify"><?php //echo $row['DESCRIPCION_LARGA'];?></p>
                                    <p class="text-justify"><?php echo "Modalidad: ".$row['MODALIDAD'];?></p>
                                    <p class="text-justify"><?php echo "Nivel: ".$row['NIVEL'];?></p>
                                    <p class="text-justify">Duraci&oacute;n: <?php echo $row['CARGA_HORARIA']." horas en ".$row['DURACION']." a&ntilde;os";?></p>
                                </div>
                            <div class="col-lg-3 text-center d-flex align-items-center justify-content-center">
                                    <form id="form1" name="form1" method="post" action="detalle.php">
                                        <input type="hidden" name="carreraid" id="carreraid" value="<?php echo $row['CARRERAID'];?>"/>
                                        <button type="submit" class="btn btn-pna">M&aacute;s info</button>
                                    </form>
                            </div>
                        </div>
                    </div> 
                <?php }?></p></p>
			</div>               
			  	

            <div id="posgrado" class="tab-pane fade">
                    <p style="text-align: justify"><?php while($row=sql_do_array($result3))  { ; ?>
                        <div class="container" style="padding-top: 25px; padding-bottom:25px; border-bottom: 1px solid rgba(0,0,0,0.3);">
                            <div class="row">
                                <div class="col-lg-2 text-center d-flex align-items-center justify-content-center">
                                    <img class="img-fluid" style="max-height:200px; padding-bottom: 20px;" src="img/escudos/<?php echo $row['SCHOOL'];?>.png">
                                </div>
                                <div class="col-lg-7">
                                    <h4><?php echo $row['CERTIFICACION'];?></h4>
                                    <p class="text-justify"><?php //echo $row['DESCRIPCION'];?></p>
                                    <p class="text-justify"><?php //echo $row['DESCRIPCION_LARGA'];?></p>
                                    <p class="text-justify"><?php echo "Modalidad: ".$row['MODALIDAD'];?></p>
                                    <p class="text-justify"><?php echo "Nivel: ".$row['NIVEL'];?></p>
                                    <p class="text-justify">Duraci&oacute;n: <?php echo $row['CARGA_HORARIA']." horas en ".$row['DURACION']." a&ntilde;o";?></p>
                                </div>
                            <div class="col-lg-3 text-center d-flex align-items-center justify-content-center">
                                    <form id="form1" name="form1" method="post" action="detalle.php">
                                        <input type="hidden" name="carreraid" id="carreraid" value="<?php echo $row['CARRERAID'];?>"/>
                                        <button type="submit" class="btn btn-pna">M&aacute;s info</button>
                                    </form>
                            </div>
                        </div>
                    </div> 
                <?php }?></p></p></p>
            </div>
				
								
					
				
               
            </div>
          </div>
        </div>
		 
		 
    </div>
	
           
</main>
	
<!-- Footer-->
<footer>
			
<!--
	<div col-lg-12 style="background-color: #ECE8E5; width: 100%; margin-left: auto; margin-right: auto; margin-top: -1px"  >

		<a href="https://www.siu.edu.ar/" target="_blank" style="padding-left: 15px"><img src="img/fragmentos/4.png" alt="SIU"></a>
		<a href="https://www.coneau.gob.ar/" target="_blank" style="padding-left: 10px"><img src="img/fragmentos/3.png" alt="CONEAU"></a>
		<a href="https://www.conicet.gov.ar/" target="_blank" style="padding-left: 10px"><img src="img/fragmentos/7.png" alt="CONICET"></a>
		<a href="https://www.cin.edu.ar/" target="_blank" style="padding-left: 20px"><img src="img/fragmentos/1.png" alt="CIN"></a>	
		<a href="https://www.imo.org/" target="_blank"  style="padding-left: 0px"><img src="img/fragmentos/9.png" alt="IMO"></a>	
		<a href="http://www.rocram.net/prontus_rocram/site/edic/base/port/inicio.php" target="_blank"  style="padding-left: 5px"><img src="img/fragmentos/5.png" 	alt="rocram"></a>
		<a href="https://iamu-edu.org" target="_blank" style="padding-left: 7px"><img src="img/fragmentos/8.png" alt="iamu"></a>
		<a href="https://www.mercosur.int/" target="_blank" style="padding-left: 5px"><img src="img/fragmentos/2.png" alt="mercosur"></a>
		<a href="https://www.unasursg.org/" target="_blank" style="padding-left: 10px"><img src="img/fragmentos/6.png" alt="unasur"></a>
       
	</div>
-->

    <div class="container-fluid" style="background-color:white">
	    <div class="row">
             <div col-lg-12 style="background-color: white; width: 100%; margin-left: auto; margin-right: auto; margin-top: 0px"  >
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