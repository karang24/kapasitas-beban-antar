<?php
class Model_penempatan extends CI_Model{
	function __construct(){
		parent::__construct()
		;
	}
	
    var $table = "penempatan_brg";
	
	function add_dtPenempatan($arrayData){
        $this->db->insert($this->table, $arrayData);
        return mysql_insert_id();
    }
	function display_dtPenempatan(){
		return $this->db->select('a.*,b.*,c.*,d.*')->from('penempatan_brg a')->join('ruangan b','a.kd_ruangan=b.kd_ruangan')->join('petugas c','a.id_petugas=c.id_petugas')->join('barang d','a.kd_barang=d.kd_barang')->group_by('a.no_penempatan')->where('a.no_penempatan IS NOT NULL')->get()->result_array();
    }
	function delete_dtPenempatan($id){
		$this->db->where('no_penempatan', $id);
		return $this->db->delete($this->table);
    }
	function detail_dtPenempatan($id){
		return $this->db->where('no_penempatan',$id)->get('no_penempatan')->result_array();
	}
	
	function edit_dtPenempatan($id,$arrayData){
        $this->db->where('no_penempatan', $id);
        return $this->db->update($this->table, $arrayData); 
    }
}
?>