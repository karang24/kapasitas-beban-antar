<?php
class Model_ruangan extends CI_Model{
	function __construct(){
		parent::__construct()
		;
	}
	
    var $table = "ruangan";
	
	function add_dtRuangan($arrayData){
        $this->db->insert($this->table, $arrayData);
        return mysql_insert_id();
    }
	function display_dtRuangan(){
		return $this->db->select('a.*,b.*')->from('ruangan a')->join('gedung b','a.kd_gedung=b.kd_gedung')->group_by('a.kd_ruangan')->where('a.kd_ruangan IS NOT NULL')->get()->result_array();
    }
	function delete_dtRuangan($id){
		$this->db->where('kd_ruangan', $id);
		return $this->db->delete($this->table);
    }
	function detail_dtRuangan($id){
		return $this->db->where('kd_ruangan',$id)->get('ruangan')->result_array();
	}
	
	function edit_dtRuangan($id,$arrayData){
        $this->db->where('kd_ruangan', $id);
        return $this->db->update($this->table, $arrayData); 
    }
}
?>