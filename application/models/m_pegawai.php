<?php
class M_pegawai extends CI_Model{
	function __construct(){
		parent::__construct()
		;
	}
	
	function insert() {
        $insert_petugas = array(
            'id_pegawai' => $this->input->post('id_pegawai'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
			'level' => $this->input->post('level'),
			
        );

        $insert = $this->db->insert('pegawai', $insert_petugas);
        return $insert;
    }

    function updatedata(){
        $id_pegawai = $this->input->post('id_pegawai');
        $username = $this->input->post('username');
		$password = $this->input->post('password');
		$level = $this->input->post('level');		
		;
		$data = array(
                'id_pegawai'=>$id_pegawai,
				'username'=>$username,
                'password'=>$password,
				'level'=>$level,
				
				
				);
        $this->db->where(array('id_pegawai'=>$id_pegawai));
        $this->db->update('pegawai',$data);
    }

    function deletedata($id_pegawai){
        
        $this->db->where('id_pegawai', $id_pegawai);
        $this->db->delete('pegawai'); 
    }

    function cariPetugas($cari){
        $cari=$this->db->query("select * from petugas where id_petugas LIKE '%$cari%'  ");
        return $cari->result();
    }
    
    function filterdata($id_petugas){
        return $this->db->get_where('petugas',
        array('id_petugas'=>$id_petugas))->row();
    }
	
	function bacadata(){
        $baca = $this->db->get('pegawai');
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

   


}

?>