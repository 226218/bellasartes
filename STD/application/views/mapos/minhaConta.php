<div class="span6" style="margin-left: 0">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-th-list"></i>
		</span>
                <h5>Mi Cuenta</h5>
            </div>
            <div class="widget-content">
                <div class="row-fluid">
                    <div class="span12" style="min-height: 260px">
                        <ul class="site-stats">
                            <li class="bg_ls span12"><strong>Nombre: <?php echo $usuario->nombres?></strong></li>
                            <li class="bg_lb span12" style="margin-left: 0"><strong>Teléfono: <?php echo $usuario->telefono?></strong></li>
                            <li class="bg_lg span12" style="margin-left: 0"><strong>Email: <?php echo $usuario->email?></strong></li>
                            <li class="bg_lo span12" style="margin-left: 0"><strong>Nível: <?php echo $usuario->permiso; ?></strong></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>

<div class="span6">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-th-list"></i>
		</span>
                <h5>Modificar mi Contraseña</h5>
            </div>
            <div class="widget-content">
                <div class="row-fluid">
                    <div class="span12" style="min-height: 260px">
                        <form id="formcontrasenha" action="<?php echo base_url();?>index.php/mapos/alterarcontrasenha" method="post">
                        
                        <div class="span12" style="margin-left: 0">
                            <label for="">Contraseña Actual</label>
                            <input type="password" id="oldcontrasenha" name="oldcontrasenha" class="span12" />
                        </div>
                        <div class="span12" style="margin-left: 0">
                            <label for="">Nueva Contraseña</label>
                            <input type="password" id="novacontrasenha" name="novacontrasenha" class="span12" />
                        </div>
                        <div class="span12" style="margin-left: 0">
                            <label for="">Confirmar Contraseña</label>
                            <input type="password" name="confirmarcontrasenha" class="span12" />
                        </div>
                        <div class="span12" style="margin-left: 0; text-align: center">
                            <button class="btn btn-primary">Modificar Contraseña</button>
                        </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>


<script src="<?php echo base_url()?>js/jquery.validate.js"></script>
<script type="text/javascript">
    $(document).ready(function(){

        $('#formcontrasenha').validate({
            rules :{
                  oldcontrasenha: {required: true},  
                  novacontrasenha: { required: true},
                  confirmarcontrasenha: { equalTo: "#novacontrasenha"}
            },
            messages:{
                  oldcontrasenha: {required: 'Campo Requerido'},  
                  novacontrasenha: { required: 'Campo Requerido.'},
                  confirmarcontrasenha: {equalTo: 'As contrasenhas não combinam.'}
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