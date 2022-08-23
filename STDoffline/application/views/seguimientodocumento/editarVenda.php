<link rel="stylesheet" href="<?php echo base_url();?>js/jquery-ui/css/smoothness/jquery-ui-1.9.2.custom.css" />
<script type="text/javascript" src="<?php echo base_url()?>js/jquery-ui/js/jquery-ui-1.9.2.custom.js"></script>


<div class="row-fluid" style="margin-top:0">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-tags"></i>
                </span>
                <h5>Editar Venta</h5>
            </div>
            <div class="widget-content nopadding">


                <div class="span12" id="divtipodocumentoDocumentos" style=" margin-left: 0">
                    <ul class="nav nav-tabs">
                        <li class="active" id="tabDetalhes"><a href="#tab1" data-toggle="tab">Detalles de la Venta</a></li>

                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab1">

                            <div class="span12" id="divEditarSeguimientodocumento">
                                
                                <form action="<?php echo current_url(); ?>" method="post" id="formseguimientodocumento">
                                    <?php echo form_hidden('idseguimientodocumento',$result->idseguimientodocumento) ?>
                                    
                                    <div class="span12" style="padding: 1%; margin-left: 0">
                                        <h3>#Venta: <?php echo $result->idseguimientodocumento ?></h3>
                                        <div class="span2" style="margin-left: 0">
                                            <label for="dataFinal">Fecha Final</label>
                                            <input id="dataSeguimientodocumento" class="span12 datepicker" type="text" name="dataSeguimientodocumento" value="<?php echo date('d/m/Y', strtotime($result->dataSeguimientodocumento)); ?>"  />
                                        </div>
                                        <div class="span5" >
                                            <label for="Area">Area<span class="required">*</span></label>
                                            <input id="Area" class="span12" type="text" name="Area" value="<?php echo $result->nomeArea ?>"  />
                                            <input id="area_id" class="span12" type="hidden" name="area_id" value="<?php echo $result->area_id ?>"  />
                                            <input id="valorTotal" type="hidden" name="valorTotal" value=""  />
                                        </div>
                                        <div class="span5">
                                            <label for="tecnico">Vendedor<span class="required">*</span></label>
                                            <input id="tecnico" class="span12" type="text" name="tecnico" value="<?php echo $result->nome ?>"  />
                                            <input id="usuarios_id" class="span12" type="hidden" name="usuarios_id" value="<?php echo $result->usuarios_id ?>"  />
                                        </div>
                                        
                                    </div>
                                    
                                    
                                   
                                   
                                    <div class="span12" style="padding: 1%; margin-left: 0">
            
                                        <div class="span8 offset2" style="text-align: center">
                                            <?php if($result->faturado == 0){ ?>
                                            <a href="#modal-faturar" id="btn-faturar" role="button" data-toggle="modal" class="btn btn-success"><i class="icon-file"></i> Facturar</a>
                                            <?php } ?>
                                            <button class="btn btn-primary" id="btnContinuar"><i class="icon-white icon-ok"></i> Modificar</button>
                                            <a href="<?php echo base_url() ?>index.php/seguimientodocumento/visualizar/<?php echo $result->idseguimientodocumento; ?>" class="btn btn-inverse"><i class="icon-eye-open"></i> Visualizar Venta</a>
                                            <a href="<?php echo base_url() ?>index.php/seguimientodocumento" class="btn"><i class="icon-arrow-left"></i> Volver</a>
                                        </div>

                                    </div>

                                </form>
                                
                                <div class="span12 well" style="padding: 1%; margin-left: 0">
                                        
                                        <form id="formtipodocumento" action="<?php echo base_url(); ?>index.php/seguimientodocumento/adicionarTipodocumento" method="post">
                                            <div class="span8">
                                                <input type="hidden" name="idTipodocumento" id="idTipodocumento" />
                                                <input type="hidden" name="idseguimientodocumentoTipodocumento" id="idseguimientodocumentoTipodocumento" value="<?php echo $result->idseguimientodocumento?>" />
                                                <input type="hidden" name="estoque" id="estoque" value=""/>
                                                <input type="hidden" name="preco" id="preco" value=""/>
                                                <label for="">Producto</label>
                                                <input type="text" class="span12" name="Tipodocumento" id="Tipodocumento" placeholder="Introduzca el nombre del producto" />
                                            </div>
                                            <div class="span2">
                                                <label for="">Cantidad</label>
                                                <input type="text" placeholder="Cantidad" id="quantidade" name="quantidade" class="span12" />
                                            </div>
                                            <div class="span2">
                                                <label for="">&nbsp</label>
                                                <button class="btn btn-success span12" id="btnAdicionarTipodocumento"><i class="icon-white icon-plus"></i> Agregar</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="span12" id="divtipodocumento" style="margin-left: 0">
                                        <table class="table table-bordered" id="tbltipodocumento">
                                            <thead>
                                                <tr>
                                                    <th>Procducto</th>
                                                    <th>Cantidad</th>
                                                    <th>Acción</th>
                                                    <th>Sub-total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $total = 0;
                                                foreach ($tipodocumento as $p) {
                                                    
                                                    $total = $total + $p->subTotal;
                                                    echo '<tr>';
                                                    echo '<td>'.$p->descricao.'</td>';
                                                    echo '<td>'.$p->quantidade.'</td>';
                                                    echo '<td><a href="" idAcao="'.$p->idItens.'" prodAcao="'.$p->idtipodocumento.'" quantAcao="'.$p->quantidade.'" title="Eliminar Producto" class="btn btn-danger"><i class="icon-remove icon-white"></i></a></td>';
                                                    echo '<td>€ '.number_format($p->subTotal,2,',','.').'</td>';
                                                    echo '</tr>';
                                                }?>
                                               
                                                <tr>
                                                    <td colspan="3" style="text-align: right"><strong>Total:</strong></td>
                                                    <td><strong>€ <?php echo number_format($total,2,',','.');?></strong> <input type="hidden" id="total-Seguimientodocumento" value="<?php echo number_format($total,2); ?>"></td>
                                                </tr>
                                            </tbody>
                                        </table>


                                        


                                    </div>

                            </div>

                        </div>

                    </div>

                </div>


.

        </div>

    </div>
</div>
</div>


<!-- Modal Faturar-->
<div id="modal-faturar" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<form id="formFaturar" action="<?php echo current_url() ?>" method="post">
<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
  <h3 id="myModalLabel">Faturar Seguimientodocumento</h3>
</div>
<div class="modal-body">
    
    <div class="span12 alert alert-info" style="margin-left: 0"> Obligatorio llenar los campos con asterisco.</div>
    <div class="span12" style="margin-left: 0"> 
      <label for="descricao">Descripción</label>
      <input class="span12" id="descricao" type="text" name="descricao" value="Facturar Venta - #<?php echo $result->idseguimientodocumento; ?> "  />
      
    </div>  
    <div class="span12" style="margin-left: 0"> 
      <div class="span12" style="margin-left: 0"> 
        <label for="Area">Area*</label>
        <input class="span12" id="Area" type="text" name="Area" value="<?php echo $result->nomeArea ?>" />
        <input type="hidden" name="area_id" id="area_id" value="<?php echo $result->area_id ?>">
        <input type="hidden" name="seguimientodocumento_id" id="seguimientodocumento_id" value="<?php echo $result->idseguimientodocumento; ?>">
      </div>
      
      
    </div>
    <div class="span12" style="margin-left: 0"> 
      <div class="span4" style="margin-left: 0">  
        <label for="valor">Valor*</label>
        <input type="hidden" id="tipo" name="tipo" value="receita" /> 
        <input class="span12 money" id="valor" type="text" name="valor" value="<?php echo number_format($total,2); ?> "  />
      </div>
      <div class="span4" >
        <label for="vencimento">Fecha de Vencimiento*</label>
        <input class="span12 datepicker" id="vencimento" type="text" name="vencimento"  />
      </div>
      
    </div>
    
    <div class="span12" style="margin-left: 0"> 
      <div class="span4" style="margin-left: 0">
        <label for="recebido">Recebido?</label>
        &nbsp &nbsp &nbsp &nbsp<input  id="recebido" type="checkbox" name="recebido" value="1" /> 
      </div>
      <div id="divRecebimento" class="span8" style=" display: none">
        <div class="span6">
          <label for="recebimento">Fecha de recibo</label>
          <input class="span12 datepicker" id="recebimento" type="text" name="recebimento" /> 
        </div>
        <div class="span6">
          <label for="formaPgto">Forma Pgto</label>
          <select name="formaPgto" id="formaPgto" class="span12">
            <option value="Dinheiro">Efectivo</option>
            <option value="Cartão de Crédito">Tarjeta de Crédito</option>
            <option value="Cheque">Cheque</option>
            <option value="Boleto">Boletos</option>
            <option value="Depósito">Depósito</option>
            <option value="Débito">Débito</option>        
          </select>
        </div>
      </div>
      
    </div>
    
    
</div>
<div class="modal-footer">
  <button class="btn" data-dismiss="modal" aria-hidden="true" id="btn-cancelar-faturar">Cancelar</button>
  <button class="btn btn-primary">Facturar</button>
</div>
</form>
</div>
 

