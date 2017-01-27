<?php
class M_superv extends CI_Model{
	function __construct(){
		parent::__construct()
		;
	}
	
	function insert() {
        $insert_kategori = array(
            'kd_kategori' => $this->input->post('kd_kategori'),
			'nama_kategori' => $this->input->post('nama_kategori'),
        );

        $insert = $this->db->insert('kategori', $insert_kategori);
        return $insert;
    }
	function insertrekap() {
        $insert_rekap = array(
		    'id_rekap' => $this->input->post('id_rekap'),
            'tgl_rekap' => $this->input->post('tgl_rekap'),
			
			'nippos' => $this->input->post('nippos'),
			'presentase' => $this->input->post('presentase'),
			'status' => $this->input->post('status'),
			'terkirim' => $this->input->post('terkirim'),
			'id_kantor' => $this->input->post('id_kantor'),
        );
		

        $insert = $this->db->insert('tb_rekap', $insert_rekap);
        return $insert;
    }

    function updatedata(){
        $kd_kategori = $this->input->post('kd_kategori');
		$nama_kategori = $this->input->post('nama_kategori');
		;
		$data = array(
                'kd_kategori'=>$kd_kategori,
				'nama_kategori'=>$nama_kategori,
				);
        $this->db->where(array('kd_kategori'=>$kd_kategori));
        $this->db->update('kategori',$data);
    }


    function caripetugas($cari){
		 $cari=$this->input->get('cari');
		$cari1=$this->input->get('cari1');
		$cari2=$this->input->get('cari2');
        $cari3=$this->db->query("select * from tb_kba where nippos LIKE '$cari' AND  b_pengiriman='$cari1' AND th_pegeriman='$cari2' ");
        return $cari3->result();
    }
	 function carirekap2($cari){
		 
		 $cari=$this->input->get('cari');
		$cari1=$this->input->get('cari1');
		$cari2=$this->input->get('cari2');
        $cari3=$this->db->query("select * from tb_rekap where nippos LIKE '$cari' AND  tgl_rekap BETWEEN '$cari1' and '$cari2' ");
        return $cari3->result();
    }
	 function carirekap21($cari1){
		$session_id = $this->session->userdata('id_kantor');
		$cari1=$this->input->get('cari1');
		$cari2=$this->input->get('cari2');
        $cari3=$this->db->query("select * from tb_rekap where id_kantor='59400' AND tgl_rekap BETWEEN '$cari1' and '$cari2' ");
        return $cari3->result();
    }
    function carirekap1($cari){
		 $cari=$this->input->get('cari');
		$session_id = $this->session->userdata('id_kantor');
        $cari3=$this->db->query("select * from tb_rekap where nippos LIKE '$cari'  AND id_kantor='$session_id'");
        return $cari3->result();
    }
	//rembang
	  function carirekap6($cari){
		$cari1=$this->input->get('cari1');
		$cari2=$this->input->get('cari2');
        $cari3=$this->db->query("select * from tb_rekap where id_kantor='59200' AND tgl_rekap BETWEEN '$cari1' and '$cari2' ");
        return $cari3->result();
    }
	
	//kudus
	  function carirekap7($cari){
		$cari1=$this->input->get('cari1');
		$cari2=$this->input->get('cari2');
        $cari3=$this->db->query("select * from tb_rekap where id_kantor='59300' AND tgl_rekap BETWEEN '$cari1' and '$cari2' ");
        return $cari3->result();
    }
	function carirekap11($cari){
		$cari1=$this->input->get('cari1');
		$cari2=$this->input->get('cari2');
        $cari3=$this->db->query("select * from tb_rekap where id_kantor='59400' AND tgl_rekap BETWEEN '$cari1' and '$cari2' ");
        return $cari3->result();
    }//rembang
	  function carirekap12($cari){
		$cari1=$this->input->get('cari1');
		$cari2=$this->input->get('cari2');
        $cari3=$this->db->query("select * from tb_rekap where id_kantor='59200' AND tgl_rekap BETWEEN '$cari1' and '$cari2' ");
    }
	
	//kudus
	  function carirekap13($cari){
		$cari1=$this->input->get('cari1');
		$cari2=$this->input->get('cari2');
        $cari3=$this->db->query("select * from tb_rekap where id_kantor='59300' AND tgl_rekap BETWEEN '$cari1' and '$cari2' ");
        return $cari3->result();
    }
	
	 function carirekap3($cari){
	
		 $cari=$this->input->get('cari');
		$cari1=$this->input->get('cari1');
		$cari2=$this->input->get('cari2');
        $cari3=$this->db->query("select * from tb_rekap where b_rekap='$cari' AND  tgl_rekap='$cari1' ");
        return $cari3->result();
    }

    
    function filterdata($kd_kategori){
        return $this->db->get_where('kategori',
        array('kd_kategori'=>$kd_kategori))->row();
    }
	
	function bacadata(){
        $baca = $this->db->query("select * from tb_petugas where jabatan='Pengantar Pos' ");
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
		function bacadata1(){
					 $cari=$this->input->get('cari');

			  $session_id = $this->session->userdata('id_kantor');

        $baca = $this->db->query("select * from tb_rekap where id_kantor='$session_id'AND nippos='$cari'");
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
	function bacadata10(){
					 $cari=$this->input->get('cari');

			  $session_id = $this->session->userdata('id_kantor');

        $baca = $this->db->query("
SELECT *, DATE_FORMAT(tgl_rekap, '%M')as tanggal from tb_rekap where nippos='$cari'");
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
	
	function bacadata11(){
					 $cari=$this->input->get('cari');

			  $session_id = $this->session->userdata('id_kantor');

        $baca = $this->db->query("
SELECT *, DATE_FORMAT(tgl_rekap, '%M')as tanggal from tb_rekap");
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
	//jepara
	function bacadata8(){
			 	  $session_id = $this->session->userdata('id_kantor');
        $baca = $this->db->query("select * from tb_rekap where th_rekap='$cari' AND  id_kantor=' $session_id'");
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
		function bacadata20(){
        $baca = $this->db->query("select * from tb_rekap where b_rekap='$cari' AND  id_kantor='59400'");
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
	//rembang
	function bacadata2(){
        $baca = $this->db->query("select * from tb_kba where nippos");
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
		
    }
	function bacadata18(){
        $baca = $this->db->query("select * from tb_bulan ");
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
		
    }
	function bacadata3(){
        $baca = $this->db->query("select * from tb_petugas where nippos");
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
	}
    function display_dtKategori(){
        return $this->db->select('*')->from('kategori')->group_by('kd_kategori')->where('kd_kategori IS NOT NULL')->get()->result_array();
    }
}

?>