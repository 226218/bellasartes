<div class="row-fluid" style="margin-top:0">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-align-justify"></i>
                </span>
                                                <h5>Editar Servicio</h5>
                                          </div>
                                          <div class="widget-content nopadding">
                                                <?php echo $custom_error; ?>
                                                <form action="<?php echo current_url(); ?>" id="formseguimientodocumento" method="post" class="form-horizontal" >
                                                    <?php
                                                     $iddelusuario=$this->session->userdata('id');
$datausuario = $this->seguimientodocumento_model->getUsuarios($this->session->userdata('id')); 
echo form_hidden('idseguimientodocumento',$result->idseguimientodocumento);
$datadocumento = $this->seguimientodocumento_model->getdocumentos($result->iddocumento);
$datatipodocumento = $this->seguimientodocumento_model->gettipodocumento($datadocumento->tipodocumento_id);
$dataarea = $this->seguimientodocumento_model->getarea($datausuario[0]->idarea); 


?>

 <div class="control-group">
                        <label for="iddocumento" class="control-label">Nombre Documento:<span class="required">*</span></label>
                         <div class="controls">
                                            <input id="nombredoc"  class="span6" type="text" name="nombredoc" value="<?php echo $datadocumento->nombredocumento; ?>"  readonly/>
                                             <input id="iddocumento" class="span6" type="hidden" name="iddocumento" value="<?php echo $datadocumento->iddocumento;?>"  />

                                         </div>
                                        </div>

                        
                     <div class="control-group">
                        <label for="tipodocumento" class="control-label">Nombre Tipo de Documento:<span class="required">*</span></label>
                         <div class="controls">
                                            <input id="nombretipodocumento"  class="span6" type="text" name="nombrearea1" value="<?php echo $datatipodocumento->nombretipodocumento; ?>"  readonly/>
                                            <input id="tipodocumento" class="span6" type="hidden" name="tipodocumento" value="<?php echo $datadocumento->tipodocumento_id;?>"  />

                                         </div>
                                        </div>



                    <div class="control-group">
                                            <label for="dniaprobacion" class="control-label">DNI Usuario:</label>
                                             <div class="controls">
                                           <input id="dniaprobacion" type="text" name="dniaprobacion" value="<?php echo $datausuario[0]->dni; ?>"  readonly/>
                                </div>                                                   

                     </div>
                     <div class="control-group">
                        <label for="idareaactual" class="control-label">Area Actual:<span class="required">*</span></label>
                        <div class="controls">
                                            <input id="nombrearea1"  type="text" name="nombrearea1" value="<?php echo $dataarea->nombrearea; ?>"  readonly/>
                                            <input id="idareaactual" class="span6" type="hidden" name="idareaactual" value="<?php echo $dataarea->idarea; ?>"  />
                                        </div> 
                                        </div>
  <div class="control-group">
                        <label for="idareasiguiente" class="control-label">Area Siguiente:<span class="required">*</span></label>
                            <div class="controls">

                            <select name="idareasiguiente" id="idareasiguiente">
                               <?php


  $todasareas = $this->seguimientodocumento_model->getTodasAreas(); 
foreach($todasareas as $row){ 

$valor = $row['idarea'];
$nomb = $row['nombrearea'];  
if($valor!=$dataarea->idarea)
{?>
                              <option value="<?php  echo $valor; ?>"><?php  echo $nomb; ?></option>
<?php }
else{}}
?>
                            </select>
                        </div>
                                          </div>
                                        

  <div class="control-group">
                                         
                    
                    <div class="control-group">
                        <label for="estadotramite" class="control-label">Estado:<span class="required">*</span></label>
                        <div class="controls">
                            <input id="estadotramite" type="text" name="estadotramite" value="<?php echo $result->estadotramite; ?>"  readonly/> El documento inicia en T: Tramite 
                        </div>
                    </div>
                   
                    <div class="control-group">
                        <label  class="control-label">Permiso*</label>
                        <div class="controls">
                            <select name="permiso" id="permiso">
                               <option value="0">Jefe</option>
                                  <option value="1">Secretaria</option>
                              <option value="2">Ayudante</option>
                             
                               
                            </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="fechainicio" class="control-label">fechainicio<span class="required">*</span></label>
                        <div class="controls">
                            <input id="fechainicio" type="text" name="fechainicio" value="<?php echo $result->fechainicio;
  // MySQL datetime format
?>" readonly/>
                        </div>
                    </div>
                    <div class="control-group">
                      <label for="fechafin" class="control-label">fecha fin<span class="required">*</span></label>
                        <div class="controls">
                            <input id="fechafin" type="text" name="fechafin" value="<?php $now = new DateTime(null, new DateTimeZone('America/Lima'));
echo $now->format('Y-m-d H:i:s');    // MySQL datetime format

?>" readonly/>
                        </div>
                    </div>
                    <div class="span12" style="padding: 1%; margin-left: 20">

                                        <div class="span6">
                                            <label for="descripcionarea">Observaciones:</label>
                                            <textarea class="span12" name="observaciones" id="observaciones" cols="25" rows="6" style="margin: 0px; width: 691px; height: 129px;"><?php echo $result->observaciones;
  // MySQL datetime format
?></textarea>
                                                                                  
                                        </div>
                                        

                     </div>


                                                      <div class="form-actions">
                                                      <div class="span12">
                                                            <div class="span6 offset3">
                                                            <button type="submit" class="btn btn-primary"><i class="icon-ok icon-white"></i> Enviar</button>
                                                            <a href="<?php echo base_url()?>index.php/seguimientodocumento/" id="btnAdicionar" class="btn"><i class="icon-arrow-left"></i> Volver</a>
                                                            </div>
                                                      </div>
                                                      </div>
                                                </form>
                                          </div>
                                    </div>
                              </div>
</div>

<link rel="stylesheet" href="<?php echo base_url();?>js/jquery-ui/css/smoothness/jquery-ui-1.9.2.custom.css" />
<script type="text/javascript" src="<?php echo base_url()?>js/jquery-ui/js/jquery-ui-1.9.2.custom.js"></script>
<script src="<?php echo base_url();?>js/maskmoney.js"></script>
<script type="text/javascript">
$(document).ready(function(){

 $("#tipodocumento").autocomplete({
            source: "<?php echo base_url(); ?>index.php/seguimientodocumento/autoCompleteTipoDocumento",
            minLength: 1,
            select: function( event, ui ) {

                 $("#tipodocumento_id").val(ui.item.id);
                

            }
      });





          $(".money").maskMoney();
           $('#formseguimientodocumento').validate({
            rules :{
                    tipodocumento:{ required: true},
                  nombredocumento:{ required: true}
            },
            messages:{
                    tipodocumento :{ required: 'Campo Requerido.'},
                  nombredocumento :{ required: 'Campo Requerido.'}
            },

            errorClass: "help-inline",
            errorElement: "span",
            highlight:function(element, errorClass, validClass) {
                $(element).parents('.control-group').addClass('error');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).parents('.control-group').removeClass('error');
                $(element).parents('.control-group').addClass('success');
            }
           }); 
      });
</script>



