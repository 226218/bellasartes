<?php
class Mapos_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    
    function get($table,$fields,$where='',$perpage=0,$start=0,$one=false,$array='array'){
        
        $this->db->select($fields);
        $this->db->from($table);
        $this->db->limit($perpage,$start);
        if($where){
            $this->db->where($where);
        }
        
        $query = $this->db->get();
        
        $result =  !$one  ? $query->result() : $query->row();
        return $result;
    }

    function getById($id){
        $this->db->from('usuarios');
        $this->db->select('usuarios.*, permisos.nombrecargo as permiso');
        $this->db->join('permisos', 'permisos.idPermiso = usuarios.permisos_id', 'left');
        $this->db->where('idUsuarios',$id);
        $this->db->limit(1);
        return $this->db->get()->row();
    }

    public function alterarcontrasenha($contrasenha,$oldcontrasenha,$id){

        $this->db->where('idUsuarios', $id);
        $this->db->limit(1);
        $usuario = $this->db->get('usuarios')->row();

        if($usuario->contrasenha != $oldcontrasenha){
            return false;
        }
        else{
            $this->db->set('contrasenha',$contrasenha);
            $this->db->where('idUsuarios',$id);
            return $this->db->update('usuarios');    
        }

        
    }

    function pesquisar($termo){
         $data = array();
         // buscando area
         $this->db->like('nombrearea',$termo);
         $this->db->limit(5);
         $data['area'] = $this->db->get('area')->result();

         
         // buscando tipodocumento
         $this->db->like('nombretipodocumento',$termo);
         $this->db->limit(5);
         $data['tipodocumento'] = $this->db->get('tipodocumento')->result();

         //buscando serviços
         $this->db->like('nombredocumento',$termo);
         $this->db->limit(5);
         $data['documentos'] = $this->db->get('documentos')->result();

         return $data;


    }

    
    function add($table,$data){
        $this->db->insert($table, $data);         
        if ($this->db->affected_rows() == '1')
		{
			return TRUE;
		}
		
		return FALSE;       
    }
    
    function edit($table,$data,$fieldID,$ID){
        $this->db->where($fieldID,$ID);
        $this->db->update($table, $data);

        if ($this->db->affected_rows() >= 0)
		{
			return TRUE;
		}
		
		return FALSE;       
    }
    
    function delete($table,$fieldID,$ID){
        $this->db->where($fieldID,$ID);
        $this->db->delete($table);
        if ($this->db->affected_rows() == '1')
		{
			return TRUE;
		}
		
		return FALSE;        
    }   
	
	function count($table){
		return $this->db->count_all($table);
	}

  

    function gettipodocumentoMinimo(){

        $sql = "SELECT * FROM tipodocumento "; 
        return $this->db->query($sql)->result();

    }




    public function editLogo($id, $logo){
        
        $this->db->set('url_logo', $logo); 
        $this->db->where('id', $id);
        return $this->db->update('emitente'); 
         
    }
}