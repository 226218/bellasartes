<?php if($this->permission->checkPermission($this->session->userdata('permiso'),'aTipodocumento')){ ?>
    <a href="<?php echo base_url();?>index.php/tipodocumento/adicionar" class="btn btn-success"><i class="icon-plus icon-white"></i> Agregar Tipo de Documento</a>
<?php } ?>

<?php

if(!$results){?>
	<div class="widget-box">
     <div class="widget-title">
        <span class="icon">
            <i class="icon-barcode"></i>
         </span>
        <h5>Tipo de Documento</h5>

     </div>

<div class="widget-content nopadding">


<table class="table table-bordered ">
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre de Tipo de Documento</th>
            <th>Descripcion de tipo de documento</th>
            <th>Imagen</th>
        </tr>
    </thead>
    <tbody>

        <tr>
            <td colspan="5">Ningún Tipo de Documento Registrado</td>
        </tr>
    </tbody>
</table>
</div>
</div>

<?php } else{?>

<div class="widget-box">
     <div class="widget-title">
        <span class="icon">
            <i class="icon-barcode"></i>
         </span>
        <h5>Tipo de Documento</h5>

     </div>

<div class="widget-content nopadding">


<table class="table table-bordered ">
    <thead>
        <tr style="backgroud-color: #2D335B">
            <th>#</th>
            <th>Nombre</th>
            <th>Descripcion Documento</th>
            <th>Imagen</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($results as $r) {
            echo '<tr>';
            echo '<td>'.$r->idtipodocumento.'</td>';
            echo '<td width="200">'.$r->nombretipodocumento.'</td>';
            echo '<td width="800">'.$r->descripciontipodocumento.'</td>';
            echo '<td width="400"> <img width="200" height="300" src="'.$r->imagen.'"></td>';
            
            echo '<td>';
            if($this->permission->checkPermission($this->session->userdata('permiso'),'vTipodocumento')){
                echo '<a style="margin-right: 1%" href="'.base_url().'index.php/tipodocumento/visualizar/'.$r->idtipodocumento.'" class="btn tip-top" title="Visualizar Tipo de Documento"><i class="icon-eye-open"></i></a>  '; 
            }
            if($this->permission->checkPermission($this->session->userdata('permiso'),'eTipodocumento')){
                echo '<a style="margin-right: 1%" href="'.base_url().'index.php/tipodocumento/editar/'.$r->idtipodocumento.'" class="btn btn-info tip-top" title="Editar Tipo de Documento"><i class="icon-pencil icon-white"></i></a>'; 
            }
            if($this->permission->checkPermission($this->session->userdata('permiso'),'dTipodocumento')){
                echo '<a href="#modal-excluir" role="button" data-toggle="modal" Tipodocumento="'.$r->idtipodocumento.'" class="btn btn-danger tip-top" title="Eliminar Tipo de Documento"><i class="icon-remove icon-white"></i></a>'; 
            }
                     
            echo '</td>';
            echo '</tr>';
        }?>
        <tr>
            
        </tr>
    </tbody>
</table>
</div>
</div>
	
<?php echo $this->pagination->create_links();}?>



<!-- Modal -->
<div id="modal-excluir" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <form action="<?php echo base_url() ?>index.php/tipodocumento/excluir" method="post" >
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h5 id="myModalLabel">Eliminar Tipo de Documento</h5>
  </div>
  <div class="modal-body">
    <input type="hidden" id="idTipodocumento" name="id" value="" />
    <h5 style="text-align: center">Desea realmente eliminar este Tipo de Documento?</h5>
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
        
        var Tipodocumento = $(this).attr('Tipodocumento');
        $('#idTipodocumento').val(Tipodocumento);

    });

});

</script>