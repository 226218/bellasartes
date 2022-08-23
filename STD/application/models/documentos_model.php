<?php
class documentos_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function get($table,$fields,$where='',$perpage=0,$start=0,$one=false,$array='array'){

$datausuario = $this->getUsuarios($this->session->userdata('id'));
        
        $this->db->distinct();
             $this->db->select('documentos.iddocumento, documentos.tipodocumento_id, documentos.nombredocumento, documentos.descripciondocumento, documentos.estado, 
                documentos.dnisolicitante, documentos.emailsolicitante, documentos.apellidopaternosolicitante, documentos.apellidomaternosolicitante, documentos.nombressolicitante, 
                documentos.fechainicio, documentos.fechafin, documentos.observaciones, documentos.archivodocumento,tipodocumento.nombretipodocumento');
        $this->db->from($table);

$this->db->join('tipodocumento','tipodocumento.idtipodocumento = documentos.tipodocumento_id','INNER');
$this->db->join('seguimientodocumento','seguimientodocumento.iddocumento = documentos.iddocumento','INNER');

        $this->db->limit($perpage,$start);
        $this->db->order_by('documentos.iddocumento','desc');

          $this->db->where('tipodocumento.idtipodocumento = documentos.tipodocumento_id AND seguimientodocumento.iddocumento = documentos.iddocumento AND seguimientodocumento.idareaactual =  '.$datausuario[0]->idarea. ' OR seguimientodocumento.iddocumento = ' .$datausuario[0]->idarea);  
        
        $query = $this->db->get();
        
        $result =  !$one  ? $query->result() : $query->row();
        return $result;



    }

 public function search($nombredoc, $dnisolicitan){
        
        if($nombredoc != null){
            $this->db->like('nombredocumento',$nombredoc);
        }

        if($dnisolicitan != null){
          $this->db->like('dnisolicitante',$dnisolicitan);
        }
          $this->db->join('tipodocumento','tipodocumento.idtipodocumento = documentos.tipodocumento_id');

        $this->db->limit(10);
        return $this->db->get('documentos')->result();
    }

    function getById($id){
        $this->db->where('iddocumento',$id);
        $this->db->limit(1);
        return $this->db->get('documentos')->row();
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

        return $this->db->count_all_results($table);
	
    }

 public function gettipodocumento($id){
        $this->db->where('idtipodocumento',$id);
       return $this->db->get('tipodocumento')->row();
    }

  public function getUsuarios($id){
        $this->db->select('*');
        $this->db->from('usuarios');
        $this->db->where('idUsuarios',$id);
        return $this->db->get()->result();
    }


    public function autoCompleteTipoDocumento($q){

        $this->db->select('*');
        $this->db->limit(5);
        $this->db->like('nombretipodocumento', $q);
        $query = $this->db->get('tipodocumento');
        if($query->num_rows > 0){
            foreach ($query->result_array() as $row){
                $row_set[] = array('label'=>$row['nombretipodocumento'],'id'=>$row['idtipodocumento']);
            }
            echo json_encode($row_set);
        }
    }

}