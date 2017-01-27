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
		$url = file_get_contents('http://localhost/sismonven_server/index.php/witems/index');
		$data['dataws'] = json_decode($url);
		$this->load->view('utama/ruangan/listruangan', $data);
		$dc = json_decode($data);
		var_dump($data);

    }

    public function addruangan()
    {
        $this->load->view('utama/ruangan/addruangan');
    }


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */