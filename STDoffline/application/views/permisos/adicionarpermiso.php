<div class="span12" style="margin-left: 0">
    <form action="<?php echo base_url();?>index.php/permisos/adicionar" id="formpermiso" method="post">

    <div class="span12" style="margin-left: 0">
        
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-lock"></i>
                </span>
                <h5>Registrar Permisos</h5>
            </div>
            <div class="widget-content">
                
                <div class="span6">
                    <label>Nombre del Permiso</label>
                    <input name="nombrecargo" type="text" id="nombrecargo" class="span12" />

                </div>
                <div class="span6">
                    <br/>
                    <label>
                        <input name="marcarTodos" type="checkbox" value="1" id="marcarTodos" />
                        <span class="lbl"> Marcar Todos</span>

                    </label>
                    <br/>
                </div>

                <div class="control-group">
                    <label for="documento" class="control-label"></label>
                    <div class="controls">

                        <table class="table table-bordered">
                            <tbody>
                                <tr>

                                    <td>
                                        <label>
                                            <input name="vArea" class="marcar" type="checkbox" checked="checked" value="1" />
                                            <span class="lbl"> Visualizar Area</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="aArea" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Agregar Area</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="eArea" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Editar Area</span>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input name="dArea" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Eliminar Area</span>
                                        </label>
                                    </td>
                                 
                                </tr>

                                <tr><td colspan="4"></td></tr>
                                <tr>

                                    <td>
                                        <label>
                                            <input name="vTipodocumento" class="marcar" type="checkbox" checked="checked" value="1" />
                                            <span class="lbl"> Visualizar Tipo de Documento</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="aTipodocumento" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Agregar Tipo de Documento</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="eTipodocumento" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Editar Tipo de Documento</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="dTipodocumento" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Eliminar Tipo de Documento</span>
                                        </label>
                                    </td>
                                 
                                </tr>
                                <tr><td colspan="4"></td></tr>
                                
                                <tr>

                                    <td>
                                        <label>
                                            <input name="vDocumento" class="marcar" type="checkbox" checked="checked" value="1" />
                                            <span class="lbl"> Visualizar Documento</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="aDocumento" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Agregar Documento</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="eDocumento" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Editar Documento</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="dDocumento" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Eliminar Documento</span>
                                        </label>
                                    </td>
                                 
                                </tr>
                                
                                <tr><td colspan="4"></td></tr>
                                
                                <tr>

                                    <td>
                                        <label>
                                            <input name="vSeguimientodocumento" class="marcar" type="checkbox" checked="checked" value="1" />
                                            <span class="lbl"> Visualizar Seguimiento de Documento</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="aSeguimientodocumento" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Agregar Seguimiento de Documento</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="eSeguimientodocumento" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Editar Seguimiento de Documento</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="dSeguimientodocumento" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Eliminar Seguimiento de Documento</span>
                                        </label>
                                    </td>
                                 
                                </tr>
                                               <tr><td colspan="4"></td></tr>     
                                
                                     <tr>

                                    <td>
                                        <label>
                                            <input name="eSeguimiento" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Enviar Seguimiento</span>
                                        </label>
                                    </td>

                                 
                                </tr>

                                
                               

                                <tr><td colspan="4"></td></tr>

                                <tr>

                                    <td>
                                        <label>
                                            <input name="rArea" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Informe de Area</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="rDocumento" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Informe de Documentos</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="rTipodocumento" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Informe de Tipo de Documentos</span>
                                        </label>
                                    </td>
                                   <td>
                                        <label>
                                            <input name="rSeguimientodocumento" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Informe de Seguimiento de Documento</span>
                                        </label>
                                    </td>
                                </tr>


  <tr><td colspan="4"></td></tr>
                              

                              

                                <tr>

                                    <td>
                                        <label>
                                            <input name="cUsuario" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Configurar Usuario</span>
                                        </label>
                                    </td>


                                    <td>
                                        <label>
                                            <input name="cpermiso" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Configurar Permisos</span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="cBackup" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"> Backup</span>
                                        </label>
                                    </td>
                                 
                                </tr>



                            </tbody>
                        </table>
                    </div>
                </div>

              
    
            <div class="form-actions">
                <div class="span12">
                    <div class="span6 offset3">
                        <button type="submit" class="btn btn-success"><i class="icon-plus icon-white"></i> Agregar</button>
                        <a href="<?php echo base_url() ?>index.php/permisos" id="" class="btn"><i class="icon-arrow-left"></i> Volver</a>
                    </div>
                </div>
            </div>
           
            </div>
        </div>

                   
    </div>

</form>

</div>


<script type="text/javascript" src="<?php echo base_url()?>assets/js/validate.js"></script>
<script type="text/javascript">
    $(document).ready(function(){

        $(document).on('click', '#marcarTodos', function(event) {
            if($(this).prop('checked')){

              $('.marcar').each(
                 function(){
                    $(this).attr("checked", true);
                 }
              );
           }else{

              $('.marcar').each(
                 function(){
                    $(this).attr("checked", false);
                 }
              );
           }
        });
       

 
    $("#formpermiso").validate({
        rules :{
            nombrecargo: {required: true}
        },
        messages:{
            nombrecargo: {required: 'Campo Obligatorio'}
        }
    });     

        

    });
</script>
