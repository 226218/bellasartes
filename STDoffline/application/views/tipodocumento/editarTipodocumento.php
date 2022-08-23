<div class="row-fluid" style="margin-top:0">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-align-justify"></i>
                </span>
                <h5>Editar Producto</h5>
            </div>
            <div class="widget-content nopadding">
                <?php echo $custom_error; ?>
                <form action="<?php echo current_url(); ?>" id="formTipodocumento" method="post" class="form-horizontal" >
                     <div class="control-group">
                        <?php echo form_hidden('idtipodocumento',$result->idtipodocumento) ?>
                        <label for="nombretipodocumento" class="control-label">Tipo de Documento<span class="required">*</span></label>
                        <div class="controls">
                            <input id="nombretipodocumento" type="text" name="nombretipodocumento" value="<?php echo $result->nombretipodocumento; ?>"  />
                        </div>
                    </div>

                 <div class="control-group">
                        <label for="descripciontipodocumento" class="control-label">Descripcion del tipo de documento<span class="required">*</span></label>
                        <div class="controls">
                            <input id="descripciontipodocumento" type="text" name="descripciontipodocumento" value="<?php echo $result->descripciontipodocumento;  ?>"  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="imagen" class="control-label">Imagen<span class="required">*</span></label>
                        <div class="controls">
                            <input id="imagen" class="text" type="text" name="imagen" value="<?php  echo $result->imagen; ?>"  />
                        </div>
                    </div>
                   
                    <div class="form-actions">
                        <div class="span12">
                            <div class="span6 offset3">
                                <button type="submit" class="btn btn-primary"><i class="icon-ok icon-white"></i> Modificar</button>
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
                  imagen: { required: true},
                  },
            messages:{
                  nombretipodocumento: { required: 'Campo Requerido.'},
                  descripciontipodocumento: {required: 'Campo Requerido.'},
                  imagen: { required: 'Campo Requerido.'},
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




