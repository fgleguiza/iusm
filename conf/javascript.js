	function enviarPaisesEnt(form, p)
	{
		var pais=document.paises_form.paises.options[document.paises_form.paises.options.selectedIndex].value;
//		alert('Pais:'+ pais + ' - Page: '+p);
		self.location='index.php?estado=7&pais='+ pais;
	}
		
		
	function enviarReq(form, p)
	{
		var pais=document.paises_form.paises.options[document.paises_form.paises.options.selectedIndex].value;
		var prod=document.paises_form.productos.options[document.paises_form.productos.options.selectedIndex].value;
		var anal=document.paises_form.analistas.options[document.paises_form.analistas.options.selectedIndex].value;
		var plat=document.paises_form.plataformas.options[document.paises_form.plataformas.options.selectedIndex].value;
		var est=document.paises_form.estados.options[document.paises_form.estados.options.selectedIndex].value;
        var campo=document.paises_form.campo.options[document.paises_form.campo.options.selectedIndex].value;
        var desde = document.getElementById('desde');
        var hasta = document.getElementById('hasta');
        //alert('Prod:'+ prod + ' - Pais: '+pais);
		self.location='index.php?estado='+ p +'&pais='+ pais+'&prod='+ prod+'&analista='+ anal+'&plat='+ plat+'&est='+ est+'&campo='+ campo+'&desde='+ desde.value+'&hasta='+ hasta.value;
	}
	
	
	function confirmDelete(delUrl) 
	{
		if (confirm("Est&aacute seguro que desea eliminar el registro?")) 
		{
			document.location = delUrl;
		}
	}

	function confirmArchivar(delUrl) 
	{
		if (confirm("Est&aacute seguro que desea archivar el registro en el hist&oacuterico?")) 
		{
			document.location = delUrl;
		}
	}

    function validarNuevoRequerimiento() 
    {
    	var mensaje="";	
    	var ok=true;	
    	if (document.getElementById('prioridad_it').value=="") 
    	{
    			ok=false;
    			mensaje="La Prioridad It es Obligatoria";
    	}
        
    	if (document.getElementById('id_elips').value=="") 
    	{
    			ok=false;
    			mensaje="El Id Elips es Obligatorio";

    	}

    	if (document.getElementById('id_pais').value=="0") 
    	{
    			ok=false;
    			mensaje="El Pais es Obligatorio";

    	}

    	if (document.getElementById('id_producto').value=="0") 
    	{
    			ok=false;
    			mensaje="El Producto es Obligatorio";

    	}
        
       	if (document.getElementById('id_tiporeq').value=="0") 
    	{
    			ok=false;
    			mensaje="El Tipo de Requerimiento es Obligatorio";

    	}
        
    	if (document.getElementById('id_master').value=="0") 
    	{
    			ok=false;
    			mensaje="El Master Plan es Obligatorio";

    	}
        
    	if (document.getElementById('descripcion').value=="") 
    	{
    			ok=false;
    			mensaje="La Descripcion es Obligatoria";

    	}
        
    	if (document.getElementById('objetivo').value=="") 
    	{
    			ok=false;
    			mensaje="El Objetivos es Obligatorio";

    	}

       	if (document.getElementById('id_impacto').value=="0") 
    	{
    			ok=false;
    			mensaje="El Impacto es Obligatorio";

    	}

    	if (document.getElementById('observacion').value=="") 
    	{
    			ok=false;
    			mensaje="La Observacion es Obligatoria";

    	}

    	if (document.getElementById('id_direccion').value=="0") 
    	{
    			ok=false;
    			mensaje="La direccion es Obligatoria";

    	}
        
    	if (document.getElementById('id_solicitante').value=="0") 
    	{
    			ok=false;
    			mensaje="El Solicitante es Obligatorio";

    	}
        
    	if (document.getElementById('inicio').value=="") 
    	{
    			ok=false;
    			mensaje="La Fecha de Inicio es Obligatoria";

    	}

    	if (document.getElementById('id_analista').value=="0") 
    	{
    			ok=false;
    			mensaje="El Analista es Obligatorio";

    	}

    	if (document.getElementById('id_plataforma').value=="0") 
    	{
    			ok=false;
    			mensaje="La plataforma es Obligatoria";

    	}
        
    	if (document.getElementById('id_estado').value=="0") 
    	{
    			ok=false;
    			mensaje="El Estado es Obligatorio";

    	}    	
        
        if (document.getElementById('avance').value=="") 
    	{
    			ok=false;
    			mensaje="El Avance es Obligatorio";

    	}

    	if (document.getElementById('avance').value=="") 
    	{
    			ok=false;
    			mensaje="El Avance es Obligatorio";

    	}
        
    	if (document.getElementById('id_gradoavance').value=="0") 
    	{
    			ok=false;
    			mensaje="El Grado de Avance es Obligatorio";

    	}
             
    	if (ok)
    	{	
    		document.nuevorequerimiento.submit();
    	}
    	else
    	{
    		alert(mensaje);
    	}
    }
 
 /* ----------------------------------------------------------------------------
 ----------------- FUNCION PARA VALIDAR LOS FORMULARIOS -----------------------
 -------------------------------------------------------------------------------*/

 //		** VALIDAR QUE EL CAMPO SEA NUMERICO     **                //
 function Solo_Numerico(variable){
        Numer=parseInt(variable);
        if (isNaN(Numer)){
            return "";
        }
        return Numer;
}

