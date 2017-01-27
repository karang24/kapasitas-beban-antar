<?php
class M_kkp extends CI_Model{
	function __construct(){
		parent::__construct()
		;
	}
	
	function insertuser() {
		$id_user = $this->input->post('id_user');
		$username = $this->input->post('username');
        $password = $this->input->post('password');
		$level = $this->input->post('level');
		$nippos = $this->input->post('nippos');
		$id_kantor = $this->input->post('id_kantor');
        $insert_user = array(
			'username' => $username,
			'password' =>MD5($this->input->post('password')),
            'level' => $level,
			'nippos' => $nippos,   
			'id_kantor'=>$id_kantor, 
        );

        $insert = $this->db->insert('tb_user', $insert_user);
        return $insert;
    }

    function updateuser(){
        $id_user = $this->input->post('id_user');
		$username = $this->input->post('username');
        $password = $this->input->post('password');
		$level = $this->input->post('level');
		$nippos = $this->input->post('nippos');
		
		;
		$data = array(
                'id_user'=>$id_user,
				'username'=>$username,
                'password'=>MD5($this->input->post('password')),
				'level'=>$level,
				'nippos'=>$nippos,
				
				);
        $this->db->where(array('id_user'=>$id_user));
        $this->db->update('tb_user',$data);
    }
	

    function deleteuser($id_user){
        
        $this->db->where('id_user', $id_user);
        $this->db->delete('tb_user'); 
    }

    function cariGedung($cari){
        $cari=$this->db->query("select * from gedung where kd_gedung LIKE '%$cari%'  ");
        return $cari->result();
    }
	
	function carirekap($cari){
	  
		 $cari=$this->input->get('cari');
		$cari1=$this->input->get('cari1');
		$cari2=$this->input->get('cari2');
        $cari3=$this->db->query("select * from tb_rekap where nippos LIKE '$cari' AND  tgl_rekap BETWEEN '$cari1' and '$cari2' ");
        return $cari3->result();
    }
	function carirekap1($cari){
	 $cari=$this->input->get('cari');
			 	  $session_id = $this->session->userdata('id_kantor');
		 $cari=$this->input->get('cari');
        $cari3=$this->db->query("select * from tb_rekap where  th_rekap='$cari' AND id_kantor='$session_id' ");
        return $cari3->result();
    }
    
    function filterdata($id_user){
        return $this->db->get_where('tb_user',
        array('id_user'=>$id_user))->row();
    }
	
	function bacadata(){
      	  $session_id = $this->session->userdata('id_kantor');

        $baca = $this->db->query("select * from tb_petugas where  id_kantor='$session_id'");
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
	function bacadata1(){
		$session_id = $this->session->userdata('id_kantor');

        $baca = $this->db->query("select * from tb_user where id_kantor='$session_id'");
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

    function display_dtGedung(){
        return $this->db->select('*')->from('gedung')->group_by('kd_gedung')->where('kd_gedung IS NOT NULL')->get()->result_array();
    }
}

?>