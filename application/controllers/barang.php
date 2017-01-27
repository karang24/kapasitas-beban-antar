<?php 
class Barang extends CI_Controller {

    public function __construct(){
		parent::__construct();
        session_start();
        $this->load->model('model_barang');
        $this->load->library('fpdf');
	}
    
	public function index()
	{
		$this->load->view('utama/home');
	}
    
    public function viewbarang()
    {
        $id_petugas=$this->session->userdata('id_petugas');
        $data['result']=$this->model_barang->display_dtBarang();
        $data['menu_user']=' active';
    	$this->load->view('utama/barang/listbarang',$data);

    }

    public function addbarang()
    {
        $this->load->view('utama/barang/addbarang');
    }

    public function report()
    { 

    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */