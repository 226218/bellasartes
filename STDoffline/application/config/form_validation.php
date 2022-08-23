<?php
$config = array('area' => array(array(
                                	'field'=>'nombrearea',
                                	'label'=>'nombrearea',
                                	'rules'=>'required|trim|xss_clean'
                                ),
								array(
                                	'field'=>'descripcionarea',
                                	'label'=>'descripcionarea',
                                	'rules'=>'required|trim|xss_clean'
                                ))
                ,
                'documentos' => array(array(
                                    'field'=>'tipodocumento_id',
                                    'label'=>'tipodocumento_id',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'nombredocumento',
                                    'label'=>'nombredocumento',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'descripciondocumento',
                                    'label'=>'descripciondocumento',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'estado',
                                    'label'=>'estado',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'dnisolicitante',
                                    'label'=>'dnisolicitante',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'emailsolicitante',
                                    'label'=>'emailsolicitante',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'apellidopaternosolicitante',
                                    'label'=>'apellidopaternosolicitante',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'apellidomaternosolicitante',
                                    'label'=>'apellidomaternosolicitante',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'nombressolicitante',
                                    'label'=>'nombressolicitante',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'fechainicio',
                                    'label'=>'fechainicio',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'fechafin',
                                    'label'=>'fechafin',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'observaciones',
                                    'label'=>'observaciones',
                                    'rules'=>'trim|xss_clean'
                                )
                                ,
                                array(
                                    'field'=>'archivodocumento',
                                    'label'=>'archivodocumento',
                                    'rules'=>'trim|xss_clean'
                                ))
                ,
                'tipodocumento' => array(array(
                                    'field'=>'nombretipodocumento',
                                    'label'=>'nombretipodocumento',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'descripciontipodocumento',
                                    'label'=>'descripciontipodocumento',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'imagen',
                                    'label'=>'imagen',
                                    'rules'=>'trim|xss_clean'
                                ))
                ,
                'usuarios' => array(array(
                                    'field'=>'nombres',
                                    'label'=>'Nombres',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'dni',
                                    'label'=>'DNI',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'apellidopaterno',
                                    'label'=>'apellidopaterno',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'apellidomaterno',
                                    'label'=>'apellidomaterno',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'cargo',
                                    'label'=>'cargo',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'firmadigital',
                                    'label'=>'firmadigital',
                                    'rules'=>'trim|xss_clean'
                                ),
                                
                                array(
                                    'field'=>'estado',
                                    'label'=>'Estado',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'email',
                                    'label'=>'Email',
                                    'rules'=>'required|trim|valid_email|xss_clean'
                                ),
                                array(
                                    'field'=>'contrasenha',
                                    'label'=>'contrasenha',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'telefono',
                                    'label'=>'telefono',
                                    'rules'=>'required|trim|xss_clean'
                                )
                                ,
                                array(
                                    'field'=>'celular',
                                    'label'=>'celular',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'idarea',
                                    'label'=>'idarea',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'permisos_id',
                                    'label'=>'permisos_id',
                                    'rules'=>'required|trim|xss_clean'
                                ))
                ,      
                'seguimientodocumento' => array(array(

                                    'field' => 'iddocumento',
                                    'label' => 'iddocumento',
                                    'rules' => 'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'dniaprobacion',
                                    'label'=>'dniaprobacion',
                                    'rules'=>'trim|xss_clean|required'
                                ),
                                array(
                                    'field'=>'idareaactual',
                                    'label'=>'idareaactual',
                                    'rules'=>'trim|xss_clean|required'
                                ),
                                array(
                                    'field'=>'idareasiguiente',
                                    'label'=>'idareasiguiente',
                                    'rules'=>'trim|xss_clean'
                                ),
                                array(
                                    'field'=>'fechafin',
                                    'label'=>'fechafin',
                                    'rules'=>'trim|xss_clean'
                                ),
                                array(
                                    'field'=>'observaciones',
                                    'label'=>'observaciones',
                                    'rules'=>'trim|xss_clean'
                                ),
                                array(
                                    'field'=>'fechainicio',
                                    'label'=>'areaactual',
                                    'rules'=>'trim|xss_clean|required'
                                ),
                                array(
                                    'field'=>'estadotramite',
                                    'label'=>'estadotramite',
                                    'rules'=>'trim|xss_clean|required'
                                ),
                                array(
                                    'field'=>'permiso',
                                    'label'=>'permiso',
                                    'rules'=>'trim|xss_clean|required'
                                ))
		);
			   