<?php
class M_kba extends CI_Model{
	function __construct(){
		parent::__construct()
		;
	}
    
    function get(){
        return $this->db->get("ruangan");
    }
    
	function insert() {
        $insert_ruangan = array(
            'id_kba' => $this->input->post('id_kba'),
            'nippos' => $this->input->post('nippos'),
			'jumlah' => $this->input->post('jumlah'),
            'terkirim' => $this->input->post('terkirim'),
			't_pengiriman' => $this->input->post('t_pengiriman'),			
		
			'id_kantor' => $this->input->post('id_kantor'),  			
        );
        $insert = $this->db->insert('tb_kba', $insert_ruangan);
        return $insert;
    }

    function updatedata(){
        $id_kba = $this->input->post('id_kba');
        $nippos = $this->input->post('nippos');
		$jumlah = $this->input->post('jumlah');
        $terkirim = $this->input->post('terkirim');
		 $id_kantor = $this->input->post('id_kantor');
		;
		$data = array(
                'id_kba'=>$id_kba,
                'nippos'=>$nippos,
				'jumlah'=>$jumlah,
                'terkirim'=>$terkirim,
				'id_kantor'=>$id_kantor,
				);
        $this->db->where(array('id_kba'=>$id_kba));
        $this->db->update('tb_kba',$data);
    }

    function deletedata($id_kba){ 
        $this->db->where('id_kba', $id_kba);
        $this->db->delete('tb_kba'); 
    }

    function cariRuangan($cari){
        $cari=$this->db->query("select * from ruangan where kd_ruangan LIKE '%$cari%'  ");
        return $cari->result();
    }
    
    function filterdata($id_kba){
        return $this->db->get_where('tb_kba',
        array('id_kba'=>$id_kba))->row();
    }
	
	function bacadata(){
		$session_id = $this->session->userdata('id_kantor');
		$baca = $this->db->query("select * from tb_kba where  id_kantor='$session_id'");
       
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
	    function bacadata21(){
        $baca = $this->db->get('tb_kantor');
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
	   function bacadata2(){
        $baca = $this->db->get('tb_tanggal');
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
	function bacadata4(){
        $baca = $this->db->get('tb_tahun');
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
	}
	   function bacadata3(){
        $baca = $this->db->get('tb_bulan');
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data2){
                $hasil2[] = $data2;
            }
            return $hasil2;
        }
    }

        function display_dtRuangan(){
        return $this->db->select('a.*,b.*')->from('ruangan a')->join('gedung b','a.kd_gedung=b.kd_gedung')->order_by('a.kd_gedung')->where('a.kd_ruangan IS NOT NULL')->get()->result_array();
    }
}

?>