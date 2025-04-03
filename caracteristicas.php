<!doctype html>
<?php include 'vars.php';?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=0.6, maximum-scale=0.6, user-scalable=0"/>
<script type="text/javascript" src="jquery/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="jquery/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="jquery/jquery.mousewheel.js"></script>
<link href="https://fonts.googleapis.com/css?family=Fira+Sans&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Archivo+Black|Paytone+One&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/be342632af.js"></script>
<script type="text/javascript" src="js/navbar.js"></script>
<link rel="stylesheet" type="text/css" href="css/general.css">
<link rel="stylesheet" type="text/css" href="css/navbar.css">
<title><?php echo $nombre; ?></title>
<style type="text/css">
	
</style>
</head>
<body>
	<div id="container">
		<?php include 'navbar.php';?>
	  <div id="subcont">
	  		<div id="banner2" style="background-image: url(img/banner22.jpg);" class="tableo">
			  <span class="tablei wtitle">CARACTERISTICAS DEL SERVICIO</span>
			</div>
		  <div class="inwidth2" style="text-align: center; margin-top: 80px;">
			<h1 class="h2in" style="line-height: 1.2em;">RECURSOS TÉCNICOS Y LOGÍSTICOS PARA GARANTIZAR LA SEGURIDAD DE LA RED Y LA INTEGRIDAD DEL SERVICIO</h1><br>
			  <p style="text-align: left;">
				<?php echo $razonsocial; ?> como proveedor de redes y servicios de telecomunicaciones garantiza la seguridad de la red y la integridad del servicio, para evitar la interceptación, interrupción e interferencia del mismo y hemos tomado las respectivas medidas de seguridad de conformidad con las normas aplicables y de acuerdo a los siguientes aspectos:<br><br>

				1. Principio de Autenticación: Es la verificación de la identidad tanto de usuarios, dispositivos, servicios y aplicaciones. La información utilizada para la identificación, la autenticación y la autorización debe estar protegida. El acceso a la red está restringido a los usuarios de acuerdo con una contraseña y una clave. Además se autentica el equipo del cliente mediante la MAC.<br>
				2. Principio de Acceso: Es prevenir la utilización no autorizada de un recurso, por eso el control de acceso debe garantizar que sólo los usuarios o los dispositivos autorizados puedan acceder a los elementos de la red, la información almacenada, los flujos de información, los servicios y aplicaciones. El acceso a la red está restringido a los usuarios de acuerdo con una contraseña y una clave. Además se autentica el equipo del cliente mediante la MAC. Estas funciones se llevan a cabo en el enrutador de borde.<br>
				3. Servicio de No repudio: Tiene como objeto recolectar, mantener, poner a disposición y validar evidencia irrefutable sobre la identidad de los remitentes y destinatarios de transferencias de datos. Cuando sea solicitado, se puede monitorear y almacenar la información que permite la trazabilidad de una comunicación entre un remitente y un destinatario.<br>
				4. Principio de Confidencialidad de datos: <?php echo $razonsocial; ?> asegura la protección y la garantía que la información no se divulgará ni se pondrá a disposición de individuos, entidades o procesos no autorizados. <br>
				5. Principio de Integridad de datos: <?php echo $razonsocial; ?> garantiza en su red la exactitud y la veracidad de los datos, protegiéndolos contra acciones no autorizadas de modificación, supresión, creación o reactuación, e informará de las acciones no autorizadas, cuando tenga conocimiento, incluso a las autoridades competentes.<br>
				6. Principio de Disponibilidad: Es garantizar que las circunstancias de la red no impidan el acceso autorizado a los elementos de la red, la información almacenada, los flujos de información, los servicios y las aplicaciones.<br><br>

				<?php echo $razonsocial; ?> no BLOQUEARÁ el acceso a páginas Web o el uso de aplicaciones en la red, sin el consentimiento expreso del usuario, salvo en aquéllos casos en que por disposición legal o reglamentaria estén prohibidas o su acceso sea restringido.<br><br><br>

				NEUTRALIDAD DEL SERVICIO<br><br>

				<?php echo $razonsocial; ?>, como proveedor de redes y servicios de telecomunicaciones, en desarrollo de la neutralidad del servicio, CUMPLE con los siguientes principios:<br><br>

				1.	Principio de libre elección. El usuario podrá en forma libre utilizar, enviar, recibir u ofrecer cualquier contenido, aplicación o servicio a través de Internet, salvo en los casos que por disposición legal u orden judicial estén prohibidos o su uso se encuentre restringido. Además, el usuario podrá utilizar en forma libre cualquier clase de instrumento, dispositivos o aparatos en la red, siempre que sean legales y que los mismos no dañen o perjudiquen la seguridad de la red o la calidad del servicio.<br>
				2.	Principio de no discriminación. Brindará un trato igualitario a los contenidos, aplicaciones y servicios, sin ningún tipo de discriminación arbitraria, en especial en razón al origen o propiedad de los mismos, sin embargo, podrán hacer ofertas según las necesidades de los segmentos de mercado o de sus usuarios de acuerdo con sus perfiles de uso y consumo, lo cual no se entenderá como discriminación.
				3.	Principio de transparencia. Presentará periódicamente sus políticas de gestión de tráfico a los usuarios y a otros proveedores que tengan acceso a su red.<br>
				4.	Principio de Información. Informará al usuario de toda la información asociada a las condiciones de prestación del servicio incluida velocidad, calidad, prácticas de gestión de tráfico relativas a cada plan ofrecido o acordado, en los términos dispuestos en la Resolución 5050 de 2016, de la Comisión de Regulación de Comunicaciones.
			  </p><br>
			<a href="ELEMENTOS DE SEGURIDAD.pdf" target="_blank"><div class="button1">Seguridad en la red</div></a>

		  </div>
		  </div>
      		
       		
		<?php include 'footer.php';?>
       		
        </div>
	</div>
	
</body>
</html>