function ValNumero(Control){
	Control.value=Solo_Numerico(Control.value);
}

//      **  VALIDAR QUE EL CAMPO SEA ALFABETICO   **                //

function Solo_Letra() {
 if ((event.keyCode != 32) && (event.keyCode < 65) || (event.keyCode > 90) && (event.keyCode < 97) || (event.keyCode > 122))
  event.returnValue = false;
}

//      **   VALIDAR FORMULARIO DE USUARIOS       **          //

   function validarFormularioUsuarios() 
    {
    	var mensaje="";	
    	var ok=true;	
	
    	if (document.getElementById('npassword').value=="") 
    	{
    			ok=false;
    			mensaje=mensaje+"-Debe Ingresar password. \n";
    	}
		
		if (document.getElementById('apellido').value=="") 
    	{
    			ok=false;
    			mensaje=mensaje+"-Debe Ingresar apellido. \n";
    	}
		
   	if (document.getElementById('nombres').value=="") 
    	{
    			ok=false;
    			mensaje=mensaje+"-Debe Ingresar nombres. \n";
    	}

		if (document.getElementById('tedirecto').value=="") 
    	{
    			ok=false;
    			mensaje=mensaje+"-Debe Ingresar telefono directo. \n";
    	}
		
    	if (document.getElementById('teinterno').value=="") 
    	{
    			ok=false;
    			mensaje=mensaje+"-Debe Ingresar telefono interno. \n";
    	}
	
    	if (document.getElementById('email').value=="") 
    	{
    			ok=false;
    			mensaje=mensaje+"-Debe Ingresar email. \n";
    	}
			
		if (document.getElementById('direccion').value=="null") 
    	{
    			ok=false;
    			mensaje=mensaje+"-Debe Seleccionar direccion. \n";
    	}

		if (document.getElementById('dto').value=="null") 
    	{
    			ok=false;
    			mensaje=mensaje+"-Debe Seleccionar departamento. \n";
    	}
		 	
    	if (document.getElementById('sec').value=="") 
    	{
    			ok=false;
    			mensaje=mensaje+"-Debe Ingresar seccion. \n";
    	}

		// ***** LAS VALIDACIONES DE IGUALDAD DE CAMPO SE HARAN SI ES UN ALTA DE USUARIO  ***** //
		if (!document.getElementById('update')) 
    	{
			//VALIDO DOCUMENTO Y  SEGUNDO PASSWORD EN INSERT 
			if (document.getElementById('cpassword').value=="") 
    	    {
    			ok=false;
    			mensaje=mensaje+"-Debe Ingresar password. \n";
			}
			
			if (document.getElementById('ndoc').value=="") 
    		{
    			ok=false;
    			mensaje=mensaje+"-Debe Ingresar numero de documento. \n";
    		}
			
			//COMPRUEBO QUE LOS PASSWORD SEAN IGUALES
			if(document.getElementById('npassword').value != document.getElementById('cpassword').value)
			{
				ok = false;
				mensaje = mensaje+"-Los password deben ser iguales. \n";
			}			
		}
			
		if (ok)
    	{	
			return true;
			//document.form1.submit(); 
    	}
    	else
    	{
    		alert(mensaje);
			return false;
    	}
    }

