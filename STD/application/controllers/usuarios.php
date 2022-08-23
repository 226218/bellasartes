<?php

class Usuarios extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        if ((!$this->session->userdata('session_id')) || (!$this->session->userdata('logado'))) {
            redirect('mapos/login');
        }
        if(!$this->permission->checkPermission($this->session->userdata('permiso'),'cUsuario')){
          $this->session->set_flashdata('error','No tiene permiso para configurar los usuarios.');
          redirect(base_url());
        }

        $this->load->helper(array('form', 'codegen_helper'));
        $this->load->model('usuarios_model', '', TRUE);
        $this->data['menuUsuarios'] = 'Usuários';
        $this->data['menuConfiguracoes'] = 'Configurações';
    }

    function index(){
		$this->gerenciar();
	}

	function gerenciar(){
        
        $this->load->library('pagination');
        

        $config['base_url'] = base_url().'index.php/usuarios/gerenciar/';
        $config['total_rows'] = $this->usuarios_model->count('usuarios');
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

		$this->data['results'] = $this->usuarios_model->get($config['per_page'],$this->uri->segment(3));
       
	    $this->data['view'] = 'usuarios/usuarios';
       	$this->load->view('tema/topo',$this->data);

       
		
    }
	
    function adicionar(){  
          
        $this->load->library('form_validation');    
		$this->data['custom_error'] = '';
		
        if ($this->form_validation->run('usuarios') == false)
        {
             $this->data['custom_error'] = (validation_errors() ? '<div class="alert alert-danger">'.validation_errors().'</div>' : false);

        } else
        {     

            $this->load->library('encrypt');                       
            $data = array(
                    'nombres' => set_value('nombres'),
					'dni' => set_value('dni'),
					'apellidopaterno' => set_value('apellidopaterno'),
					'apellidomaterno' => set_value('apellidomaterno'),
					'cargo' => set_value('cargo'),
					'firmadigital' => set_value('firmadigital'),
					'email' => set_value('email'),
					'contrasenha' => $this->encrypt->sha1($this->input->post('contrasenha')),
					'telefono' => set_value('telefono'),
					'celular' => set_value('celular'),
					'estado' => set_value('estado'),
                    'permisos_id' => $this->input->post('permisos_id'),
					'fechaCreacion' => date('Y-m-d'),
                    'idarea' => set_value('idarea')
            );
           
			if ($this->usuarios_model->add('usuarios',$data) == TRUE)
			{
                                $this->session->set_flashdata('success','Usuário registrado con éxito!');
				redirect(base_url().'index.php/usuarios/adicionar/');
			}
			else
			{
				$this->data['custom_error'] = '<div class="form_error"><p>Ocurrió un error.</p></div>';

			}
		}
        
        $this->load->model('permisos_model');
        $this->data['permisos'] = $this->permisos_model->getActive('permisos','permisos.idPermiso,permisos.nombrecargo');   
		$this->data['view'] = 'usuarios/adicionarUsuario';
        $this->load->view('tema/topo',$this->data);
   
       
    }	
    
    function editar(){  
          
        $this->load->library('form_validation');    
		$this->data['custom_error'] = '';
        $this->form_validation->set_rules('nombres', 'Nombres', 'trim|required|xss_clean');
        $this->form_validation->set_rules('dni', 'dni', 'trim|required|xss_clean');
        $this->form_validation->set_rules('apellidopaterno', 'apellidopaterno', 'trim|required|xss_clean');
        $this->form_validation->set_rules('apellidomaterno', 'apellidomaterno', 'trim|required|xss_clean');
        $this->form_validation->set_rules('cargo', 'Número', 'trim|required|xss_clean');
        $this->form_validation->set_rules('firmadigital', 'firmadigital', 'trim|xss_clean');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
        $this->form_validation->set_rules('telefono', 'telefono', 'trim|required|xss_clean');
        $this->form_validation->set_rules('estado', 'Situação', 'trim|required|xss_clean');
        $this->form_validation->set_rules('permisos_id', 'Permissão', 'trim|required|xss_clean');

        if ($this->form_validation->run() == false)
        {
             $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">'.validation_errors().'</div>' : false);

        } else
        { 

            if ($this->input->post('idUsuarios') == 1 && $this->input->post('estado') == 0)
            {
                $this->session->set_flashdata('error','El usuario administrador no se puede desactivar!');
                redirect(base_url().'index.php/usuarios/editar/'.$this->input->post('idUsuarios'));
            }

            $contrasenha = $this->input->post('contrasenha'); 
            if($contrasenha != null){
                $this->load->library('encrypt');   
                $contrasenha = $this->encrypt->sha1($contrasenha);

                $data = array(
                        'nombres' => $this->input->post('nombres'),
                        'dni' => $this->input->post('dni'),
                        'apellidopaterno' => $this->input->post('apellidopaterno'),
                        'apellidomaterno' => $this->input->post('apellidomaterno'),
                        'cargo' => $this->input->post('cargo'),
                        'firmadigital' => $this->input->post('firmadigital'),
                        'email' => $this->input->post('email'),
                        'contrasenha' => $contrasenha,
                        'telefono' => $this->input->post('telefono'),
                        'celular' => $this->input->post('celular'),
                        'estado' => $this->input->post('estado'),
                        'permisos_id' => $this->input->post('permisos_id'),
                    'idarea' => set_value('idarea')
                );
            }  

            else{

                $data = array(
                        'nombres' => $this->input->post('nombres'),
                        'dni' => $this->input->post('dni'),
                        'apellidopaterno' => $this->input->post('apellidopaterno'),
                        'apellidomaterno' => $this->input->post('apellidomaterno'),
                        'cargo' => $this->input->post('cargo'),
                        'firmadigital' => $this->input->post('firmadigital'),
                        'email' => $this->input->post('email'),
                        'telefono' => $this->input->post('telefono'),
                        'celular' => $this->input->post('celular'),
                        'estado' => $this->input->post('estado'),
                        'permisos_id' => $this->input->post('permisos_id'),
                    'idarea' => set_value('idarea')
                );

            }  

           
			if ($this->usuarios_model->edit('usuarios',$data,'idUsuarios',$this->input->post('idUsuarios')) == TRUE)
			{
                $this->session->set_flashdata('success','Usuário editado con éxito!');
				redirect(base_url().'index.php/usuarios/editar/'.$this->input->post('idUsuarios'));
			}
			else
			{
				$this->data['custom_error'] = '<div class="form_error"><p>Ocorreu um erro</p></div>';

			}
		}

		$this->data['result'] = $this->usuarios_model->getById($this->uri->segment(3));
        $this->load->model('permisos_model');
        $this->data['permisos'] = $this->permisos_model->getActive('permisos','permisos.idPermiso,permisos.nombrecargo'); 

		$this->data['view'] = 'usuarios/editarUsuario';
        $this->load->view('tema/topo',$this->data);
			
      
    }
	
    function excluir(){
            $ID =  $this->uri->segment(3);
            $this->usuarios_model->delete('usuarios','idUsuarios',$ID);             
            redirect(base_url().'index.php/usuarios/gerenciar/');
    }




public function do_upload(){

        if(!$this->permission->checkPermission($this->session->userdata('permiso'),'aDocumento')){
          $this->session->set_flashdata('error','No tiene permiso para agregar archivos.');
          redirect(base_url());
        }
    $result = array();
    $imagedata = base64_decode($_POST['img_data']);
    $filename = md5(date("dmYhisA"));
    //Location to where you want to created sign image
    $file_name = './doc_signs/'.$filename.'.png';
    file_put_contents($file_name,$imagedata);
    $result['status'] = 1;
    $result['file_name'] = $file_name;
    echo json_encode($result);


        if ( ! $filename)
        {
            $error = array('error' => $this->upload->display_errors());

            $this->session->set_flashdata('error','Error al cargar el archivo, asegúrese de que la extensión del archivo se la permitida.');
            redirect(base_url() . 'index.php/documentos/adicionar/');
        }
        else
        {
            //$data = array('upload_data' => $this->upload->data());
            return $this->upload->data();

        }
    }







}



