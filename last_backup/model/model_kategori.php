<?php
class Model_kategori extends CI_Model{
	function __construct(){
		parent::__construct()
		;
	}
	
    var $table = "kategori";
	
	function add_dtKategori($arrayData){
        $this->db->insert($this->table, $arrayData);
        return mysql_insert_id();
    }
	function display_dtKategori(){
		return $this->db->select('*')->from('kategori')->group_by('kd_kategori')->where('kd_kategori IS NOT NULL')->get()->result_array();
    }

	function delete_dtKategori($id){
		$this->db->where('kd_kategori', $id);
		return $this->db->delete($this->table);
    }
	function detail_dtKategori($id){
		return $this->db->where('kd_kategori',$id)->get('kd_kategori')->result_array();
	}
	
	function edit_dtKategori($id,$arrayData){
        $this->db->where('id_petugas', $id);
        return $this->db->update($this->table, $arrayData); 
    }
}
?>