//      **   VALIDAR FORMULARIO DE SISTEMAS       **          //

   function validarFormularioSistemas() 
    {
    	var mensaje="";	
    	var ok=true;	
			
		if(document.getElementById('alta_sistema'))
		{
			if (document.getElementById('codigo').value=="") 
			{
					ok=false;
					mensaje=mensaje+"-Debe Ingresar codigo. \n";
			}
			
			if (document.getElementById('nuevo_admin').value=="") 
    		{	
    			ok=false;
    			mensaje=mensaje+"-Debe Seleccionar dni responsable. \n";
    		}	
		}
		
		if (document.getElementById('nombre').value=="") 
    	{
    			ok=false;
    			mensaje=mensaje+"-Debe Ingresar nombre. \n";
    	}
		
      	if (document.getElementById('pagina_inicio').value=="") 
    	{
    			ok=false;
    			mensaje=mensaje+"-Debe Ingresar pagina inicio. \n";
    	}

		if (document.getElementById('pagina_consulta').value=="") 
    	{
    			ok=false;
    			mensaje=mensaje+"-Debe Ingresar pagina consulta. \n";
    	}
	
    	if (document.getElementById('direccion').value=="null") 
    	{
    			ok=false;
    			mensaje=mensaje+"-Debe Seleccionar direccion. \n";
    	}
	
    	if (document.getElementById('servidor').value=="null") 
    	{
    			ok=false;
    			mensaje=mensaje+"-Debe Seleccionar servidor. \n";
    	}
			
		if (document.getElementById('lenguaje').value=="null") 
    	{
    			ok=false;
    			mensaje=mensaje+"-Debe Seleccionar lenguaje. \n";
    	}

		if (document.getElementById('agrupamiento').value=="null") 
    	{
    			ok=false;
    			mensaje=mensaje+"-Debe Seleccionar agrupamiento. \n";
    	}
		 
		if (document.getElementById('estado').value=="null") 
    	{
    			ok=false;
    			mensaje=mensaje+"-Debe Seleccionar estado. \n";
    	}
		
		if (ok)
    	{	
			return true;
    	}
    	else
    	{
    		alert(mensaje);
			return false;
    	}
    } 
    
//      **   CONFIRMAR BOTON ELIMINAR   **   	
	
	function confirmar(pregunta){ 
    	if (confirm(pregunta))
		{ 
    		document.form1.submit() 
		}else{ 
			return false 
		}
	}

  function escribirMensaje(){
  	var mensaje = 1;
  	mensaje=prompt('Escriba un mensaje:\n','');
  	return mensaje;
  }
  function escribir(mensaje){
  return mensaje;
}