<script type="text/javascript" src="<?php echo base_url()?>js/jquery.validate.js"></script>
<script src="<?php echo base_url();?>js/maskmoney.js"></script>
<script type="text/javascript">
$(document).ready(function(){

     $(".money").maskMoney(); 

     $('#recebido').click(function(event) {
        var flag = $(this).is(':checked');
        if(flag == true){
          $('#divRecebimento').show();
        }
        else{
          $('#divRecebimento').hide();
        }
     });

     $(document).on('click', '#btn-faturar', function(event) {
       event.preventDefault();
         valor = $('#total-Seguimientodocumento').val();
         valor = valor.replace(',', '' );
         $('#valor').val(valor);
     });
     
     $("#formFaturar").validate({
          rules:{
             descricao: {required:true},
             Area: {required:true},
             valor: {required:true},
             vencimento: {required:true}
      
          },
          messages:{
             descricao: {required: 'Campo Requerido.'},
             Area: {required: 'Campo Requerido.'},
             valor: {required: 'Campo Requerido.'},
             vencimento: {required: 'Campo Requerido.'}
          },
          submitHandler: function( form ){       
            var dados = $( form ).serialize();
            $('#btn-cancelar-faturar').trigger('click');
            $.ajax({
              type: "POST",
              url: "<?php echo base_url();?>index.php/seguimientodocumento/faturar",
              data: dados,
              dataType: 'json',
              success: function(data)
              {
                if(data.result == true){
                    
                    window.location.reload(true);
                }
                else{
                    alert('Ocurrio um error al faturar la venta.');
                    $('#progress-fatura').hide();
                }
              }
              });

              return false;
          }
     });

     $("#Tipodocumento").autocomplete({
            source: "<?php echo base_url(); ?>index.php/os/autoCompleteTipodocumento",
            minLength: 2,
            select: function( event, ui ) {

                 $("#idTipodocumento").val(ui.item.id);
                 $("#estoque").val(ui.item.estoque);
                 $("#preco").val(ui.item.preco);
                 $("#quantidade").focus();
                 

            }
      });



      $("#Area").autocomplete({
            source: "<?php echo base_url(); ?>index.php/os/autoCompleteArea",
            minLength: 2,
            select: function( event, ui ) {

                 $("#area_id").val(ui.item.id);


            }
      });

      $("#tecnico").autocomplete({
            source: "<?php echo base_url(); ?>index.php/os/autoCompleteUsuario",
            minLength: 2,
            select: function( event, ui ) {

                 $("#usuarios_id").val(ui.item.id);


            }
      });



      $("#formseguimientodocumento").validate({
          rules:{
             Area: {required:true},
             tecnico: {required:true},
             dataSeguimientodocumento: {required:true}
          },
          messages:{
             Area: {required: 'Campo Requerido.'},
             tecnico: {required: 'Campo Requerido.'},
             dataSeguimientodocumento: {required: 'Campo Requerido.'}
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




      $("#formtipodocumento").validate({
          rules:{
             quantidade: {required:true}
          },
          messages:{
             quantidade: {required: 'Introduzca la cantidad'}
          },
          submitHandler: function( form ){
             var quantidade = parseInt($("#quantidade").val());
             var estoque = parseInt($("#estoque").val());
             if(estoque < quantidade){
                alert('Usted no tiene bastante stock.');
             }
             else{
                 var dados = $( form ).serialize();
                $("#divtipodocumento").html("<div class='progress progress-info progress-striped active'><div class='bar' style='width: 100%'></div></div>");
                $.ajax({
                  type: "POST",
                  url: "<?php echo base_url();?>index.php/seguimientodocumento/adicionarTipodocumento",
                  data: dados,
                  dataType: 'json',
                  success: function(data)
                  {
                    if(data.result == true){
                        $("#divtipodocumento" ).load("<?php echo current_url();?> #divtipodocumento" );
                        $("#quantidade").val('');
                        $("#Tipodocumento").val('').focus();
                    }
                    else{
                        alert('Ocurrio un error al agregar un producto.');
                    }
                  }
                  });

                  return false;
                }

             }
             
       });

     

       $(document).on('click', 'a', function(event) {
            var idTipodocumento = $(this).attr('idAcao');
            var quantidade = $(this).attr('quantAcao');
            var Tipodocumento = $(this).attr('prodAcao');
            if((idTipodocumento % 1) == 0){
                $("#divtipodocumento").html("<div class='progress progress-info progress-striped active'><div class='bar' style='width: 100%'></div></div>");
                $.ajax({
                  type: "POST",
                  url: "<?php echo base_url();?>index.php/seguimientodocumento/excluirTipodocumento",
                  data: "idTipodocumento="+idTipodocumento+"&quantidade="+quantidade+"&Tipodocumento="+Tipodocumento,
                  dataType: 'json',
                  success: function(data)
                  {
                    if(data.result == true){
                        $( "#divtipodocumento" ).load("<?php echo current_url();?> #divtipodocumento" );
                        
                    }
                    else{
                        alert('Ocurrio un error al eliminar un producto.');
                    }
                  }
                  });
                  return false;
            }
            
       });

       $(".datepicker" ).datepicker({ dateFormat: 'dd/mm/yy' });




});

</script>

