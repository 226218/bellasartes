<!--[if lt IE 9]><script language="javascript" type="text/javascript" src="<?php echo base_url();?>js/dist/excanvas.min.js"></script><![endif]-->

<script language="javascript" type="text/javascript" src="<?php echo base_url();?>js/dist/jquery.jqplot.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>js/dist/jquery.jqplot.min.css" />

<script type="text/javascript" src="<?php echo base_url();?>js/dist/plugins/jqplot.pieRenderer.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/dist/plugins/jqplot.donutRenderer.min.js"></script>

<!--Action boxes-->
  <div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
        <?php if($this->permission->checkPermission($this->session->userdata('permiso'),'vArea')){ ?>
            <li class="bg_lb"> <a href="<?php echo base_url()?>index.php/area"> <i class="icon-group"></i> Areas</a> </li>
        <?php } ?>
        <?php if($this->permission->checkPermission($this->session->userdata('permiso'),'vTipodocumento')){ ?>
            <li class="bg_lg"> <a href="<?php echo base_url()?>index.php/tipodocumento"> <i class="icon-barcode"></i> Tipos de Documentos</a> </li>
        <?php } ?>
        <?php if($this->permission->checkPermission($this->session->userdata('permiso'),'vDocumento')){ ?>
            <li class="bg_ly"> <a href="<?php echo base_url()?>index.php/documentos"> <i class="icon-briefcase"></i> Documentos</a> </li>
        <?php } ?>
        
        <?php if($this->permission->checkPermission($this->session->userdata('permiso'),'vSeguimientodocumento')){ ?>
            <li class="bg_ls"> <a href="<?php echo base_url()?>index.php/seguimientodocumento"><i class="icon-retweet"></i> Tramite Documentario</a></li>
        <?php } ?>

        
        
        
        
        

      </ul>
    </div>
  </div>  
<!--End-Action boxes-->  



<div class="row-fluid" style="margin-top: 0">
    
    <div class="span12">
        
        <div class="widget-box">
            <div class="widget-title"><span class="icon"><i class="icon-signal"></i></span><h5>Tipos de Documento</h5></div>
            <div class="widget-content">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre Tipo de Documento</th>
                            <th>Descripcion Tipo de Documento</th>
                            <th>Imagen</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        if($tipodocumento != null){
                            foreach ($tipodocumento as $p) {
                                echo '<tr>';
                                echo '<td>'.$p->idtipodocumento.'</td>';
                                echo '<td>'.$p->nombretipodocumento.'</td>';
                                echo '<td>'.$p->descripciontipodocumento.'</td>';
                                echo '<td> <img width="300" height="600" src="'.$p->imagen.'"></td>';
                                echo '<td>';
                                if($this->permission->checkPermission($this->session->userdata('permiso'),'eTipodocumento')){
                                    echo '<a href="'.base_url().'index.php/tipodocumento/editar/'.$p->idtipodocumento.'" class="btn btn-info"> <i class="icon-pencil" ></i> </a>  '; 
                                }
                                echo '</td>';
                                echo '</tr>';
                            }
                        }
                        else{
                            echo '<tr><td colspan="3">Ningún Tipo de Documento Registrado.</td></tr>';
                        }    

                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>



  



<div class="row-fluid" style="margin-top: 0">

    <div class="span12">
        
        <div class="widget-box">
            <div class="widget-title"><span class="icon"><i class="icon-signal"></i></span><h5>Estadísticas del Sistema</h5></div>
            <div class="widget-content">
                <div class="row-fluid">           
                    <div class="span12">
                        <ul class="site-stats">
                            <li class="bg_lh"><i class="icon-group"></i> <strong><?php echo $this->db->count_all('area');?></strong> <small>Areas</small></li>
                            <li class="bg_lh"><i class="icon-barcode"></i> <strong><?php echo $this->db->count_all('tipodocumento');?></strong> <small>Tipos de Documentos </small></li>
                            <li class="bg_lh"><i class="icon-briefcase"></i> <strong><?php echo $this->db->count_all('documentos');?></strong> <small>Documentos</small></li>
                          

                        </ul>
                 
                    </div>
            
                </div>
            </div>
        </div>
    </div>
</div>



<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>






    
 
</script>