// function navBar (){
// 	const element = document.getElementById("navBar")
// 	element.innerHTML = '<div class="container">
// 	<div class="row">
// 	<nav class="navbar navbar-light shadow navbar-expand-lg " style="background-color: rgba(255,255,255,1); padding: 0px;">
// 		<div class=" container" style="padding:0px;">
// 			<a class="navbar-brand" href="index.html" style="padding:0px; width: 7%; height: 7%;margin-left: 20% ;margin-top: auto"><img class="logomenu img-responsive" src="img/fragmentos/logo_iusm.png"></a>
// 			<div class="nav-item-float">
// 			<ul class="nav nav-pills col-12 col-md-auto mb-2 justify-content-center mb-md-0" style="padding-top: 40px; float: right; text-decoration: none;">
// 				<li class="nav-item"><a href="index.html"> <i class="icono-arg-casa-negativo" style="color: black"></i> </a></li>
// 				<li class="nav-item"><a href="institucional.html" class="textomenu">INSTITUCIONAL</a></li>
// 				<li class="nav-item"><a href="carreras.php" class="textomenu">CARRERAS</a></li>
// 				<li class="nav-item"><a href="academica.html" class="textomenu">ACADÉMICA</a></li>
// 				<li class="nav-item"><a href="posgrado.html" class="textomenu">POSGRADO</a></li>
// 				<li class="nav-item"><a href="extension.html" class="textomenu">EXTENSIÓN</a></li>
// 				<!-- <li class="nav-item"><a href="revista/edicion-2/index.html" target="_blank" class="textomenu">REVISTA</a></li> -->
// 			<!--	<li class="nav-item"><a href="http://www.biblioteca.prefecturanaval.gov.ar/" class="textomenu">BIBLIOTECA</a></li> -->
// 				<li class="nav-item"><a href="investigacion.html" class="textomenu">INVESTIGACIÓN</a></li>
// 				<li class="nav-item"><a href="ubicacion.html"><i class="icono-arg-marcador-ubicacion-2" style="color: black"></i>
// 				<li class="nav-item"><a href="#plataformas-virtuales-educativas" onclick="scrollToSection('#plataformas-virtuales-educativas')" class="textomenu">PLATAFORMAS</a></li>
// 			</ul>
// 			</div>
// 			<script>
// 				function scrollToSection(elementId) {
// 				  const element = document.getElementById(elementId);
// 				  const offset = 50; // Adjust offset value here

// 				  const elementPosition = element.getBoundingClientRect().top;
// 				  const scrollPosition = window.scrollY || document.documentElement.scrollTop;

// 				  const targetPosition = scrollPosition + elementPosition - offset;

// 				  window.scrollTo({ top: targetPosition, behavior: "smooth" });
// 				}
// 			  </script>

// 		</div>
//        		<span class="navbar-toggler-icon"></span>
//         	<div class="collapse navbar-collapse justify-content-end" id="navbarContent">
//     			<ul class="navbar-nav">
// 				</ul>
// 			</div>
// 	</nav>
// 		</div>

// </div>

// }

function navBar() {
	const element = document.getElementById("navBar");
	element.innerHTML = `
	  <nav class="navbar navbar-light shadow navbar-expand-lg" style="background-color: rgba(255,255,255,1); padding: 0px;">
		<div class="container" style="padding:0px;">
		  <a class="navbar-brand" href="index.html" style="padding:0px; width: 7%; height: 7%;margin-left: 20% ;margin-top: auto"><img class="logomenu img-responsive" src="img/fragmentos/logo_iusm.png"></a>
		  <div class="nav-item-float">
			<ul class="nav nav-pills col-12 col-md-auto mb-2 justify-content-center mb-md-0" style="padding-top: 40px; float: right; text-decoration: none;">
			  <li class="nav-item"><a href="index.html"> <i class="icono-arg-casa-negativo" style="color: black"></i> </a></li>
			  <li class="nav-item"><a href="institucional.html" class="textomenu">INSTITUCIONAL</a></li>
			  <li class="nav-item"><a href="carreras.php" class="textomenu">CARRERAS</a></li>
			  <li class="nav-item"><a href="academica.html" class="textomenu">ACADÉMICA</a></li>
			  <li class="nav-item"><a href="posgrado.html" class="textomenu">POSGRADO</a></li>
			  <li class="nav-item"><a href="extension.html" class="textomenu">EXTENSIÓN</a></li>
			  <li class="nav-item"><a href="investigacion.html" class="textomenu">INVESTIGACIÓN</a></li>
			  <li class="nav-item"><a href="index.html#plataformas-virtuales-educativas" class="textomenu">PLATAFORMAS</a></li>
			  <li class="nav-item"><a href="ubicacion.html"><i class="icono-arg-marcador-ubicacion-2" style="color: black"></i></a></li>
			</ul>
		  </div>
		  <span class="navbar-toggler-icon"></span>
		  <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
			<ul class="navbar-nav">
			</ul>
		  </div>
		</div>
	  </nav>
	`;
  }


navBar();

//facu