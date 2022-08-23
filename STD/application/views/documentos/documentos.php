<link rel="stylesheet" href="<?php echo base_url();?>js/jquery-ui/css/smoothness/jquery-ui-1.9.2.custom.css" />
<script type="text/javascript" src="<?php echo base_url()?>js/jquery-ui/js/jquery-ui-1.9.2.custom.js"></script>

<div class="span12" style="margin-left: 0">
    <form method="get" action="<?php echo current_url(); ?>">
        <?php if($this->permission->checkPermission($this->session->userdata('permiso'),'aDocumento')){ ?>
             <div class="span3">
                    <a href="<?php echo base_url()?>index.php/documentos/adicionar" class="btn btn-success"><i class="icon-plus icon-white"></i> Agregar Documento</a>
 </div>  
        <?php } ?>
        
        <div class="span5">
            <input type="text" name="nombredoc"  id="nombredoc"  placeholder="Escriba el nombre del documento para buscar" class="span12" value="<?php echo $this->input->get('nombredoc'); ?>" >        
        </div>
        <div class="span3">
            <input type="text" name="dnisolicitan"  id="dnisolicitan"  placeholder="Escriba el dni del solicitante para buscar" class="span12" value="<?php echo $this->input->get('dnisolicitan'); ?>">
        </div>
        <div class="span1">
            <button class="span12 btn"> <i class="icon-search"></i> </button>
        </div>
    </form>
</div>


<?php

if(!$results){?>

    <div class="widget-box">
     <div class="widget-title">
        <span class="icon">
            <i class="icon-wrench"></i>
         </span>
        <h5>Documentos</h5>

     </div>

<div class="widget-content nopadding">


<table class="table table-bordered ">
    <thead>
        <tr style="backgroud-color: #2D335B">
            <th>#</th>
             <th>Nombre Documento</th>
            <th>Nombre Completo Solicitante</th>
            <th>Tipo de Documento</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>

        <tr>
            <td colspan="5">Ningún Documento Registrado</td>
        </tr>
    </tbody>
</table>
</div>
</div>



<?php }
else{ 

$iddelusuario=$this->session->userdata('id');
$datausuario = $this->documentos_model->getUsuarios($this->session->userdata('id'));

  ?>

<div class="widget-box">
     <div class="widget-title">
        <span class="icon">
            <i class="icon-wrench"></i>
         </span>
        <h5>Documentos</h5>

     </div>

<div class="widget-content nopadding">


<table class="table table-bordered">
    <thead>
        <tr style="backgroud-color: #2D335B">
            <th>#</th>
             <th>Nombre Documento</th>
            <th>Nombre Completo Solicitante</th>
            <th>Tipo de Documento</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>
        <?php 


        foreach ($results as $r) {
          
            echo '<tr>';
            echo '<td>'.$r->iddocumento.'</td>';
            echo '<td>'.$r->nombredocumento.'</td>';
            echo '<td>'.$r->nombressolicitante.' '.$r->apellidopaternosolicitante.' '.$r->apellidomaternosolicitante.'</td>';
            echo '<td>'.$r->nombretipodocumento.'</td>';
            echo '<td>'; 

            if($r->archivodocumento!=null)
            {
            if($this->permission->checkPermission($this->session->userdata('permiso'),'vDocumento')){
                        echo '<a class="btn btn-inverse tip-top" style="margin-right: 1%" target="_blank" href="'.$r->archivodocumento.'" class="btn tip-top" title="Imprimir"><i class="icon-print"></i></a>'; 
            }
            if($this->permission->checkPermission($this->session->userdata('permiso'),'vDocumento')){
                echo '<a href="'.base_url().'index.php/documentos/download/'.$r->iddocumento.'" class="btn tip-top" style="margin-right: 1%" title="Download"><i class="icon-download-alt"></i></a>'; 
            }
            }


            if($this->permission->checkPermission($this->session->userdata('permiso'),'vDocumento')){
                echo '<a style="margin-right: 1%" href="'.base_url().'index.php/documentos/visualizar/'.$r->iddocumento.'"  class="btn tip-top" title="Ver mas detalles"><i class="icon-eye-open"></i></a>'; 
            
            }
            if($this->permission->checkPermission($this->session->userdata('permiso'),'eDocumento')){
                echo '<a style="margin-right: 1%" href="'.base_url().'index.php/documentos/editar/'.$r->iddocumento.'" class="btn btn-info tip-top" title="Editar Observaciones de Documento"><i class="icon-pencil icon-white"></i></a>'; 
            }
            //Borrar
            //if($this->permission->checkPermission($this->session->userdata('permiso'),'dDocumento')){
              //  echo '<a href="#modal-excluir" role="button" data-toggle="modal" Documento="'.$r->iddocumento.'" class="btn btn-danger tip-top" title="Eliminar Servicio"><i class="icon-remove icon-white"></i></a>'; 
            //}    
            echo '</td>';
            echo '</tr>';
        } ?>
        <tr>
            
        </tr>
    </tbody>
</table>
</div>
</div>
	
        



<?php echo $this->pagination->create_links();}?>


<!-- Modal -->
<div id="modal-excluir" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <form action="<?php echo base_url() ?>index.php/documentos/excluir" method="post" >
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h5 id="myModalLabel">Eliminar Servicio</h5>
  </div>
  <div class="modal-body">
    <input type="hidden" id="idDocumento" name="id" value="" />
    <h5 style="text-align: center">Desea realmente eliminar este servicio?</h5>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
    <button class="btn btn-danger">Eliminar</button>
  </div>
  </form>
</div>






<script type="text/javascript">
$(document).ready(function(){

   $(document).on('click', 'a', function(event) {
        
        var Documento = $(this).attr('Documento');
        $('#idDocumento').val(Documento);

    });

});

</script>