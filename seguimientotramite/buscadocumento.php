<!doctype html>
<html lang="es">

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tramitedocumentario";

// Create connection
$conn = new mysqli_connect($servername, $username, $password);
// Check connection
if(mysqli_connect_errno()) 
{
    echo 'Error al conectar a la base de datos ', $endl;
    exit();
}
?>


<!-- Mirrored from www.bellasartescusco.edu.pe/talleres-libres/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Sep 2017 04:55:09 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <link rel="shortcut icon" href="../file/web/ico-esabac.png" type="image/png" />
    <title>Universidad Nacional Diego Quispe Tito del Cusco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="oiqWKxYuKs6WIsjeXMEA8Vp-JjgSIwO5zKYHN0ohbHY" />
    <meta name="keywords" content="Universidad Nacional de Arte Diego Quispe Tito, bellas artes cusco, Universidad de Arte del Cusco, Universidad de Bellas Artes" />
    <meta name="description" content="Universidad Nacional de Arte Diego Quispe Tito, bellas artes cusco, Universidad de arte diego quispe tito" />
    <meta name="author" content="Copyright ©2016 - Universidad Nacional de Arte Diego Quispe Tito - (084) 231491 - Calle Marquez 271" />
    <!-- CSS Libs -->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/fontawesome.css" />
    <link rel="stylesheet" type="text/css" href="../css/bellas-estilos.css" />
    <link rel="stylesheet" type="text/css" href="../css/jquery.fancybox.css" />
    <!--[if lt IE 9]> 
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script> 
	<script src="js/Respond.js"></script>
<![endif]-->
</head>
<body>
<div class="container">
    <div class="row cabecera" >
        <div class="col-md-5" align="center">
            <a href="../index.html">
                <img class="img-responsive logo-menu" src="../file/web/logo-un-dqt.png" />
                <!--<h2 class="titulo-menu text-justify">ESCUELA SUPERIOR AUTÓNOMA DE BELLAS ARTES <br/> "DIEGO QUISPE TITO" DEL CUSCO</h2>-->
            </a>
        </div>
        <div class="col-md-7" align="right">
            <ul class="list-inline social-menu">
                <li>
                    <a class="blog" href="../blog/1/index.html" title="Blog" target="_blanck"><i class="fa fa-newspaper-o"></i></a>
                </li>
                <li>
                    <a class="facebook" href="https://www.facebook.com/bellasartescusco/" title="Facebook" target="_blanck"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                    <a class="youtube" href="https://www.youtube.com/channel/UCLZq-B_Vo0He_BfYyVNNugA/" title="Youtube" target="_blanck"><i class="fa fa-youtube"></i></a>
                </li>
                <li>
                    <a class="twitter" href="https://twitter.com/CE_KHIPU" title="Twitter" target="_blanck"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                    <a class="google" href="https://plus.google.com/u/0/107034813347827222589/" title="Google" target="_blanck"><i class="fa fa-google-plus"></i></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="row menu">
        <!--<div class="col-md-12">-->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" style="color:#000;">
                    MENU
                </button>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle menu-primero" data-toggle="dropdown">
                            INSTITUCIÓN <i class="fa fa-caret-down" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <!--<li><a href="http://www.bellasartescusco.edu.pe/resena-historica">Reseña Historica</a></li>-->
                            <!--<li role="separator" class="divider"></li>-->
                            <li><a href="../mensaje-director/index.html">Mensaje Director</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="../quienes-somos/index.html">Quienes Somos</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="../autoridad/index.html">Autoridades</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="../directorio/index.html">Directorio Insitucional</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            CARRERAS <i class="fa fa-caret-down" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="../carreras/artes-visuales/index.html">Artes Visuales</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="../carreras/artes-visuales/dibujo-pintura/index.html">Especialidad de Dibujo y Pintura</a></li>
                            <li><a href="../carreras/artes-visuales/dibujo-ceramica/index.html">Especialidad de Dibujo y Cerámica</a></li>
                            <li><a href="../carreras/artes-visuales/dibujo-escultura/index.html">Especialidad de Dibujo y Escultura</a></li>
                            <li><a href="../carreras/artes-visuales/dibujo-grabado/index.html">Especialidad de Dibujo, Grabado y Diseño Gráfico</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="../carreras/conservacion-restauracion-obras/index.html">Conservacion y Restauración de Obras de Arte</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="../carreras/educacion-artistica/index.html">Educacíon Artística</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            FILIALES <i class="fa fa-caret-down" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="../filial/calca/index.html">Filial Calca</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="../filial/checacupe/index.html">Filial Checacupe</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            TRANSPARENCIA <i class="fa fa-caret-down" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="../transparencia-estandar/index.html">Transparencia Estandar</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="../transparencia-institucional/index.html">Transparencia Institucional</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="../convocatorias/index.html">Convocatorias</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="../bolsa-trabajo/index.html">Bolsa de trabajo</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="../mapa-website/index.html">Mapa Website</a></li>
                        </ul>
                    </li>
                    <li><a href="../ccomputo/index.html" >CÓMPUTO </a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            ADMISIÓN <i class="fa fa-caret-down" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <!--<li><a href="http://www.bellasartescusco.edu.pe/admision">Admisión Escuela</a></li>
                            <li role="separator" class="divider"></li>-->
                            <li><a href="../examen/index.html">Examen Admisión</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="../ciclo-basico-artistico/index.html">Ciclo Basico Artístico</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            SERVICIOS <i class="fa fa-caret-down" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="index.html">Talleres Libres</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="../vacaciones-utiles/index.html">Vacaciones Utiles</a></li>
                        </ul>
                    </li>
                    <li><a href="../contacto/index.html" class="menu-ultimo">CONTACTO </a></li>
                </ul>
            </div>
        <!--</div>-->
    </div>
