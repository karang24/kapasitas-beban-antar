<?php
class Model_barang extends CI_Model{
	function __construct(){
		parent::__construct()
		;
	}
	
    var $table = "barang";
	
	function add_dtBarang($arrayData){
        $this->db->insert($this->table, $arrayData);
        return mysql_insert_id();
    }
	function display_dtBarang(){
		return $this->db->select('a.*,b.*')->from('barang a')->join('kategori b','a.kd_kategori=b.kd_kategori')->order_by('kd_barang')->where('kd_barang IS NOT NULL')->get()->result_array();
    }
	function delete_dtBarang($id){
		$this->db->where('kd_barang', $id);
		return $this->db->delete($this->table);
    }
	function detail_dtBarang($id){
		return $this->db->where('kd_barang',$id)->get('kd_barang')->result_array();
	}
	
	function edit_dtBarang($id,$arrayData){
        $this->db->where('kd_barang', $id);
        return $this->db->update($this->table, $arrayData); 
    }
    function get_all()
    {
        $this->db->get('barang');       
    }     

}
?>