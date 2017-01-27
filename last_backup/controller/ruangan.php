<?php 
class Ruangan extends CI_Controller {

    public function __construct(){
		parent::__construct();
        session_start();
        $this->load->model('model_ruangan');
	}
    
	public function index()
	{
		$this->load->view('utama/home');
	}
    
    public function viewruangan()
    {
        $id_petugas=$this->session->userdata('id_petugas');
        $data['result']=$this->model_ruangan->display_dtRuangan();
        $data['menu_user']=' active';
    	$this->load->view('utama/ruangan/listruangan',$data);
    }

    public function addruangan()
    {
        $this->load->view('utama/ruangan/addruangan');
    }


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */