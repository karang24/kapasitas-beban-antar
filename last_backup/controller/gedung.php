<?php 
class Gedung extends CI_Controller {

    public function __construct(){
		parent::__construct();
        session_start();
        $this->load->model('model_gedung');
	}
    
	public function index()
	{
		$this->load->view('utama/home');
	}
    
    public function viewgedung()
    {
        $data['result']=$this->model_gedung->display_dtGedung();
        $data['menu_user']=' active';
    	$this->load->view('utama/gedung/listgedung',$data);

    }

    public function addgedung()
    {
        $this->load->view('utama/gedung/addgedung');
    }


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */