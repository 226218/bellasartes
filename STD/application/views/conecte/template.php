
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Conectar - Área de Area</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/matrix-style.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/matrix-media.css" />
    <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/fullcalendar.css" /> 


    <link href="<?php echo base_url();?>assets/css/bootstrap-responsive.min.css" rel="stylesheet">
    <script type="text/javascript"  src="<?php echo base_url();?>assets/js/jquery-1.10.2.min.js"></script>
  </head>

  <body>

    <!--Header-part-->
    <div id="header">
      <h1><a href="dashboard.html">RMA O.S</a></h1>
    </div>
    <!--close-Header-part--> 

    <!--top-Header-menu-->
    <div id="user-nav" class="navbar navbar-inverse">
      <ul class="nav">
        <li class=""><a title="" href="<?php echo base_url()?>index.php/conecte/conta"><i class="icon icon-star"></i> <span class="text"> Mi Cuenta</span></a></li>
        <li class=""><a title="" href="<?php echo base_url()?>index.php/conecte/sair"><i class="icon icon-share-alt"></i> <span class="text"> Salir</span></a></li>
      </ul>
    </div>


    <div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-list"></i> Menu</a>
      <ul>
        <li class="<?php if(isset($menuPainel)){echo 'active';};?>"><a href="<?php echo base_url()?>index.php/conecte/painel"><i class="icon icon-home"></i> <span>Panel</span></a></li>
        <li class="<?php if(isset($menuConta)){echo 'active';};?>"><a href="<?php echo base_url()?>index.php/conecte/conta"><i class="icon icon-star"></i> <span>Mi Cuenta</span></a></li>
        <li class="<?php if(isset($menuseguimientodocumento)){echo 'active';};?>"><a href="<?php echo base_url()?>index.php/conecte/compras"><i class="icon icon-shopping-cart"></i> <span>Compras</span></a></li>
        <li class=""><a href="<?php echo base_url()?>index.php/conecte/sair"><i class="icon icon-share-alt"></i> <span>Salir</span></a></li>
        
      </ul>
    </div>


   
    <div id="content">
      <div id="content-header">
        <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
      </div>
 
      <div class="container-fluid">
        <div class="row-fluid">
          
          <div class="span12">
            
              <?php if(isset($output)){ $this->load->view($output);} ?>            
            
          </div>
        </div>
      
      </div>
    </div>
    <!--Footer-part-->
    <div class="row-fluid">
      <div id="footer" class="span12"> 2015 &copy; RMA O.S</div>
    </div>

    <!-- javascript
    ================================================== -->

    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script> 


  </body>
</html>
