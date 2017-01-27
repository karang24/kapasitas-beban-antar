<?php 
class Kategori extends CI_Controller {

    public function __construct(){
		parent::__construct();
        session_start();
        $this->load->model('model_kategori');
	}
    
	public function index()
	{
		$this->load->view('utama/home');
	}
    
    public function viewkategori()
    {
        $data['result']=$this->model_kategori->display_dtKategori();
        $data['menu_user']=' active';
    	$this->load->view('utama/kategori/listkategori',$data);

    }

    public function addkategori()
    {
       $this->load->view('utama/kategori/addkategori');  
    }


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */