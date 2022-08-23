<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class seguimientodocumento_model extends CI_Model {

	function __construct() {
        parent::__construct();
    }

    
    function get($table,$fields,$where='',$perpage=0,$start=0,$one=false,$array='array'){
        
        $this->db->select($fields.',documentos.nombredocumento,documentos.tipodocumento_id,documentos.apellidopaternosolicitante,documentos.apellidomaternosolicitante,
            documentos.nombressolicitante,tipodocumento.nombretipodocumento');
        $this->db->from($table);
        $this->db->join('documentos','seguimientodocumento.iddocumento=documentos.iddocumento');
         $this->db->join('tipodocumento',' tipodocumento.idtipodocumento = documentos.tipodocumento_id');

        $this->db->limit($perpage,$start);
        $this->db->order_by('idseguimientodocumento','desc');
        if($where){
            $this->db->where($where);
        }
        
        $query = $this->db->get();
        
        $result =  !$one  ? $query->result() : $query->row();
        return $result;
    }

    function getById($id){
        $this->db->where('idseguimientodocumento',$id);
        $this->db->limit(1);
        return $this->db->get('seguimientodocumento')->row();
    }
 function getarea($id){
        $this->db->where('idarea',$id);
        $this->db->limit(1);
        return $this->db->get('area')->row();
    }

 function getTodasAreas(){
$query = $this->db->query("SELECT * FROM area");
$result = $query->result_array();
return $result;
    }


    function getdocumentos($id){
        $this->db->where('iddocumento',$id);
        $this->db->limit(1);
        return $this->db->get('documentos')->row();
    }
    public function gettipodocumento($id){
      $this->db->where('idtipodocumento',$id);
        $this->db->limit(1);
        return $this->db->get('tipodocumento')->row();
    }




public function getdnidesencriptado($dni){


$cantidad=$this->db->count_all('usuarios');
$desencriptado='0';
for($i = 0;$i<=$cantidad;$i++)
{
$query = $this->db->query("SELECT * FROM usuarios where idUsuarios = ".$i." LIMIT 1");
$row = $query->row_array();

$this->load->library('encrypt');
 @$dniencrip= $this->encrypt->sha1(set_value($row['dni']));

if($dni=$dniencrip)
{
@$desencriptado=$row['dni'];
}
else{


}
$query='';

}


return $desencriptado;

}

    
    function add($table,$data,$returnId = false){
        $this->db->insert($table, $data);         
        if ($this->db->affected_rows() == '1')
		{
                        if($returnId == true){
                            return $this->db->insert_id($table);
                        }
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

    public function autoCompleteTipodocumento($q){

        $this->db->select('*');
        $this->db->limit(5);
        $this->db->like('descricao', $q);
        $query = $this->db->get('tipodocumento');
        if($query->num_rows > 0){
            foreach ($query->result_array() as $row){
                $row_set[] = array('label'=>$row['descricao'].' | Precio: € '.$row['precoSeguimientodocumento'].' | Stock: '.$row['estoque'],'estoque'=>$row['estoque'],'id'=>$row['idtipodocumento'],'preco'=>$row['precoSeguimientodocumento']);
            }
            echo json_encode($row_set);
        }
    }

    public function autoCompleteArea($q){

        $this->db->select('*');
        $this->db->limit(5);
        $this->db->like('nombrearea', $q);
        $query = $this->db->get('area');
        if($query->num_rows > 0){
            foreach ($query->result_array() as $row){
                $row_set[] = array('label'=>$row['nombrearea'].' | Teléfono: '.$row['telefono'],'id'=>$row['idarea']);
            }
            echo json_encode($row_set);
        }
    }

    public function autoCompleteUsuario($q){

        $this->db->select('*');
        $this->db->limit(5);
        $this->db->like('nome', $q);
        $this->db->where('estadopermiso',1);
        $query = $this->db->get('usuarios');
        if($query->num_rows > 0){
            foreach ($query->result_array() as $row){
                $row_set[] = array('label'=>$row['nome'].' | Teléfono: '.$row['telefono'],'id'=>$row['idUsuarios']);
            }
            echo json_encode($row_set);
        }
    }



        public function autoCompleteAreaSiguiente($q,$area){

        $this->db->select('*');
        $this->db->limit(5);
        $this->db->like('nombrearea', $q);
        $this->db->where('idarea !=',$area);
        $query = $this->db->get('area');
        if($query->num_rows > 0){
            foreach ($query->result_array() as $row){
                $row_set[] = array('label'=>$row['nombrearea'] ,'id'=>$row['idarea']);
            }
            echo json_encode($row_set);
        }
    }

  public function getUsuarios($id){
        $this->db->select('*');
        $this->db->from('usuarios');
        $this->db->where('idUsuarios',$id);
        return $this->db->get()->result();
    }



     public function autoCompleteAre($q){

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

/* End of file seguimientodocumento_model.php */
/* Location: ./application/models/seguimientodocumento_model.php */