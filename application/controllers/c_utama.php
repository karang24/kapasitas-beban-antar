<?php 
class C_utama extends CI_Controller {

    function __construct(){
		parent::__construct();
        session_start();
		if ($this->session->userdata('username')=="") {
			redirect('login');
		}
        $this->load->model('m_user');
	}
    
	function index()
	{
		$this->load->view('utama/home');
	}
    
    function viewuser()
    {
        $id_petugas=$this->session->userdata('id_petugas');
        $data['result']=$this->m_user->display_dtUser();
        $data['menu_user']=' active';
        $this->load->view('utama/petugas/listpetugas',$data);
    }

    function adduser()
    { 
        $this->load->view('utama/petugas/addpetugas');
       
    }

    function insertuser()
    {
       $this->load->model('m_user');
       $this->m_user->insert();
       redirect('ws_client_data');
    }

    function updatedata($id_petugas){
        if($_POST==NULL){
            $this->load->model('m_user');
            $data['hasil'] = $this->m_user->filterdata($id_petugas);
            $this->load->view('utama/petugas/editpetugas',$data);
        }
        else{
            $this->load->model('m_user');
            $this->m_user->updatedata();
            redirect('ws_client_data');
        }
    }

    function deletedata($id_petugas){
 
        $this->load->model('m_user');
        $this->m_user->deletedata($id_petugas);
        redirect('ws_client_data');
    }

    function cariPetugas(){
        $cari=$this->input->get('cari');
        $this->load->model('m_user');
        $beda['cari']=$this->m_user->cariPetugas($cari);
        $this->load->view('utama/petugas/cariPetugas',$beda);   
    }
    function filterdata($id_petugas){
        return $this->db->get_where('petugas',
                          array('id_petugas'=>$id_petugas))->row();
    }
    
    function bacadata(){
        $baca = $this->db->get('petugas');
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */