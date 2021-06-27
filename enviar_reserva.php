<!doctype html>
<html><!-- InstanceBegin template="/Templates/plantilla.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Parque Natural - Reservas</title>
<!-- InstanceEndEditable -->
<link href="estilo.css" rel="stylesheet" type="text/css"><!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>

<div class="container">
  <header>
    <h1><strong>Parque Natural <span class="marron">Sierra Bicuerca</span></strong></h1>
  </header>
  <div class="sidebar1">
    <ul class="nav">
        <li><a href="index.html">Inicio</a></li>
        <li><a href="especies.html">Especies</a></li>
        <li><a href="reservas.html">Reservas</a></li>
        <li><a href="galeria.html">Galeria</a></li>
    </ul>
  <!-- end .sidebar1 --></div>
  <article class="content">
  <div class="content-content">
    <section>
      <h2><!-- InstanceBeginEditable name="Titulo" -->Reservas<!-- InstanceEndEditable --></h2>
      <!-- InstanceBeginEditable name="Contenido" -->
      <p>El acceso al parque es  libre y gratuito, siempre que se respeten las normas de conducta y preservación  del entorno.</p>
     
<?php
//comenzamos recogiendo los datos
function recogeDato($campo){
	return isset($_REQUEST[$campo])?$_REQUEST[$campo]:'';
	}   //la función recogeDatos comprueba su se ha recibido un dato y recoger su   valor
	//sino se ha recibido, le asigna un valor vacio.
$Nombre = recogeDato('Nombre');
$Email = recogeDato('Email'); //asignamos cada valor a una variable
$Fecha = recogeDato('Fecha');
$Numero = recogeDato('Numero');
$Edad = recogeDato('Edad');
$Aula = isset ($_REQUEST['Aula'])?'Si':'No';
$Observaciones = recogeDato('Observaciones');
$Algunerror = FALSE;
//una vez recogidos comprobamos los obligatorios
if($Nombre==''){//comprabamos que el campo no haya quedado vasio
	$Algunerror = TRUE;	
	//echo "No has introducido tu nombre\n";		
	echo "<p class=\"erroneo\">No has introducido tu Nombre.</p>\n";	
}
if($Email==''){
$Algunerror = TRUE;
echo "<p class=\"erroneo\">No has introducido tu Email.</p>\n";
}
	
if($Fecha==''){
$Algunerror=TRUE;
echo "<p class=\"erroneo\">No has indicado la Fecha de visita.</p>\n";	
}
	
if($Numero==''){
$Algunerror=TRUE;
echo "<p class=\"erroneo\">No has indicado el Número de personas del grupo.</p>\n";
}
	
if($Edad==''){
$Algunerror=TRUE;
echo "<p class=\"erroneo\">No has inidicado la Edad del grupo.</p>\n";
}
	if ($Algunerror){// comprobamos si ha habido algún error
		echo "<p>&nbsp;</p>\n";//si los hay, se lo indicamos al usuario
		echo "<p>No se ha enviado la reserva por los errores que se detallan arriba.</p>\n";
		echo "<p>Por favor, vuelve a rellenar el Formulario.</p>\n";
		echo "<p class=\"centrado\"><a href=\"reservas.html\">Volver al Formulario</a></p>\n";		
		}else{
			$Para="dantelucas088@gmail.com";//si todo es correcto enviamos el correo 
			$Asunto="Reserva de grupos ";
			$Mensaje= "Datos de contacto:\n".//creamos el mensaje con los datos
			"Nombre: $Nombre\n".
			"eMail: $Email\n".
			"Información de la reserva:\n".
			"Día de la visita: $Fecha \n".
			"Personas del grupo: $Numero \n".
			"Con edades: $Edad \n".
			"Aula educativa: $Aula \n".
			"Observaciones: $Observaciones";
			mail($Para, $Asunto, $Mensaje); //y lo enviamos
			echo "<p>Tu reserva se ha enviado correctamente.</p>\n";
			echo "<p>Nos pondremos en contacto lo antes posible. Esperemos que disfrutes del parque.</p>\n";			
}
?>


  
  
      <!-- InstanceEndEditable --></section>
  </div>
  <!-- end .content --></article>
  <footer>
    <p>Desarrollado por: Dante Lucas Licidio</p>
  </footer>
<!-- end .container --></div>
</body>
<!-- InstanceEnd --></html>