</div><div class="container">
    <div class="row slider">
        <div class="col-md-12 cinta">
            <div id="mislider" class="carousel slide carousel-block" data-ride="carousel">
                <ol class="carousel-indicators">
                     
                                                            <li data-target="#mislider" data-slide-to="0" class='active' ></li>
                                                            <li data-target="#mislider" data-slide-to="1"  ></li>
                                                            <li data-target="#mislider" data-slide-to="2"  ></li>
                                                            <li data-target="#mislider" data-slide-to="3"  ></li>
                                        
                </ol>
                <div class="carousel-inner" role="listbox">
                     
                                                            <div class="item active">
                        <img src="../img/slider/1504301529-fondocarne.jpg" alt="" />
                        <div class="carousel-caption">
                            <h3></h3>
                                                    </div>
                        <div class="imagen-caption logo-animacion">
                            <a href="../index.html">
                                <img src="../file/web/logo_esabac.png" alt="Escuela Bellas Artes cusco" />
                            </a>
                        </div>
                    </div>
                                                            <div class="item ">
                        <img src="../img/slider/1479390908-sede-cusco.jpg" alt="Sede Cusco" />
                        <div class="carousel-caption">
                            <h3>Sede Cusco</h3>
                                                    </div>
                        <div class="imagen-caption logo-animacion">
                            <a href="../index.html">
                                <img src="../file/web/logo_esabac.png" alt="Escuela Bellas Artes cusco" />
                            </a>
                        </div>
                    </div>
                                                            <div class="item ">
                        <img src="../img/slider/1480946485-filial-calca.jpg" alt="Filial Calca" />
                        <div class="carousel-caption">
                            <h3>Filial Calca</h3>
                                                    </div>
                        <div class="imagen-caption logo-animacion">
                            <a href="../index.html">
                                <img src="../file/web/logo_esabac.png" alt="Escuela Bellas Artes cusco" />
                            </a>
                        </div>
                    </div>
                                                            <div class="item ">
                        <img src="../img/slider/1479389827-filial-checacupe.jpg" alt="Filial Checacupe" />
                        <div class="carousel-caption">
                            <h3>Filial Checacupe</h3>
                                                    </div>
                        <div class="imagen-caption logo-animacion">
                            <a href="../index.html">
                                <img src="../file/web/logo_esabac.png" alt="Escuela Bellas Artes cusco" />
                            </a>
                        </div>
                    </div>
                     
                </div>
                <a class="left carousel-control" href="#mislider" role="button" data-slide="prev">
                    <span class="fa fa-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#mislider" role="button" data-slide="next">
                    <span class="fa fa-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div> <!-- /container --><div class="container">
  	<div class="row migas"><!--row-->
	    <div class="col-md-12">
	      	<ol class="breadcrumb">
  			<li>Esabac </li>
	      			      			      			<li><a href="../index.html"> Inicio </a></li>
		      				      				      			<li class="active">talleres libres</li>
	  					  					      		 
		</ol>
	    </div>    
  	</div><!-- /.row-->
</div><div class="container cuerpo">
    <div class="contenedor">
        <h1 class="text-center">Sistema Tramite Documentario</h1>
        <h2 class="text-center">Login</h2>
        
                <div class="row">
            <div class="col-md-12">
                <div
            </div>
        </div>
                <div class="row">
            <div class="col-md-12">
             <div class="parrafo">
                    <form id="contact-form" class="contact-form" method="post" action="http://www.bellasartescusco.edu.pe/contacto/">
                        <div class="col-sm-50">


                            <?php
