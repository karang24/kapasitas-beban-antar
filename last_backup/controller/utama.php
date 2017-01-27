<?php 
class Utama extends CI_Controller {

    function __construct(){
		parent::__construct();
        session_start();
        $this->load->model('m_user');
	}
    
	function admin()
	{
		$this->load->view('utama/home_4');
	}

    function asisten()
    {
        $this->load->view('utama/home_2');
    }

    function kepala()
    {
        $this->load->view('utama/home_3');
    }

    function yayasan()
    {
        $this->load->view('utama/home_1');
    }
    
    
    function viewuser()
    {
        $id_petugas=$this->session->userdata('id_petugas');
        $data['result']=$this->model_user->display_dtUser();
        $data['menu_user']=' active';
    	$this->load->view('utama/petugas/listpetugas',$data);

    }
    function adduser()
    { 
        $this->load->view('utama/petugas/addpetugas');
       
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */