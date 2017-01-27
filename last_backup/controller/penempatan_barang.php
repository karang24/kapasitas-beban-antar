<?php 
class Penempatan extends CI_Controller {

    public function __construct(){
		parent::__construct();
        session_start();
        $this->load->model('model_penempatan');
	}
    
	public function index()
	{
		$this->load->view('utama/home');
	}
    
    public function viewpenempatan()
    {
        $id_petugas=$this->session->userdata('id_petugas');
        $data['result']=$this->model_penempatan->display_dtPenempatan();
        $data['menu_user']=' active';
    	$this->load->view('utama/penempatan/listpenempatan',$data);
    }

    public function addpenempatan()
    {

    }


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */