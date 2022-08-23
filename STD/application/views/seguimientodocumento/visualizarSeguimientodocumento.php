<?php $areaact = $this->seguimientodocumento_model->getarea($result->idareaactual);
             $areasec = $this->seguimientodocumento_model->getarea($result->idareasiguiente);

             $documento = $this->seguimientodocumento_model->getdocumentos($result->iddocumento);


   $dnidesencriptado = $this->seguimientodocumento_model->getdnidesencriptado($result->dniaprobacion);
    ?>         
<div class="widget-box">
    <div class="widget-title">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#tab1">Datos Tramite Documentario</a></li>
        </ul>
    </div>
      <div class="widget-content tab-content">
        <div id="tab1" class="tab-pane active" style="min-height: 300px">

            <div class="accordion" id="collapse-group">
                            <div class="accordion-group widget-box">
                                <div class="accordion-heading">
                                    <div class="widget-title">
                                        <a data-parent="#collapse-group" href="#collapseGOne" data-toggle="collapse">
                                            <span class="icon"><i class="icon-list"></i></span><h5>Datos de Tramite Documentario</h5>
                                        </a>
                                    </div>
                                </div>
                                <div class="collapse in accordion-body" id="collapseGOne">
                                    <div class="widget-content">
                                        <table class="table table-bordered">
                                            <tbody>
                        <tr>
                            <td style="text-align: right; width: 30%"><strong>Nombre Documento</strong></td>
                            <td><?php echo $documento->nombredocumento; ?></td>
                        </tr>
                        <tr>
                            <td style="text-align: right"><strong>dni aprobacion</strong></td>
                            <td><?php echo $dnidesencriptado; ?></td>
                        </tr>
                        <tr>
                            <td style="text-align: right"><strong>Area Actual</strong></td>
                            <td><?php echo $areaact->nombrearea; ?></td>
                        </tr>
                        <tr>
                            <td style="text-align: right"><strong>Area Siguiente</strong></td>
                            <td><?php if($result->idareasiguiente== '0' ) {echo '-';} else {echo  $areasec->nombrearea;} ?></td>
                        </tr>
                   <tr>
                            <td style="text-align: right"><strong>Fecha de Entrada al Area</strong></td>
                            <td><?php echo $result->fechainicio; ?></td>
                        </tr>
                         <tr>
                            <td style="text-align: right"><strong>Fecha de Salida del Area</strong></td>
                            <td><?php echo $result->fechafin; ?></td>
                        </tr>
                                   <tr>
                            <td style="text-align: right"><strong>Estado de Tramite</strong></td>
                            <td><?php echo $result->estadotramite; ?></td>
                        </tr>

           <tr>
                            <td style="text-align: right"><strong>Nombre Completo Solicitante</strong></td>
                            <td><?php  echo $documento->nombressolicitante. ' '.$documento->apellidopaternosolicitante.' '.$documento->apellidomaternosolicitante; ?></td>
                        </tr>

              </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            
                            
                            </div>
                        </div>



          
        </div>


        <!--Tab 2-->
        
    </div>
</div>


