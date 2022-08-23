
<!DOCTYPE html>
<html lang="en">
<head>
<title>STD O.S</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/matrix-style.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/matrix-media.css" />
<link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/fullcalendar.css" /> 

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
<script type="text/javascript"  src="<?php echo base_url();?>assets/js/jquery-1.10.2.min.js"></script>

</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="">STD O.S</a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
   
    <li class=""><a title="" href="<?php echo base_url();?>index.php/mapos/minhaConta"><i class="icon icon-star"></i> <span class="text">Mi Cuenta</span></a></li>
    <li class=""><a title="" href="<?php echo base_url();?>index.php/mapos/sair"><i class="icon icon-share-alt"></i> <span class="text">Sair del Sistema</span></a></li>
  </ul>
</div>

<!--start-top-serch-->
<div id="search">
  <form action="<?php echo base_url()?>index.php/mapos/pesquisar">
    <input type="text" name="termo" placeholder="Buscar..."/>
    <button type="submit"  class="tip-bottom" title="Buscar"><i class="icon-search icon-white"></i></button>
    
  </form>
</div>
<!--close-top-serch--> 

<!--sidebar-menu-->

<div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-list"></i> Menu</a>
  <ul>


    <li class="<?php if(isset($menuPainel)){echo 'active';};?>"><a href="<?php echo base_url()?>"><i class="icon icon-home"></i> <span>Dashboard</span></a></li>
    
    <?php if($this->permission->checkPermission($this->session->userdata('permiso'),'vArea')){ ?>
        <li class="<?php if(isset($menuarea)){echo 'active';};?>"><a href="<?php echo base_url()?>index.php/area"><i class="icon icon-group"></i> <span>Area</span></a></li>
    <?php } ?>
    
    <?php if($this->permission->checkPermission($this->session->userdata('permiso'),'vTipodocumento')){ ?>
        <li class="<?php if(isset($menutipodocumento)){echo 'active';};?>"><a href="<?php echo base_url()?>index.php/tipodocumento"><i class="icon icon-barcode"></i> <span>Tipo de Documento</span></a></li>
    <?php } ?>
    
    <?php if($this->permission->checkPermission($this->session->userdata('permiso'),'vDocumento')){ ?>
        <li class="<?php if(isset($menudocumentos)){echo 'active';};?>"><a href="<?php echo base_url()?>index.php/documentos"><i class="icon icon-briefcase"></i> <span>Documentos</span></a></li>
    <?php } ?>

  

    <?php if($this->permission->checkPermission($this->session->userdata('permiso'),'vSeguimientodocumento')){ ?>
        <li class="<?php if(isset($menuseguimientodocumento)){echo 'active';};?>"><a href="<?php echo base_url()?>index.php/seguimientodocumento"><i class="icon icon-retweet"></i> <span>Tramite Documentario</span></a></li>
    <?php } ?>
   

 

    <?php if($this->permission->checkPermission($this->session->userdata('permiso'),'rArea') || $this->permission->checkPermission($this->session->userdata('permiso'),'rTipodocumento') || $this->permission->checkPermission($this->session->userdata('permiso'),'rDocumento') || $this->permission->checkPermission($this->session->userdata('permiso'),'rSeguimientodocumento')){ ?>
        
        <li class="submenu <?php if(isset($menuRelatorios)){echo 'active open';};?>" >
          <a href="#"><i class="icon icon-list-alt"></i> <span>Informes</span> <span class="label"><i class="icon-chevron-down"></i></span></a>
          <ul>

            <?php if($this->permission->checkPermission($this->session->userdata('permiso'),'rArea')){ ?>
                <li><a href="<?php echo base_url()?>index.php/relatorios/area">Area</a></li>
            <?php } ?>
            <?php if($this->permission->checkPermission($this->session->userdata('permiso'),'rTipodocumento')){ ?>
                <li><a href="<?php echo base_url()?>index.php/relatorios/tipodocumento">Tipo de Documento</a></li>
            <?php } ?>
            <?php if($this->permission->checkPermission($this->session->userdata('permiso'),'rDocumento')){ ?>
                <li><a href="<?php echo base_url()?>index.php/relatorios/documentos">Documentos</a></li>
            <?php } ?>
            
            <?php if($this->permission->checkPermission($this->session->userdata('permiso'),'rSeguimientodocumento')){ ?>
                <li><a href="<?php echo base_url()?>index.php/relatorios/seguimientodocumento">Tramite Documentario</a></li>
            <?php } ?>
            
            
          </ul>
        </li>

    <?php } ?>

    <?php if($this->permission->checkPermission($this->session->userdata('permiso'),'cUsuario')  || $this->permission->checkPermission($this->session->userdata('permiso'),'cEmitente') || $this->permission->checkPermission($this->session->userdata('permiso'),'cpermiso') || $this->permission->checkPermission($this->session->userdata('permiso'),'cBackup')){ ?>
        <li class="submenu <?php if(isset($menuConfiguracoes)){echo 'active open';};?>">
          <a href="#"><i class="icon icon-cog"></i> <span>Configuraciones</span> <span class="label"><i class="icon-chevron-down"></i></span></a>
          <ul>
            <?php if($this->permission->checkPermission($this->session->userdata('permiso'),'cUsuario')){ ?>
                <li><a href="<?php echo base_url()?>index.php/usuarios">Usuarios</a></li>
            <?php } ?>
            <!--<?php if($this->permission->checkPermission($this->session->userdata('permiso'),'cEmitente')){ ?>
                <li><a href="<?php echo base_url()?>index.php/mapos/emitente">Empresa</a></li>
            <?php } ?>-->
            <?php if($this->permission->checkPermission($this->session->userdata('permiso'),'cpermiso')){ ?>
                <li><a href="<?php echo base_url()?>index.php/permisos">Permisos</a></li>
            <?php } ?>
            <?php if($this->permission->checkPermission($this->session->userdata('permiso'),'cBackup')){ ?>
                <li><a href="<?php echo base_url()?>index.php/mapos/backup">Backup</a></li>
            <?php } ?>
 
          </ul>
        </li>
    <?php } ?>
    
    
  </ul>
