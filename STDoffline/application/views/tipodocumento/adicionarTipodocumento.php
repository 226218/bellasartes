<div class="row-fluid" style="margin-top:0">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-align-justify"></i>
                </span>
                <h5>Registrar Tipo de Documento</h5>
            </div>
            <div class="widget-content nopadding">
                <?php echo $custom_error; ?>
                <form action="<?php echo current_url(); ?>" id="formTipodocumento"  enctype="multipart/form-data" method="post" class="form-horizontal" >
                     <div class="control-group">
                        <label for="nombretipodocumento" class="control-label">Tipo de Documento<span class="required">*</span></label>
                        <div class="controls">
                            <input id="nombretipodocumento" type="text" name="nombretipodocumento" value=""  />
                        </div>
                    </div>

                        
                   <div class="span12" style="padding: 1%; margin-left: 20">

                                        <div class="span6">
                                            <label for="descripciontipodocumento">Descripcion del tipo de documento*</label>
                                            <textarea class="span12" name="descripciontipodocumento" id="descripciontipodocumento" cols="25" rows="6" style="margin: 0px; width: 691px; height: 129px;"> </textarea>
                                                                                  
                                        </div>
                                        

                     </div>


                    <div class="control-group">
                        <label for="imagen" class="control-label"><span class="required">Archivo*</span></label>
                        <div class="controls">
                            <input id="imagen" type="file" name="userfile"  accept=".png, .jpg, .jpeg, .JPG, .JPEG, .PNG"/> (png|jpg|jpeg|PNG|JPG|JPEG)
                        </div>
                    </div>

                    <div class="form-actions">
                        <div class="span12">
                            <div class="span6 offset3">
                                <button type="submit" class="btn btn-success"><i class="icon-plus icon-white"></i> Agregar</button>
                                <a href="<?php echo base_url() ?>index.php/tipodocumento" id="" class="btn"><i class="icon-arrow-left"></i> Volver</a>
                            </div>
                        </div>
                    </div>

                    
                </form>
            </div>

         </div>
     </div>
</div>

<script src="<?php echo base_url()?>js/jquery.validate.js"></script>
<script src="<?php echo base_url();?>js/maskmoney.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        

        $(".money").maskMoney();

        $('#formTipodocumento').validate({
            rules :{
                  nombretipodocumento: { required: true},
                  descripciontipodocumento: { required: true},
                  
            },
            messages:{
                  nombretipodocumento: { required: 'Campo Requerido.'},
                  descripciontipodocumento: {required: 'Campo Requerido.'},
                  
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



