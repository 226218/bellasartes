<?php

class seguimientodocumento extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        
        if((!$this->session->userdata('session_id')) || (!$this->session->userdata('logado'))) {
            redirect('mapos/login');
        }
		
		$this->load->helper(array('form','codegen_helper'));
		$this->load->model('seguimientodocumento_model','',TRUE);
		$this->data['menuseguimientodocumento'] = 'seguimientodocumento';
	}	
	
	function index(){
		$this->gerenciar();
	}

	function gerenciar(){
        
        if(!$this->permission->checkPermission($this->session->userdata('permiso'),'vSeguimientodocumento')){
           $this->session->set_flashdata('error','No tiene permiso para visualizar los Tramites.');
           redirect(base_url());
        }

        $this->load->library('pagination');
        
        
        $config['base_url'] = base_url().'index.php/seguimientodocumento/gerenciar/';
        $config['total_rows'] = $this->seguimientodocumento_model->count('seguimientodocumento');
        $config['per_page'] = 100;
        $config['next_link'] = 'Próxima';
        $config['prev_link'] = 'Anterior';
        $config['full_tag_open'] = '<div class="pagination alternate"><ul>';
        $config['full_tag_close'] = '</ul></div>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li><a style="color: #2D335B"><b>';
        $config['cur_tag_close'] = '</b></a></li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['first_link'] = 'Primera';
        $config['last_link'] = 'Última';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        	
        $this->pagination->initialize($config); 	

		$this->data['results'] = $this->seguimientodocumento_model->get('seguimientodocumento','idseguimientodocumento,dniaprobacion,idareaactual,idareasiguiente,estadotramite,permiso','',$config['per_page'],$this->uri->segment(3));
       
	    $this->data['view'] = 'seguimientodocumento/seguimientodocumento';
       	$this->load->view('tema/topo',$this->data);
      
		
    }
	
    function adicionar(){

        if(!$this->permission->checkPermission($this->session->userdata('permiso'),'aSeguimientodocumento')){
          $this->session->set_flashdata('error','No tiene permiso para agregar ventas.');
          redirect(base_url());
        }

        $this->load->library('form_validation');
        $this->data['custom_error'] = '';
        
        if ($this->form_validation->run('seguimientodocumento') == false) {
           $this->data['custom_error'] = (validation_errors() ? true : false);
        } else {
$this->load->library('encrypt');   
            $dataSeguimientodocumento = $this->input->post('dataSeguimientodocumento');

            $data = array(
                'iddocumento' => set_value('iddocumento'),
                'dniaprobacion' =>  $this->encrypt->sha1($datausuario[0]->dni),
                'idareaactual' => $datausuario[0]->idarea,
                'idareasiguiente' => '',
                'observaciones' => set_value('observaciones'),
                'estadotramite' => 'T',
                 'fechainicio' => set_value('fechainicio'),
                'fechafin' => set_value('fechafin'),
                'permiso' => set_value('0')
            );

            if (is_numeric($id = $this->seguimientodocumento_model->add('seguimientodocumento', $data, true)) ) {
                $this->session->set_flashdata('success','Segumiento iniciado correctamente.');
                redirect('seguimientodocumento/editar/'.$id);

            } else {
                
                $this->data['custom_error'] = '<div class="form_error"><p>Ocurrió un error.</p></div>';
            }
        }
         
        $this->data['view'] = 'seguimientodocumento/adicionarSeguimientodocumento';
        $this->load->view('tema/topo', $this->data);
    }
    

    
    function editar() {
        if(!$this->permission->checkPermission($this->session->userdata('permiso'),'eSeguimientodocumento')){
          $this->session->set_flashdata('error','No tiene permiso para editar las ventas');
          redirect(base_url());
        }

        $this->load->library('form_validation');
        $this->data['custom_error'] = '';

        if ($this->form_validation->run('seguimientodocumento') == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {
            $this->load->library('encrypt');   
            $data = array(
                'iddocumento' => set_value('iddocumento'),
                'dniaprobacion' =>  $this->encrypt->sha1($datausuario[0]->dni),
                'idareaactual' => $datausuario[0]->idarea,
                'idareasiguiente' => '',
                'observaciones' => set_value('observaciones'),
                 'fechainicio' => set_value('fechainicio'),
                'fechafin' => set_value('fechafin'),
                'estadotramite' => set_value('estadotramite'),
                'permiso' => set_value('0')
            );


            if ($this->seguimientodocumento_model->edit('seguimientodocumento', $data, 'idseguimientodocumento', $this->input->post('idseguimientodocumento')) == TRUE) {
                $this->session->set_flashdata('success','Venta editada con éxito!');
                redirect(base_url() . 'index.php/seguimientodocumento/editar/'.$this->input->post('idseguimientodocumento'));
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ocurrió un error</p></div>';
            }
        }

        $this->data['result'] = $this->seguimientodocumento_model->getById($this->uri->segment(3));
        $this->data['tipodocumento'] = $this->seguimientodocumento_model->gettipodocumento($this->uri->segment(3));
        $this->data['view'] = 'seguimientodocumento/editarSeguimientodocumento';
        $this->load->view('tema/topo', $this->data);
   
    }

    public function visualizar(){
        if(!$this->permission->checkPermission($this->session->userdata('permiso'),'vSeguimientodocumento')){
          $this->session->set_flashdata('error','No tiene permiso para visualizar las ventas.');
          redirect(base_url());
        }

        $this->data['custom_error'] = '';
        $this->load->model('mapos_model');
        $this->data['result'] = $this->seguimientodocumento_model->getById($this->uri->segment(3));
        $this->data['tipodocumento'] = $this->seguimientodocumento_model->gettipodocumento($this->uri->segment(3));
        $this->data['area'] = $this->seguimientodocumento_model->getarea($this->uri->segment(3));

        $this->data['view'] = 'seguimientodocumento/visualizarSeguimientodocumento';
        $this->load->view('tema/topo', $this->data);
       
    }


    public function enviar(){
        if(!$this->permission->checkPermission($this->session->userdata('permiso'),'eSeguimientodocumento')){
          $this->session->set_flashdata('error','No tiene permiso para editar las ventas');
          redirect(base_url());
        }

        $this->load->library('form_validation');
        $this->data['custom_error'] = '';



        if ($this->form_validation->run('seguimientodocumento') == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {
            $this->load->library('encrypt');  
            $data = array(
                'iddocumento' => set_value('iddocumento'),
                'dniaprobacion' => $this->encrypt->sha1(set_value('dniaprobacion')),
                'idareaactual' => set_value('idareaactual'),
                'idareasiguiente' => set_value('idareasiguiente'),
                'observaciones' => set_value('observaciones'),
                 'fechainicio' => set_value('fechainicio'),
                'fechafin' => set_value('fechafin'),
                'estadotramite' => 'F',
                'permiso' => set_value('permiso')
            );

if($this->input->post('idareasiguiente')==10)
{

$data2 = array(
           'iddocumento' => set_value('iddocumento'),
                'fechafin' => set_value('fechafin'),
                'observaciones' => set_value('observaciones'),
                'estado' => 'F'
            );

    $this->seguimientodocumento_model->edit('documentos', $data2, 'iddocumento', $this->input->post('iddocumento'));
}

if($this->input->post('idareasiguiente')!=10){
  $data1 = array(
           'iddocumento' => set_value('iddocumento'),
                'dniaprobacion' => set_value('dniaprobacion'),
                'idareaactual' => set_value('idareasiguiente'),
                'idareasiguiente' => '',
                'fechainicio' => set_value('fechafin'),
                'fechafin' => '',
                'observaciones' => set_value('observaciones'),
                'estadotramite' => 'T',
                'permiso' => set_value('permiso')
            );

              $this->seguimientodocumento_model->add('seguimientodocumento', $data1);
   }

            if ($this->seguimientodocumento_model->edit('seguimientodocumento', $data, 'idseguimientodocumento', $this->input->post('idseguimientodocumento')) == TRUE) {
                $this->session->set_flashdata('success','Venta editada con éxito!');
                redirect(base_url() . 'index.php/seguimientodocumento/visualizar/'.$this->input->post('idseguimientodocumento'));
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ocurrió un error</p></div>';
            }



        }

        $this->data['result'] = $this->seguimientodocumento_model->getById($this->uri->segment(3));
        $this->data['view'] = 'seguimientodocumento/enviarseguimiento';
        $this->load->view('tema/topo', $this->data);
    }
	
    function excluir(){

        if(!$this->permission->checkPermission($this->session->userdata('permiso'),'dSeguimientodocumento')){
          $this->session->set_flashdata('error','No tiene permiso para eliminar las ventas');
          redirect(base_url());
        }
        
        $id =  $this->input->post('id');
        if ($id == null){

            $this->session->set_flashdata('error','Error al intentar eliminar la venta.');            
            redirect(base_url().'index.php/seguimientodocumento/gerenciar/');
        }


        $this->db->where('idseguimientodocumento', $id);
        $this->db->delete('seguimientodocumento');           

        $this->session->set_flashdata('success','Venta eliminada con éxito!');            
        redirect(base_url().'index.php/seguimientodocumento/gerenciar/');

    }

    public function autoCompleteTipodocumento(){
        
        if (isset($_GET['term'])){
            $q = strtolower($_GET['term']);
            $this->seguimientodocumento_model->autoCompleteTipodocumento($q);
        }

    }

    public function autoCompleteArea(){

$area=set_value('idareaactual');
        if (isset($_GET['term'])){
            $q = strtolower($_GET['term']);

            $this->seguimientodocumento_model->autoCompleteArea($q,$area);
        }

    }

    public function autoCompleteUsuario(){

        if (isset($_GET['term'])){
            $q = strtolower($_GET['term']);
            $this->seguimientodocumento_model->autoCompleteUsuario($q);
        }

    }

 public function autoCompleteAreaSiguiente(){

        if (isset($_GET['term'])){
            $q = strtolower($_GET['term']);
            $this->seguimientodocumento_model->autoCompleteAreaSiguiente($q);
        }

    }

    public function adicionarTipodocumento(){

        if(!$this->permission->checkPermission($this->session->userdata('permiso'),'eSeguimientodocumento')){
          $this->session->set_flashdata('error','No tiene permiso para editar la venta.');
          redirect(base_url());
        }

        $this->load->library('form_validation');
        $this->form_validation->set_rules('quantidade', 'Quantidade', 'trim|required|xss_clean');
        $this->form_validation->set_rules('idTipodocumento', 'Tipodocumento', 'trim|required|xss_clean');
        $this->form_validation->set_rules('idseguimientodocumentoTipodocumento', 'seguimientodocumento', 'trim|required|xss_clean');
        
        if($this->form_validation->run() == false){
           echo json_encode(array('result'=> false)); 
        }
        else{

            $preco = $this->input->post('preco');
            $quantidade = $this->input->post('quantidade');
            $subtotal = $preco * $quantidade;
            $Tipodocumento = $this->input->post('idTipodocumento');
            $data = array(
                'quantidade'=> $quantidade,
                'subTotal'=> $subtotal,
                'tipodocumento_id'=> $Tipodocumento,
                'seguimientodocumento_id'=> $this->input->post('idseguimientodocumentoTipodocumento'),
            );

                echo json_encode(array('result'=> true));
            }


        
        
      
    }

    function excluirTipodocumento(){

            if(!$this->permission->checkPermission($this->session->userdata('permiso'),'eSeguimientodocumento')){
              $this->session->set_flashdata('error','No tiene permiso para editar la venta.');
              redirect(base_url());
            }

            $ID = $this->input->post('idTipodocumento');
            if($this->seguimientodocumento_model->delete('itens_de_seguimientodocumento','idItens',$ID) == true){
                
                $quantidade = $this->input->post('quantidade');
                $Tipodocumento = $this->input->post('Tipodocumento');


                $sql = "UPDATE tipodocumento set estoque = estoque + ? WHERE idtipodocumento = ?";

                $this->db->query($sql, array($quantidade, $Tipodocumento));
                
                echo json_encode(array('result'=> true));
            }
            else{
                echo json_encode(array('result'=> false));
            }           
    }





  


}

