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
				<?php include 'header.php';?>
			<!-- Nav Bar -->
			<div id="navbarcont" class="borderb">
					<div class="inwidth">
						<a href="index.php"><div id="logo"><img src="img/logo22.png" width="150%" ></div></a>
						<div id="navbuttcont">
							<a href="index.php"><div id="button" class="w16 tableo borderl but">
								<span class="tablei">Inicio</span>
							</div></a>
							<a href="#acerca"><div id="button" class="w16 tableo borderl but">
								<span class="tablei">¿Quienes somos?</span>
							</div></a>
							<a href="#servicios"><div id="button" class="w16 tableo borderl but">
								<span class="tablei">Servicios</span>
							</div></a>
							<a href="#soporte"><div id="button" class="w16 tableo borderl but">
								<span class="tablei">Soporte</span>
							</div></a>
							<a href="#proteccion"><div id="button" class="w16 tableo borderl but">
								<span class="tablei">Proteccion</span>
							</div></a>
							
							<a href="contactenos.php"><div id="button" class="w16 tableo borderl borderr but">
								<span class="tablei">Contactenos</span>
							</div></a>
						</div>
					</div>

			</div>

			<!-- Nav bar ends here -->
			<!-- Mobile Nav Bar -->
	
				<div id="mobilelogocont" class="borderb">
					<div id="menubut" onClick="menu()"><i class="fas fa-bars fa-2x"></i></div>
					<img src="img/logo22.png" width="50%;">
				</div>

				<div id="navmobilecont">
					<a href="index.php"><div class="mob-but borderb">
						<div class="tableo but">
							<span class="tablei">Inicio</span>
						</div>
					</div></a>
					<a href="#acerca"><div class="mob-but borderb">
						<div class="tableo but">
							<span class="tablei">¿Quienes somos?</span>
						</div>
					</div></a>
					<a href="#servicios"><div class="mob-but borderb">
						<div class="tableo but">
							<span class="tablei">Servicios</span>
						</div>
					</div></a>
					<a href="#soporte"><div class="mob-but borderb">
						<div class="tableo but">
							<span class="tablei">Soporte</span>
						</div>
					</div></a>
					<a href="#proteccion"><div class="mob-but borderb">
						<div class="tableo but">
							<span class="tablei">Proteccion</span>
						</div>
					</div></a>
					<a href="contactenos.php"><div class="mob-but borderb">
						<div class="tableo but">
							<span class="tablei">Contactenos</span>
						</div>
					</div></a>
				</div>

				<!-- Mobile Nav Bar ends here -->

				<script>
			function menu(){
				var margin = $("#navmobilecont").css("left");

				if(margin == "-300px"){
					$('#navmobilecont').stop().animate({left: 0},400,'easeOutQuint');
				}
				else {
					$('#navmobilecont').stop().animate({left: -300},400,'easeOutQuint');
				}

			}

			</script>
	<!-- Nav bar ends here -->
		
			<script>

				$('a[href^="#"]').click(function (e) {
						e.preventDefault();

						var target = this.hash;
						var $target = $(target);

						$('html, body').stop().animate({
							'scrollTop': $target.offset().top
						}, 1000, 'easeOutQuint', function () {
							window.location.hash = target;
						});
					});

				</script>
		
	  <div id="subcont">
			<img src="img/banner2.jpg" width="100%" alt="" id="bann"/>
<section id="acerca">
	  <div class="inwidth">
		  <h2 class="h22in2">Acerca de nosotros</h2>
					<p class="par padtyb">
						JJ NETWORKS SAS, fue fundada en julio del 2019 para entregar el servicio de INTERNET con excelente calidad y servicio al cliente, a la región de la Sabana Centro de Bogotá y Región del Guavio.<br>