</div>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="<?php echo base_url()?>" title="Dashboard" class="tip-bottom"><i class="icon-home"></i> Dashboard</a> <?php if($this->uri->segment(1) != null){?><a href="<?php echo base_url().'index.php/'.$this->uri->segment(1)?>" class="tip-bottom" title="<?php echo ucfirst($this->uri->segment(1));?>"><?php echo ucfirst($this->uri->segment(1));?></a> <?php if($this->uri->segment(2) != null){?><a href="<?php echo base_url().'index.php/'.$this->uri->segment(1).'/'.$this->uri->segment(2) ?>" class="current tip-bottom" title="<?php echo ucfirst($this->uri->segment(2)); ?>"><?php echo ucfirst($this->uri->segment(2));} ?></a> <?php }?></div>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
          <?php if($this->session->flashdata('error') != null){?>
                            <div class="alert alert-danger">
                              <button type="button" class="close" data-dismiss="alert">&times;</button>
                              <?php echo $this->session->flashdata('error');?>
                           </div>
                      <?php }?>

                      <?php if($this->session->flashdata('success') != null){?>
                            <div class="alert alert-success">
                              <button type="button" class="close" data-dismiss="alert">&times;</button>
                              <?php echo $this->session->flashdata('success');?>
                           </div>
                      <?php }?>
                          
                      <?php if(isset($view)){echo $this->load->view($view);}?>


      </div>
    </div>
  </div>
</div>
<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 2018 &copy; Tramite Documentario O.S.</div>
</div>
<!--end-Footer-part-->


<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script> 
<script src="<?php echo base_url();?>assets/js/matrix.js"></script> 


</body>
</html>







