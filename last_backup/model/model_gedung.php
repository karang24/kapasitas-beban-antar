<?php
class Model_gedung extends CI_Model{
	function __construct(){
		parent::__construct()
		;
	}
	
    var $table = "gedung";
	
	function add_dtGedung($arrayData){
        $this->db->insert($this->table, $arrayData);
        return mysql_insert_id();
    }

	function display_dtGedung(){
		return $this->db->select('*')->from('gedung')->group_by('kd_gedung')->where('kd_gedung IS NOT NULL')->get()->result_array();
    }
	
	function delete_dtGedung($id){
		$this->db->where('kd_gedung', $id);
		return $this->db->delete($this->table);
    }
	function detail_dtGedung($id){
		return $this->db->where('kd_gedung',$id)->get('gedung')->result_array();
	}
	
	function edit_dtGedung($id,$arrayData){
        $this->db->where('kd_gedung', $id);
        return $this->db->update($this->table, $arrayData); 
    }
}
?>