
<?php

if(!$results){?>
	<div class="widget-box">
     <div class="widget-title">
        <span class="icon">
            <i class="icon-tags"></i>
         </span>
        <h5>Tramite Documento</h5>

     </div>

<div class="widget-content nopadding">


<table class="table table-bordered ">
    <thead>
        <tr style="backgroud-color: #2D335B">
            <th>#</th>
            <th>Fecha de Venta</th>
            <th>Area</th>
            <th>Facturado</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>

        <tr>
            <td colspan="6">Ningun Tramite de Documento Registrado</td>
        </tr>
    </tbody>
</table>
</div>
</div>
<?php } else{
$iddelusuario=$this->session->userdata('id');
$datausuario = $this->seguimientodocumento_model->getUsuarios($this->session->userdata('id'));


  ?>


<div class="widget-box">
     <div class="widget-title">
        <span class="icon">
            <i class="icon-tags"></i>
         </span>
        <h5>Tramite Documento</h5>

     </div>

<div class="widget-content nopadding">


<table class="table table-bordered ">
    <thead>
        <tr style="backgroud-color: #2D335B">
            <th>#</th>
            <th>Nombre Documento</th>
            <th>Tipo de Documento</th>
            <th>Nombre Completo Solicitante</th>
            <th>Area Actual</th>
            <th>Area Siguiente</th>
            <th>Estado</th>
            <th>Accion</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($results as $r) {
          if($r->idareaactual==$datausuario[0]->idarea)
          {
            $areaact = $this->seguimientodocumento_model->getarea($r->idareaactual);
             $areasec = $this->seguimientodocumento_model->getarea($r->idareasiguiente);

                 echo '<tr>';
            echo '<td>'.$r->idseguimientodocumento.'</td>';
             echo '<td>'.$r->nombredocumento.'</td>';
            echo '<td>'.$r->nombretipodocumento.'</td>';
             echo '<td>'.$r->nombressolicitante.' '.$r->apellidopaternosolicitante.' '.$r->apellidomaternosolicitante.'</td>';
                  
             echo '<td>'.$areaact->nombrearea.'</td>';

             @$nose=$areasec->idarea;


            $permisoenvio= $r->idareasiguiente;
@$permisocargo= $datausuario[0]->permisos_id;


           if($nose!=0)
             {
        
            echo '<td>'  .$areasec->nombrearea. '</td>';
            }

            if($nose==0)
             {
            
            echo '<td> - </td>';
            }

 if($r->estadotramite=='T')
             {

               echo '<td width="50"> <img width="100" height="50" src="'.base_url().'assets/img/alert.png"></td>';

             }
            
             if($r->estadotramite=='F')
             {
 echo '<td width="50"> <img width="100" height="50" src="'.base_url().'assets/img/check.png"></td>';

             }



            echo '<td>';
          if($permisoenvio==0){ 


if($permisocargo==1 ){

           if($this->permission->checkPermission($this->session->userdata('permiso'),'eSeguimiento') ){
                echo '<a style="margin-right: 1%" href="'.base_url().'index.php/seguimientodocumento/enviar/'.$r->idseguimientodocumento.'" class="btn tip-top" title="Enviar Seguimiento"><i class="icon-pencil icon-white"></i></a>'; 
            }
          }

if($permisocargo==2 ){


if($this->permission->checkPermission($this->session->userdata('permiso'),'eSeguimiento')){
                echo '<a style="margin-right: 1%" href="'.base_url().'index.php/seguimientodocumento/enviar/'.$r->idseguimientodocumento.'" class="btn tip-top" title="Enviar Seguimiento"><i class="icon-pencil icon-white"></i></a>'; 
          
          }
}

          if($permisocargo==3 ){

if(@$r->permiso==1 || $r->permiso==2 )
{
if($this->permission->checkPermission($this->session->userdata('permiso'),'eSeguimiento')){
                echo '<a style="margin-right: 1%" href="'.base_url().'index.php/seguimientodocumento/enviar/'.$r->idseguimientodocumento.'" class="btn tip-top" title="Enviar Seguimiento"><i class="icon-pencil icon-white"></i></a>'; 
            }
          }
        }
    if($permisocargo==4 ){

if(@$r->permiso==2 )
{
if($this->permission->checkPermission($this->session->userdata('permiso'),'eSeguimiento')){
                echo '<a style="margin-right: 1%" href="'.base_url().'index.php/seguimientodocumento/enviar/'.$r->idseguimientodocumento.'" class="btn tip-top" title="Enviar Seguimiento"><i class="icon-pencil icon-white"></i></a>'; 
            }
          }
        }

}
          
            if($this->permission->checkPermission($this->session->userdata('permiso'),'vSeguimientodocumento')){
                echo '<a style="margin-right: 1%" href="'.base_url().'index.php/seguimientodocumento/visualizar/'.$r->idseguimientodocumento.'" class="btn tip-top" title="Ver mas detalles"><i class="icon-eye-open"></i></a>'; 
            }
if($permisocargo==1 ){      

            if($this->permission->checkPermission($this->session->userdata('permiso'),'eSeguimientodocumento')){
                echo '<a style="margin-right: 1%" href="'.base_url().'index.php/seguimientodocumento/editar/'.$r->idseguimientodocumento.'" class="btn btn-info tip-top" title="Editar venta"><i class="icon-pencil icon-white"></i></a>'; 
            }
            
            //Borrar
            //if($this->permission->checkPermission($this->session->userdata('permiso'),'dSeguimientodocumento')){
              //  echo '<a href="#modal-excluir" role="button" data-toggle="modal" Seguimientodocumento="'.$r->idseguimientodocumento.'" class="btn btn-danger tip-top" title="Eliminar Venta"><i class="icon-remove icon-white"></i></a>'; 
            //}
          


          }

            echo '</td>';
            echo '</tr>';
        }}?>
        <tr>
            
        </tr>
    </tbody>
</table>
</div>
</div>
	
<?php echo $this->pagination->create_links();}?>


<!-- Modal -->
<div id="modal-excluir" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <form action="<?php echo base_url() ?>index.php/seguimientodocumento/excluir" method="post" >
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h5 id="myModalLabel">Eliminar Venta</h5>
  </div>
  <div class="modal-body">
    <input type="hidden" id="idSeguimientodocumento" name="id" value="" />
    <h5 style="text-align: center">Desea realmente eliminar esta Venta?</h5>
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
        
        var Seguimientodocumento = $(this).attr('Seguimientodocumento');
        $('#idSeguimientodocumento').val(Seguimientodocumento);

    });

});

</script>