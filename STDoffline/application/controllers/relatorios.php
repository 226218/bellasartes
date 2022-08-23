<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Relatorios extends CI_Controller{
    public function __construct() {
        parent::__construct();
        if((!$this->session->userdata('session_id')) || (!$this->session->userdata('logado'))){
            redirect('mapos/login');
        }
        
        $this->load->model('Relatorios_model','',TRUE);
        $this->data['menuRelatorios'] = 'Relatórios';

    }

    public function area(){

        if(!$this->permission->checkPermission($this->session->userdata('permiso'),'rArea')){
           $this->session->set_flashdata('error','No se le permite generar los informes de area.');
           redirect(base_url());
        }
        $this->data['view'] = 'relatorios/rel_area';
       	$this->load->view('tema/topo',$this->data);
    }

    public function tipodocumento(){
        if(!$this->permission->checkPermission($this->session->userdata('permiso'),'rTipodocumento')){
           $this->session->set_flashdata('error','No se le permite generar los informes de productos.');
           redirect(base_url());
        }
        $this->data['view'] = 'relatorios/rel_tipodocumento';
       	$this->load->view('tema/topo',$this->data);

    }

    public function areaCustom(){
        if(!$this->permission->checkPermission($this->session->userdata('permiso'),'rArea')){
           $this->session->set_flashdata('error','No se le permite generar los informes de area.');
           redirect(base_url());
        }

        $dataInicial = $this->input->get('dataInicial');
        $dataFinal = $this->input->get('dataFinal');

        $data['area'] = $this->Relatorios_model->areaCustom($dataInicial,$dataFinal);

        $this->load->helper('mpdf');
        //$this->load->view('relatorios/imprimir/imprimirarea', $data);
        $html = $this->load->view('relatorios/imprimir/imprimirarea', $data, true);
        pdf_create($html, 'relatorio_area' . date('d/m/y'), TRUE);
    
    }

    public function areaRapid(){
        if(!$this->permission->checkPermission($this->session->userdata('permiso'),'rArea')){
           $this->session->set_flashdata('error','No se le permite generar los informes de area.');
           redirect(base_url());
        }

        $data['area'] = $this->Relatorios_model->areaRapid();

        $this->load->helper('mpdf');
        //$this->load->view('relatorios/imprimir/imprimirarea', $data);
        $html = $this->load->view('relatorios/imprimir/imprimirarea', $data, true);
        pdf_create($html, 'relatorio_area' . date('d/m/y'), TRUE);
    }

    public function tipodocumentoRapid(){
        if(!$this->permission->checkPermission($this->session->userdata('permiso'),'rTipodocumento')){
           $this->session->set_flashdata('error','No se le permite generar los informes de productos.');
           redirect(base_url());
        }

        $data['tipodocumento'] = $this->Relatorios_model->tipodocumentoRapid();

        $this->load->helper('mpdf');
        //$this->load->view('relatorios/imprimir/imprimirtipodocumento', $data);
        $html = $this->load->view('relatorios/imprimir/imprimirtipodocumento', $data, true);
        pdf_create($html, 'relatorio_tipodocumento' . date('d/m/y'), TRUE);
    }

    public function tipodocumentoRapidMin(){
        if(!$this->permission->checkPermission($this->session->userdata('permiso'),'rTipodocumento')){
           $this->session->set_flashdata('error','No se le permite generar los informes de productos.');
           redirect(base_url());
        }

        $data['tipodocumento'] = $this->Relatorios_model->tipodocumentoRapidMin();

        $this->load->helper('mpdf');
        $html = $this->load->view('relatorios/imprimir/imprimirtipodocumento', $data, true);
        pdf_create($html, 'relatorio_tipodocumento1' . date('d/m/y'), TRUE);
        
    }

    public function tipodocumentoCustom(){
        if(!$this->permission->checkPermission($this->session->userdata('permiso'),'rTipodocumento')){
           $this->session->set_flashdata('error','No se le permite generar los informes de productos..');
           redirect(base_url());
        }

        $precoInicial = $this->input->get('precoInicial');
        $precoFinal = $this->input->get('precoFinal');
        $estoqueInicial = $this->input->get('estoqueInicial');
        $estoqueFinal = $this->input->get('estoqueFinal');

        $data['tipodocumento'] = $this->Relatorios_model->tipodocumentoCustom($precoInicial,$precoFinal,$estoqueInicial,$estoqueFinal);

        $this->load->helper('mpdf');
        $html = $this->load->view('relatorios/imprimir/imprimirtipodocumento', $data, true);
        pdf_create($html, 'relatorio_tipodocumento' . date('d/m/y'), TRUE);
    }

    public function documentos(){

        if(!$this->permission->checkPermission($this->session->userdata('permiso'),'rDocumento')){
           $this->session->set_flashdata('error','No se le permite generar los informes de Documentos.');
           redirect(base_url());
        }
        $this->data['view'] = 'relatorios/rel_documentos';
       	$this->load->view('tema/topo',$this->data);

    }

    public function documentosCustom(){

        if(!$this->permission->checkPermission($this->session->userdata('permiso'),'rDocumento')){
           $this->session->set_flashdata('error','No se le permite generar los informes de Documentos.');
           redirect(base_url());
        }

        $precoInicial = $this->input->get('precoInicial');
        $precoFinal = $this->input->get('precoFinal');
        $data['documentos'] = $this->Relatorios_model->documentosCustom($precoInicial,$precoFinal);
        $this->load->helper('mpdf');
        //$this->load->view('relatorios/imprimir/imprimirdocumentos', $data);
        $html = $this->load->view('relatorios/imprimir/imprimirdocumentos', $data, true);
        pdf_create($html, 'relatorio_documentos' . date('d/m/y'), TRUE);
    }

    public function documentosRapid(){
        if(!$this->permission->checkPermission($this->session->userdata('permiso'),'rDocumento')){
           $this->session->set_flashdata('error','No se le permite generar los informes de Documentos.');
           redirect(base_url());
        }

        $data['documentos'] = $this->Relatorios_model->documentosRapid();

        $this->load->helper('mpdf');
        //$this->load->view('relatorios/imprimir/imprimirdocumentos', $data);
        $html = $this->load->view('relatorios/imprimir/imprimirdocumentos', $data, true);
        pdf_create($html, 'relatorio_documentos' . date('d/m/y'), TRUE);
    }

    public function os(){
        if(!$this->permission->checkPermission($this->session->userdata('permiso'),'rOs')){
           $this->session->set_flashdata('error','No se le permite generar los informes de OS.');
           redirect(base_url());
        }
        $this->data['view'] = 'relatorios/rel_os';
       	$this->load->view('tema/topo',$this->data);
    }

    public function osRapid(){
        if(!$this->permission->checkPermission($this->session->userdata('permiso'),'rOs')){
           $this->session->set_flashdata('error','No se le permite generar los informes de OS.');
           redirect(base_url());
        }

        $data['os'] = $this->Relatorios_model->osRapid();

        $this->load->helper('mpdf');
        //$this->load->view('relatorios/imprimir/imprimirOs', $data);
        $html = $this->load->view('relatorios/imprimir/imprimirOs', $data, true);
        pdf_create($html, 'relatorio_os' . date('d/m/y'), TRUE);
    }

    public function osCustom(){
        if(!$this->permission->checkPermission($this->session->userdata('permiso'),'rOs')){
           $this->session->set_flashdata('error','No se le permite generar los informes de OS.');
           redirect(base_url());
        }
        
        $dataInicial = $this->input->get('dataInicial');
        $dataFinal = $this->input->get('dataFinal');
        $Area = $this->input->get('Area');
        $responsavel = $this->input->get('responsavel');
        $status = $this->input->get('status');
        $data['os'] = $this->Relatorios_model->osCustom($dataInicial,$dataFinal,$Area,$responsavel,$status);
        $this->load->helper('mpdf');
        //$this->load->view('relatorios/imprimir/imprimirOs', $data);
        $html = $this->load->view('relatorios/imprimir/imprimirOs', $data, true);
        pdf_create($html, 'relatorio_os' . date('d/m/y'), TRUE);
    }



    public function seguimientodocumento(){
        if(!$this->permission->checkPermission($this->session->userdata('permiso'),'rSeguimientodocumento')){
           $this->session->set_flashdata('error','No se le permite generar los informes de ventas.');
           redirect(base_url());
        }

        $this->data['view'] = 'relatorios/rel_seguimientodocumento';
        $this->load->view('tema/topo',$this->data);
    }

    public function seguimientodocumentoRapid(){
        if(!$this->permission->checkPermission($this->session->userdata('permiso'),'rSeguimientodocumento')){
           $this->session->set_flashdata('error','No se le permite generar los informes de ventas.');
           redirect(base_url());
        }
        $data['seguimientodocumento'] = $this->Relatorios_model->seguimientodocumentoRapid();

        $this->load->helper('mpdf');
        //$this->load->view('relatorios/imprimir/imprimirOs', $data);
        $html = $this->load->view('relatorios/imprimir/imprimirseguimientodocumento', $data, true);
        pdf_create($html, 'relatorio_seguimientodocumento' . date('d/m/y'), TRUE);
    }

    public function seguimientodocumentoCustom(){
        if(!$this->permission->checkPermission($this->session->userdata('permiso'),'rSeguimientodocumento')){
           $this->session->set_flashdata('error','No se le permite generar los informes de ventas..');
           redirect(base_url());
        }
        $dataInicial = $this->input->get('dataInicial');
        $dataFinal = $this->input->get('dataFinal');
        $Area = $this->input->get('Area');
        $responsavel = $this->input->get('responsavel');

        $data['seguimientodocumento'] = $this->Relatorios_model->seguimientodocumentoCustom($dataInicial,$dataFinal,$Area,$responsavel);
        $this->load->helper('mpdf');
        //$this->load->view('relatorios/imprimir/imprimirOs', $data);
        $html = $this->load->view('relatorios/imprimir/imprimirseguimientodocumento', $data, true);
        pdf_create($html, 'relatorio_seguimientodocumento' . date('d/m/y'), TRUE);
    }
}