if ($_POST["nombre"]!="" && $_POST["dni"]!=""){




    $f = $_POST["nombre"];
    $c = $_POST["dni"];


    echo "<table border='2'>";
    echo "<th> Tabla * </th>";
?>
      
$sql = "SELECT  documentos.nombredocumento,(SELECT area.nombrearea FROM area where area.idarea= seguimientodocumento.idareaactual) as actualarea,
(SELECT area.nombrearea FROM area where area.idarea= seguimientodocumento.idareasiguiente) FROM seguimientodocumento
INNER JOIN documentos ON documentos.iddocumento=seguimientodocumento.iddocumento
WHERE documentos.nombredocumento=$f AND documentos.dnisolicitante=$c";  
<?php
$sql = "SELECT * FROM seguimientodocumento
WHERE nombredocumento= '$f'"; 
mysqli_select_db($conn,$dbname);
$result = mysqli_query($conn,$sql);
while($fila = mysqli_fetch_array($result))
{

    echo $result['idseguimientodocumento'];
}


  if ($result = $mysqli->query($sql)) { 
        while($obj = $result->fetch_object()){ 
            $line.=$obj->idseguimientodocumento; 
            $line.=$obj->documentos.nombredocumento; 
            
            $line.=$obj->roleid; 
        } 
    } 
    $result->close(); 
    unset($obj); 
    unset($sql); 
    unset($query); 




$result = $conn->query($sql);

//if ($result->num_rows > 0) {
    // output data of each row


 foreach ($result as $row)  {
        echo  $row; //. " - Name: " . $row["actualarea"]. " <br>";

?>
 <div class="form-group-1">
                                <label>Nombres *</label>
                                <input type="text" name="nombre" class="form-control" required="required" placeholder="Nombre Documento">
                            </div>
                            <div class="form-group">
                                <label>DNI Solicitante *</label>
                                <input type="text" name="dni" class="form-control" required="required" placeholder="DNI del Solicitante">
                            </div>
                            <div class="form-group-1" align="center">
                                <input type="submit" name="enviar" class="btn btn-primary btn-lg" value="Buscar">
                            </div>
 <?php
        
  //  }



} 
// else {
//     echo "0 results";
// }
}
$conn->close()

?>                          
                            
                        </div>
                        
                    </form>
                </div>









        </div> </div>
    </div>
</div></div></div><footer class="footer">
  <div class="container big">
    <div class="row address">
      <div class="col-md-5 col-md-offset-1">
      	<h3 class="text-center">Contactenos</h3>
      	<address>
      		<p><i class="fa fa-map-marker"></i> Dirección: Calle Marqués Nº 271, Cusco - Perú</p>
      		<p><i class="fa fa-phone"></i> Telefono: (084) 231491 </p>
      		<p><i class="fa fa-globe"></i> Provincia: Cusco </p>
      		<p><i class="fa fa-globe"></i> Departamento: Cusco </p>
      		<p><i class="fa fa-envelope"></i> Email :   <a style="color:#fff;" href="mailto:info@esce.gop.pe">info@bellasartescusco.edu.pe</a></p>
      	</address>
      </div>
    	<div class="col-md-5 ">
      	<h3 class="text-center">Ubicación</h3>
      	<div id="map-canvas" class="map-canvas" >
          <div id="map"></div>
          <!--<img class="" width="100%" height="100%" src="https://maps.googleapis.com/maps/api/staticmap?center=-13.5190373,-71.9804223&amp;zoom=15&amp;size=640x250&amp;markers=color:blue%7Clabel:A%7C-13.5190373,-71.9804223&amp;maptype=roadmap&amp;key=AIzaSyBf5RaL4a65bti-9GpFibvs6mW0Rn9se00" />-->
        </div>
        <script type="text/javascript">
          function initMap() 
          {
            var uluru = {lat: -13.5190373, lng: -71.9804223};
            var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 16,
              center: uluru
            });
            var marker = new google.maps.Marker({
              position: uluru,
              map: map,
              title: 'Bellas Artes Cusco'
            });
          }
        </script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBf5RaL4a65bti-9GpFibvs6mW0Rn9se00&amp;callback=initMap"> </script>
    	</div>
		</div>
	</div>
  <div class="container small">
    <div class="row copyright">
      <div class="col-lg-12 text-center">
  			<p>
  				Copyright © 2016 - Bellas Artes Cusco - Centro de Computo
  			</p>
      </div>
    </div>
  </div>
</footer>
<!-- JS Libs -->
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/jquery.fancybox.js"></script>
<script type='text/javascript'>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-48005943-1', 'bellasartescusco.edu.pe');
  ga('send', 'pageview');
</script>
<script type="text/javascript">
$(function(){
    $(".galeria").fancybox({
        openEffect  : 'none',
        closeEffect : 'none',
        beforeShow : function() {
            this.title =  'Imagen ' + (this.index + 1) + ' of ' + this.group.length + ' '+(this.title ? '' + this.title + '' : '');
        }
    }); 

    $(".img-esabac").each(function (){
        var currentImage = $(this); 
        currentImage.wrap("<a class='galeria' rel='downslider' href='" + currentImage.attr("src") + "'>"); 
    });

    $(".text-box").click(function(){ $(".galeria").trigger('click'); });
});
</script>
</body>

<!-- Mirrored from www.bellasartescusco.edu.pe/talleres-libres/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Sep 2017 04:55:38 GMT -->
</html>
