<div class="row-fluid" style="margin-top:0">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-align-justify"></i>
                </span>
                <h5>Registro de Servicio</h5>
            </div>
            <div class="widget-content nopadding">
                 <?php if($custom_error == true){ ?>
                                <div class="span12 alert alert-danger" id="divInfo" style="padding: 1%;">Datos incompletos, comprobar los campos con un asterisco o Area correctamente seleccionado y responsable.</div>
                                <?php } ?>
                <?php echo $custom_error; ?>
                <form action="<?php echo current_url(); ?>" id="formDocumento" enctype="multipart/form-data" method="post" class="form-horizontal" >
                     <div class="control-group">
                        <label for="tipodocumento" class="control-label">Tipo de Documento:<span class="required">*</span></label>
                         <div class="controls">
                                            <input id="tipodocumento" class="span6" type="text" name="tipodocumento" value=""  />
                                            <input id="tipodocumento_id" class="span6" type="hidden" name="tipodocumento_id" value=""  />
                                         </div>
                                        </div>
                    <div class="control-group">
                        <label for="nombredocumento" class="control-label"><span class="required">Nombre Documento:*</span></label>
                        <div class="controls">
                            <input id="nombredocumento" type="text" name="nombredocumento" value="<?php echo set_value('nombredocumento'); ?>"  />
                        </div>
                    </div>
 <div class="span12" style="padding: 1%; margin-left: 20">

                                        <div class="span6">
                                            <label for="descripciondocumento">Descripcion Documento:</label>
                                            <textarea class="span12" name="descripciondocumento" id="descripciondocumento" cols="25" rows="6" style="margin: 0px; width: 691px; height: 129px;"> </textarea>
                                                                                  
                                        </div>
                                        

                     </div>

                    
                    <div class="control-group">
                        <label for="estado" class="control-label">Estado:<span class="required">*</span></label>
                        <div class="controls">
                            <input id="estado" type="text" name="estado" value="<?php echo "T"; ?>"  readonly/> El documento inicia en T: Tramite 
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="dnisolicitante" class="control-label"><span class="required">DNI del Solicitante*</span></label>
                        <div class="controls">
                            <input id="dnisolicitante" type="text" name="dnisolicitante" value="<?php echo set_value('dnisolicitante'); ?>"  />
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="emailsolicitante" class="control-label">E-mail del Solicitante</label>
                        <div class="controls">
                            <input id="emailsolicitante" type="text" name="emailsolicitante" value="<?php echo set_value('emailsolicitante'); ?>"  />
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="apellidopaternosolicitante" class="control-label">Apellido Paterno del Solicitante<span class="required">*</span></label>
                        <div class="controls">
                            <input id="apellidopaternosolicitante" type="text" name="apellidopaternosolicitante" value="<?php echo set_value('apellidopaternosolicitante'); ?>"  />
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="apellidomaternosolicitante" class="control-label"><span class="required">Apellido Materno del Solicitante*</span></label>
                        <div class="controls">
                            <input id="apellidomaternosolicitante" type="text" name="apellidomaternosolicitante" value="<?php echo set_value('apellidomaternosolicitante'); ?>"  />
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="nombressolicitante" class="control-label">Nombres del Solicitante</label>
                        <div class="controls">
                            <input id="nombressolicitante" type="text" name="nombressolicitante" value="<?php echo set_value('nombressolicitante'); ?>"  />
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="fechainicio" class="control-label">Fecha de Inicio del Tramite<span class="required">*</span></label>
                        <div class="controls">
                            <input id="fechainicio" type="text" name="fechainicio" value="<?php $now = new DateTime(null, new DateTimeZone('America/Lima'));
echo $now->format('Y-m-d H:i:s');    // MySQL datetime format
?>" readonly/>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <input id="fechafin" type="hidden" name="fechafin" value="<?php $now = new DateTime(null, new DateTimeZone('America/Lima'));
echo $now->format('Y-m-d H:i:s');    // MySQL datetime format
?>" readonly/>
                        </div>
                    </div>


                     <div class="control-group">
                        <div class="controls">
                            <input id="data" type="hidden" name="data" value="<?php $now = new DateTime(null, new DateTimeZone('America/Lima'));
echo $now->format('Y-m-d');    // MySQL datetime format
?>" readonly/>
                        </div>
                    </div>
                    <div class="span12" style="padding: 1%; margin-left: 20">

                                        <div class="span6">
                                            <label for="descripcionarea">Observaciones:</label>
                                            <textarea class="span12" name="observaciones" id="observaciones" cols="25" rows="6" style="margin: 0px; width: 691px; height: 129px;"> </textarea>
                                                                                  
                                        </div>
                                        

                     </div>


                       <div class="control-group">
                        <label for="preco" class="control-label">Archivo*</label>
                        <div class="controls">
                            <input id="archivo" type="file" name="userfile" accept=".png, .jpg, .jpeg, .pdf, .docx, .doc"/> (pdf|png|jpg|jpeg|doc|docx)
                        </div>
                    </div>


                    <div class="form-actions">
                        <div class="span12">
                            <div class="span6 offset3">
                                <button type="submit" class="btn btn-success"><i class="icon-plus icon-white"></i> Agregar</button>
                                <a href="<?php echo base_url() ?>index.php/documentos" id="btnAdicionar" class="btn"><i class="icon-arrow-left"></i> Volver</a>
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
            source: "<?php echo base_url(); ?>index.php/documentos/autoCompleteTipoDocumento",
            minLength: 1,
            select: function( event, ui ) {

                 $("#tipodocumento_id").val(ui.item.id);
                

            }
      });




          $(".money").maskMoney();
           $('#formDocumento').validate({
            rules :{
                    tipodocumento:{ required: true},
                  nombredocumento:{ required: true},
            },
            messages:{
                    tipodocumento :{ required: 'Campo Requerido.'},
                  nombredocumento :{ required: 'Campo Requerido.'},
            },
   errorClass: "help-inline",
            errorElement: "span",
            highlight:function(element, errorClass, validClass) {
                $(element).parents('.control-group').addClass('error');
                $(element).parents('.control-group').removeClass('success');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).parents('.control-group').removeClass('error');
                $(element).parents('.control-group').addClass('success');
            }
           }); 


           $(".datepicker" ).datepicker({ dateFormat: 'dd/mm/yy' });
      });
</script>




                                    
