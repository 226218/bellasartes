<div class="row-fluid" style="margin-top: 0">
    <div class="span4">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-list-alt"></i>
                </span>
                <h5>Informes Rápidos</h5>
            </div>
            <div class="widget-content">
                <ul class="site-stats">
                    <li><a href="<?php echo base_url()?>index.php/relatorios/documentosRapid"><i class="icon-wrench"></i> <small>Todos los Documentos</small></a></li>
                </ul>
            </div>
        </div>
    </div>

      <div class="span8">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-list-alt"></i>
                </span>
                <h5>Informes Personalizables</h5>
            </div>
            <div class="widget-content">
                <div class="span12 well">
                    <div class="span12 alert alert-info">Dejar en blanco en caso de no utilizar el parametro.</div>
                    <form action="<?php echo base_url() ?>index.php/relatorios/documentosCustom" method="get">
                           <div class="span12 well">
                            <div class="span6">
                                <label for="">Fecha Ingreso de:</label>
                                <input type="date" name="dataInicial" class="span12" />
                            </div>
                            <div class="span6">
                                <label for="">a:</label>
                                <input type="date" name="dataInicial1" class="span12" />
                            </div>
                        </div>
                          <div class="span12 well" style="margin-left: 0">
                            <div class="span6">
                                <label for="">Fecha Finalizacion de:</label>
                                <input type="date" name="dataFinal" class="span12" />
                            </div>
                            <div class="span6">
                                <label for="">a:</label>
                                <input type="date" name="dataFinal1" class="span12" />
                            </div>
                        </div>
                        <div class="span12 well" style="margin-left: 0">
                            <div class="span6">
                                <label for="">Stock de:</label>
                                <input type="text" name="estoqueInicial" class="span12" />
                            </div>
                            <div class="span6">
                                <label for="">a:</label>
                                <input type="text" name="estoqueFinal" class="span12" />
                            </div>
                        </div>
                        <div class="span12" style="margin-left: 0; text-align: center">
                            <input type="reset" class="btn" value="Limpiar" />
                            <button class="btn btn-inverse"><i class="icon-print icon-white"></i> Imprimir</button>
                        </div>
                    </form>
                </div>
                .
            </div>
        </div>
    </div>
</div>


<script src="<?php echo base_url();?>js/maskmoney.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $(".money").maskMoney();


    });
</script>