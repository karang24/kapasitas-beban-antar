<?php 
class Utama extends CI_Controller {

    function __construct(){
		parent::__construct();
        session_start();
		if ($this->session->userdata('username')=="") {
			redirect('login');
		}

        $this->load->model('m_user');
	}
    
	function admin()
	{
		$this->load->view('utama/home_4');
	}

    function mandor()
    {
        $this->load->view('utama/home_2');
    }

    function superv()
    {
        $this->load->view('utama/home_3');
    }

    function kkp()
    {
        $this->load->view('utama/home_1');
    }
	  function spvkudus()
    {
		
        $this->load->view('utama/home_5');
    }
	  function kkpkusdus()
    {
        $this->load->view('utama/home_6');
    }
	  function mankus()
    {
        $this->load->view('utama/home_4');
    }
	  function mandorrembang()
    {
        $this->load->view('utama/home_7');
    }
      function spvrembang()
    {
        $this->load->view('utama/home_8');
		
    }
      function regional()
    {
        $this->load->view('utama/home_9');
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