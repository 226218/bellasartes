<?php
class Relatorios_model extends CI_Model {

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

    function count($table) {
        return $this->db->count_all($table);
    }
    
    public function areaCustom($dataInicial = null,$dataFinal = null){
        
        if($dataInicial == null || $dataFinal == null){
            $dataInicial = date('Y-m-d');
            $dataFinal = date('Y-m-d');
        }
        $query = "SELECT * FROM area WHERE fechaCreacion BETWEEN ? AND ?";
        return $this->db->query($query, array($dataInicial,$dataFinal))->result();
    }

    public function areaRapid(){
        $this->db->order_by('nomeArea','asc');
        return $this->db->get('area')->result();
    }

    public function tipodocumentoRapid(){
        $this->db->order_by('nombretipodocumento','asc');
        return $this->db->get('tipodocumento')->result();
    }

    public function documentosRapid(){
        $this->db->order_by('nome','asc');
        return $this->db->get('documentos')->result();
    }

    public function osRapid(){
        $this->db->select('os.*,area.nomeArea');
        $this->db->from('os');
        $this->db->join('area','area.idarea = os.area_id');
        return $this->db->get()->result();
    }

    public function tipodocumentoRapidMin(){
        $this->db->order_by('idtipodocumento','asc');
        return $this->db->get('tipodocumento')->result();
    }

    public function tipodocumentoCustom($precoInicial = null,$precoFinal = null,$estoqueInicial = null,$estoqueFinal = null){
        $wherePreco = "";
        $whereEstoque = "";
        if($precoInicial != null){
            $wherePreco = "AND precoSeguimientodocumento BETWEEN ".$this->db->escape($precoInicial)." AND ".$this->db->escape($precoFinal);
        }
        if($estoqueInicial != null){
            $whereEstoque = "AND estoque BETWEEN ".$this->db->escape($estoqueInicial)." AND ".$this->db->escape($estoqueFinal);
        }
        $query = "SELECT * FROM tipodocumento WHERE estoque >= 0 $wherePreco $whereEstoque";
        return $this->db->query($query)->result();
    }

    public function documentosCustom($dataInicial = null,$dataFinal = null,$dataInicial1 = null,$dataFinal1 = null,$estoqueInicial = null,$estoqueFinal = null){
         
        if($dataInicial == null || $dataInicial1 == null){
            $dataInicial = date('Y-m-d');
            $dataInicial1 = date('Y-m-d');
        }

         if($dataFinal == null || $dataFinal1 == null){
            $dataFinal = date('Y-m-d');
            $dataFinal1 = date('Y-m-d');
        }

        if($precoInicial != null){
            $wherePreco = "AND precoSeguimientodocumento BETWEEN ".$this->db->escape($precoInicial)." AND ".$this->db->escape($precoFinal);
        }
        if($estoqueInicial != null){
            $whereEstoque = "AND estoque BETWEEN ".$this->db->escape($estoqueInicial)." AND ".$this->db->escape($estoqueFinal);
        }
        $query = "SELECT * FROM documentos WHERE $wherePreco $whereEstoque";
        return $this->db->query($query)->result();
    }





    public function osCustom($dataInicial = null,$dataFinal = null,$Area = null,$responsavel = null,$status = null){
        $whereData = "";
        $whereArea = "";
        $whereResponsavel = "";
        $whereStatus = "";
        if($dataInicial != null){
            $whereData = "AND dataInicial BETWEEN ".$this->db->escape($dataInicial)." AND ".$this->db->escape($dataFinal);
        }
        if($Area != null){
            $whereArea = "AND area_id = ".$this->db->escape($Area);
        }
        if($responsavel != null){
            $whereResponsavel = "AND usuarios_id = ".$this->db->escape($responsavel);
        }
        if($status != null){
            $whereStatus = "AND status = ".$this->db->escape($status);
        }
        $query = "SELECT os.*,area.nomeArea FROM os LEFT JOIN area ON os.area_id = area.idarea WHERE idOs != 0 $whereData $whereArea $whereResponsavel $whereStatus";
        return $this->db->query($query)->result();
    }


   

    public function seguimientodocumentoRapid(){
        $this->db->select('seguimientodocumento.*,area.nombrearea, usuarios.nome');
        $this->db->from('seguimientodocumento');
        $this->db->join('area','area.idarea = seguimientodocumento.area_id');
        $this->db->join('usuarios', 'usuarios.idUsuarios = seguimientodocumento.usuarios_id');
        return $this->db->get()->result();
    }


    public function seguimientodocumentoCustom($dataInicial = null,$dataFinal = null,$Area = null,$responsavel = null){
        $whereData = "";
        $whereArea = "";
        $whereResponsavel = "";
        $whereStatus = "";
        if($dataInicial != null){
            $whereData = "AND dataSeguimientodocumento BETWEEN ".$this->db->escape($dataInicial)." AND ".$this->db->escape($dataFinal);
        }
        if($Area != null){
            $whereArea = "AND area_id = ".$this->db->escape($Area);
        }
        if($responsavel != null){
            $whereResponsavel = "AND usuarios_id = ".$this->db->escape($responsavel);
        }
       
        $query = "SELECT seguimientodocumento.*,area.nomeArea,usuarios.nome FROM seguimientodocumento LEFT JOIN area ON seguimientodocumento.area_id = area.idarea LEFT JOIN usuarios ON seguimientodocumento.usuarios_id = usuarios.idUsuarios WHERE idseguimientodocumento != 0 $whereData $whereArea $whereResponsavel";
        return $this->db->query($query)->result();
    }
}