<br>
Actualmente prestamos servicio de Internet usando una red de Fibra óptica en Sopó y Guasca y trabajamos para expandir nuestro servicio a otros municipio.
En una alianza con CABLEMAS, prestamos también el servicio de televisión a nuestros clientes y usuarios.
					</p>
				</div>      		
       		</section>
			<section id="servicios" style="background-color: #fbfbfb; padding-bottom: 50px;">
				<div class="inwidth-block">
							<div class="w50">
								<div class="wi90 borders">
									<span class="fa-stack fa-3x">
									  <i class="fas fa-circle fa-stack-2x" style="color:var(--color-primary);"></i>
									  <i class="fas fa-wifi fa-stack-1x fa-inverse"></i>
									</span>
									<h2>PLANES DE SOLO INTERNET</h2>
									<a href="residenciales.php"><div class="button1">Mas Información</div></a>
								</div>
							</div>  
							<div class="w50">
								<div class="wi90 borders">
									<span class="fa-stack fa-3x">
									  <i class="fas fa-circle fa-stack-2x" style="color:var(--color-primary);"></i>
									  <i class="fas fa-tv fa-stack-1x fa-inverse"></i>
									</span>
									<h2>PLANES DE INTERNET + TELEVISIÓN </h2>						
									<a href="corporativo.php"><div class="button1">Mas Información</div></a>
								</div>
							</div>
				    		
   		  </section>
   		  <section style="padding-top: 0px;">
	     	 <img src="img/banner22.jpg" width="100%" alt=""/> 
      	  </section>
       		
   		  <section id="soporte" style="padding-top: 0px; background-color: #fbfbfb;">
   			  <div id="banner-back">
   			  
					<div class="inwidth-block">
						<a href="pqr/upload"><div class="w25">
					  	  <div class="wi90p20 borders" style="background-color: white; text-align: center;">						
								 <i class="fas fa-file-alt fa-3x" style="color:var(--color-primary);"></i>

								<div class="el-tit tableo"><h3 class="tablei" style="color:var(--color-primary);">PQR</h3></div>						
								<span>Radique y consulte el estado de su PQR.</span>
							</div>
						</div></a>
     					<a href="https://www.speedtest.net/es"><div class="w25">
					  	  <div class="wi90p20 borders" style="background-color: white;">						
								 <i class="fas fa-tachometer-alt fa-3x" style="color:var(--color-primary);"></i>

								<div class="el-tit tableo"><h3 class="tablei" style="color:var(--color-primary);">MEDIDOR DE VELOCIDAD</h3></div>						
								<span>Mida la velocidad de su conexion a internet.</span>
							</div>
						</div></a>
     					<a href="disponibilidad.pdf" target="_blank"><div class="w25">
					  	  <div class="wi90p20 borders" style="background-color: white;">						
								 <i class="fas fa-chart-line fa-3x" style="color:var(--color-primary);"></i>

								<div class="el-tit tableo"><h3 class="tablei" style="color:var(--color-primary);">INDICADORES DE DISPONIBILIDAD</h3></div>						
								<span>Indicadores de calidad de nuestros servicios.</span>
							</div>
     					</div></a>
     					<a href="caracteristicas.php"><div class="w25">
					  	  <div class="wi90p20 borders" style="background-color: white;">						
								 <i class="fas fa-clipboard-list fa-3x" style="color:var(--color-primary);"></i>

								<div class="el-tit tableo"><h3 class="tablei" style="color:var(--color-primary);">CARACTERISTICAS DEL SERVICIO</h3></div>						
								<span>Caracteristicas de nuestros servicios.</span>
							</div>
						</div></a>
					</div>
    				<a href="ficha tecnica.pdf" target="_blank"><div class="inwidth-block">
     					<div class="w25">
					  	  <div class="wi90p20 borders" style="background-color: white;">						
								 <i class="fas fa-list fa-3x" style="color:var(--color-primary);"></i>

								<div class="el-tit tableo"><h3 class="tablei" style="color:var(--color-primary);">FICHA TECNICA MODEMS</h3></div>						
								<span>Informacion sobre nuestros dispositivos.</span>
							</div>
						</div></a>
     					<a href="factores.php"><div class="w25">
					  	  <div class="wi90p20 borders" style="background-color: white;">						
								 <i class="fas fa-exclamation-triangle fa-3x" style="color:var(--color-primary);"></i>

								<div class="el-tit tableo"><h3 class="tablei" style="color:var(--color-primary);">FACTORES DE LIMITACION DE VELOCIDAD</h3></div>						
								<span>Facores que pueden estar limitando su servicio.</span>
							</div>
						</div></a>
     					<a href="informacion_crc.php"><div class="w25">
					  	  <div class="wi90p20 borders" style="background-color: white;">						
								 <i class="fas fa-glasses fa-3x" style="color:var(--color-primary);"></i>

								<div class="el-tit tableo"><h3 class="tablei" style="color:var(--color-primary);">INFORMACION CRC MODEMS</h3></div>						
								<span>Informacion de utilidad de la CRC.</span>
							</div>
						</div></a>
      				
      				
      				</div>       				
       			</div>
			</section>
     		
      		<section id="proteccion" style="background-color: var(--color-secondary);">
      			<div class="inwidth-block" style="color: white;">
					<a href="procedimientos.php"><div class="w33">
						<div class="wi90p20">
					    	<img src="img/procedimientos.jpg" class="rimg" width="100%" alt=""/> 
					    	<div class="el-tit tableo">
					    		<h3 class="tablei">PROCEDIMIENTOS PQR</h3>
					    	</div>
					    </div>
					</div></a>		
				
				
				
					<a href="atencion.pdf" target="_blank"><div class="w33">
						<div class="wi90p20">
					    	<img src="img/atencion.jpg" class="rimg" width="100%" alt=""/> 
					    	<div class="el-tit tableo">
					    		<h3 class="tablei">INDICADORES DE ATENCION AL USUARIO</h3>
					    	</div>
					    </div>
					</div></a>			
				
				
					<a href="control.php"><div class="w33">
						<div class="wi90p20">
					    	<img src="img/control.jpg" class="rimg" width="100%" alt=""/> 
					    	<div class="el-tit tableo">
					    		<h3 class="tablei">CONTROL PARENTAL</h3>
					    	</div>
					    </div>
					</div>	</a>			
				</div>
			</section>
     		
      		<section>
      			<div class="inwidth-block">
      				<a href="https://www.crcom.gov.co/es/pagina/regimen-proteccion-usuario" target="_blank"><img src="img/1562617504187.jpg" width="100%"></a>
				</div> 			
      			
      		</section>
      		
      		
       		
		<?php include 'footer.php';?>
       		
        </div>
	</div>
	
</body>
</html>


