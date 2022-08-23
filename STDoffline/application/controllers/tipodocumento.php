<?php

class tipodocumento extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        if ((!$this->session->userdata('session_id')) || (!$this->session->userdata('logado'))) {
            redirect('mapos/login');
        }

        $this->load->helper(array('form', 'codegen_helper'));
        $this->load->model('tipodocumento_model', '', TRUE);
        $this->data['menutipodocumento'] = 'tipodocumento';
    }

    function index(){
	   $this->gerenciar();
    }

    function gerenciar(){
        
        if(!$this->permission->checkPermission($this->session->userdata('permiso'),'vTipodocumento')){
           $this->session->set_flashdata('error','No tiene permiso para visualizar productos.');
           redirect(base_url());
        }

        $this->load->library('table');
        $this->load->library('pagination');
        
        
        $config['base_url'] = base_url().'index.php/tipodocumento/gerenciar/';
        $config['total_rows'] = $this->tipodocumento_model->count('tipodocumento');
        $config['per_page'] = 10;
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
        $config['first_link'] = 'Primeira';
        $config['last_link'] = 'Última';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        
        $this->pagination->initialize($config); 	

	    $this->data['results'] = $this->tipodocumento_model->get('tipodocumento','idtipodocumento,nombretipodocumento,descripciontipodocumento,imagen','',$config['per_page'],$this->uri->segment(3));
       
	    $this->data['view'] = 'tipodocumento/tipodocumento';
       	$this->load->view('tema/topo',$this->data);
       
		
    }
	
    function adicionar() {

        if(!$this->permission->checkPermission($this->session->userdata('permiso'),'aTipodocumento')){
           $this->session->set_flashdata('error','No tiene permiso para agregar productos.');
           redirect(base_url());
        }

        $this->load->library('form_validation');
        $this->data['custom_error'] = '';

        if ($this->form_validation->run('tipodocumento') == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {

           
          


if($this->do_upload() != null)
{
    $arquivo = $this->do_upload();
            $file = $arquivo['file_name'];
            $path = $arquivo['full_path'];
            $url = base_url().'assets/bpmtipodocumento/'.$file;
            $tamanho = $arquivo['file_size'];
            $tipo = $arquivo['file_ext'];
  }



            $data = array(
                'nombretipodocumento' => set_value('nombretipodocumento'),
                'descripciontipodocumento' => set_value('descripciontipodocumento'),
                'imagen' => $url
            );


            if ($this->tipodocumento_model->add('tipodocumento', $data) == TRUE) {
                $this->session->set_flashdata('success','Producto agregado con éxito!');
                redirect(base_url() . 'index.php/tipodocumento/adicionarTipodocumento/');
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>An Error Occured.</p></div>';
            }


        }
        $this->data['view'] = 'tipodocumento/adicionarTipodocumento';
        $this->load->view('tema/topo', $this->data);
     
    }

    function editar() {

        if(!$this->permission->checkPermission($this->session->userdata('permiso'),'eTipodocumento')){
           $this->session->set_flashdata('error','No tiene permiso para editar productos.');
           redirect(base_url());
        }
        $this->load->library('form_validation');
        $this->data['custom_error'] = '';

        if ($this->form_validation->run('tipodocumento') == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {
            $data = array(
                'nombretipodocumento' => $this->input->post('nombretipodocumento'),
                'descripciontipodocumento' => $this->input->post('descripciontipodocumento'),
                'imagen' => $this->input->post('$imagen')
            );

            if ($this->tipodocumento_model->edit('tipodocumento', $data, 'idtipodocumento', $this->input->post('idtipodocumento')) == TRUE) {
                $this->session->set_flashdata('success','Producto editado con éxito!');
                redirect(base_url() . 'index.php/tipodocumento/editarTipodocumento/'.$this->input->post('idtipodocumento'));
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>An Error Occured</p></div>';
            }
        }

        $this->data['result'] = $this->tipodocumento_model->getById($this->uri->segment(3));

        $this->data['view'] = 'tipodocumento/editarTipodocumento';
        $this->load->view('tema/topo', $this->data);
     
    }


    function visualizar() {
      
        if(!$this->permission->checkPermission($this->session->userdata('permiso'),'vTipodocumento')){
           $this->session->set_flashdata('error','No tiene permiso para visualizar productos.');
           redirect(base_url());
        }

        $this->data['result'] = $this->tipodocumento_model->getById($this->uri->segment(3));

        if($this->data['result'] == null){
            $this->session->set_flashdata('error','Producto no encontrado.');
            redirect(base_url() . 'index.php/tipodocumento/editar/'.$this->input->post('idtipodocumento'));
        }

        $this->data['view'] = 'tipodocumento/visualizarTipodocumento';
        $this->load->view('tema/topo', $this->data);
     
    }
	
    function excluir(){

        if(!$this->permission->checkPermission($this->session->userdata('permiso'),'dTipodocumento')){
           $this->session->set_flashdata('error','No tiene permiso para eliminar productos.');
           redirect(base_url());
        }

        
        $id =  $this->input->post('id');
        if ($id == null){

            $this->session->set_flashdata('error','Error al intentar eliminar el producto.');            
            redirect(base_url().'index.php/tipodocumento/gerenciar/');
        }

        $this->db->where('tipodocumento_id', $id);
        $this->db->delete('tipodocumento_os');


        $this->tipodocumento_model->delete('tipodocumento','idtipodocumento',$id);             
        

        $this->session->set_flashdata('success','Tipodocumento eliminado con éxito!');            
        redirect(base_url().'index.php/tipodocumento/gerenciar/');
    }
    
  public function do_upload(){

        if(!$this->permission->checkPermission($this->session->userdata('permiso'),'aTipodocumento')){
          $this->session->set_flashdata('error','No tiene permiso para agregar archivos.');
          redirect(base_url());
        }
    

        $config['upload_path'] = './assets/bpmtipodocumento/';
        $config['allowed_types'] = 'jpg|jpeg|png|JPG|JPEG|PNG';
           $config['max_size'] = '1000000';
        $config['max_width']  = '1024000';
        $config['max_height']  = '768000';
        $config['encrypt_name'] = true;



        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload())
        {
            $error = array('error' => $this->upload->display_errors());

            $this->session->set_flashdata('error','Error al cargar el archivo, asegúrese de que la extensión del archivo se la permitida.');
            redirect(base_url() . 'index.php/tipodocumento/adicionar/');
        }
        else
        {
            //$data = array('upload_data' => $this->upload->data());
            return $this->upload->data();
        }
    }


}



