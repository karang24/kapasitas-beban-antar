<?php 
class C_petugas extends CI_Controller {

    function __construct(){
		parent::__construct();
        session_start();
        $this->load->model('m_petugas');
		if ($this->session->userdata('username')=="") {
			redirect('login');
		}
		$this->load->helper('text');
	}
	public function viewpetugas(){
$this->load->model('m_kba');
        $data['hasil'] = $this->m_petugas->bacadata();
        $data['menu_user']=' active';
        $this->load->view('utama/petugas/listpetugas', $data);

		//$dc = json_decode($data);
	//var_dump($data);
	}
    
	function index()
	{
		$this->load->view('utama/home_2');
	}
		
    
    function viewbarang1()
    {
        $kd_barang=$this->session->userdata('kd_barang');
        $data['result']=$this->m_barang->display_dtBarang();
        $data['menu_user']=' active';
        $this->load->view('utama/barang/listbarang',$data);
    }

    function addpetugas()
    { 
        $this->load->model('m_petugas');
        $data['hasil'] = $this->m_petugas->bacadata1();
        $this->load->view('utama/petugas/addbarang',$data);
    }

    function insertpetugas()
    {
       $this->load->model('m_petugas');
       $this->m_petugas->insert();
	   
       redirect('C_petugas/viewpetugas');
    }

    function updatedata($nippos){
        if($_POST==NULL){
            $this->load->model('m_petugas');
            $data['hasil1'] = $this->m_petugas->bacadata1();
            $data['hasil'] = $this->m_petugas->filterdata($nippos);
            $this->load->view('utama/petugas/editpetugas',$data);
        }
        else{
            $this->load->model('m_petugas');
            $this->m_petugas->updatedata();
            redirect('C_petugas/viewpetugas');
        }
    }

    function deletepetugas($nippos){
 
        $this->load->model('m_petugas');
        $this->m_petugas->deletepetugas($nippos);
        redirect('C_petugas/viewpetugas');
    }

    function cariBarang(){
        $cari=$this->input->get('cari');
        $this->load->model('m_barang');
        $beda['cari']=$this->m_barang->cariBarang($cari);
        $this->load->view('utama/barang/cariBarang',$beda);   
    }

    function filterdata($kd_barang){
        return $this->db->get_where('barang',
                          array('kd_barang'=>$kd_barang))->row();
    }
    
    function bacadata(){
        $baca = $this->db->get('barang');
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