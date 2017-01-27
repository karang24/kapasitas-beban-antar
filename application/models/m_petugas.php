<?php
class M_petugas extends CI_Model{
	function __construct(){
		parent::__construct()
		;
	}
	
	function insert() {
        $insert_barang = array(
            'nippos' => $this->input->post('nippos'),
			'nama_petugas' => $this->input->post('nama_petugas'),
            'alamat' => $this->input->post('alamat'),
            'jabatan' => $this->input->post('jabatan'),
            'no_hp' => $this->input->post('no_hp'),
			'id_kantor' => $this->input->post('id_kantor'),
            
        );
        $insert = $this->db->insert('tb_petugas', $insert_barang);
        return $insert;
    }

    function updatedata(){
        $nippos = $this->input->post('nippos');
		$nama_petugas = $this->input->post('nama_petugas');
        $alamat = $this->input->post('alamat');
        $jabatan = $this->input->post('jabatan');
        $no_hp = $this->input->post('no_hp');
        $id_kantor = $this->input->post('id_kantor');
		;
		$data = array(
                'nippos'=>$nippos,
                'nama_petugas'=>$nama_petugas,
				'alamat'=>$alamat,
                'jabatan'=>$jabatan,
                'no_hp'=>$no_hp,
				'id_kantor'=>$id_kantor,
                
				);
        $this->db->where(array('nippos'=>$nippos));
        $this->db->update('tb_petugas',$data);
    }

    function deletepetugas($nippos){
        
        $this->db->where('nippos', $nippos);
        $this->db->delete('tb_petugas'); 
    }
	

    function cariBarang($cari){
        $cari=$this->db->query("select * from barang where kd_barang LIKE '%$cari%'  ");
        return $cari->result();
    }
    
    function filterdata($nippos){
        return $this->db->get_where('tb_petugas',
        array('nippos'=>$nippos))->row();
    }
	
	function bacadata(){
			  $session_id = $this->session->userdata('id_kantor');

        $baca = $this->db->query("select * from tb_petugas where jabatan='Pengantar Pos' and id_kantor='$session_id'");
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
    
    function bacadata1(){
    $baca = $this->db->get('tb_petugas');
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    function display_dtBarang(){
        return $this->db->select('a.*,b.*')->from('barang a')->join('kategori b','a.kd_kategori=b.kd_kategori')->order_by('kd_barang')->where('kd_barang IS NOT NULL')->get()->result_array();
    }

    function detail_dtBarang($id){
        return $this->db->where('kd_barang',$id)->get('kd_barang')->result_array();
    }
}

?>
