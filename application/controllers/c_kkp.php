<?php 
class C_kkp extends CI_Controller {

    function __construct(){
		parent::__construct();
        session_start();
        $this->load->model('m_kkp');
		if ($this->session->userdata('username')=="") {
			redirect('login');
		}
		$this->load->helper('text');
	}
    
	function index()
	{
		$this->load->view('utama/home1');
	}
    
    function viewpetugas()
    {
        $kd_gedung=$this->session->userdata('tb_petugas');
        $data['result']=$this->m_kkp->bacadata();
        $data['menu_user']=' active';
        $this->load->view('utama/kkp/listkkp',$data);
    }    
		 function viewbulanan()
    {
	 $this->load->model('m_kkp');
      ;
		$data['hasil2'] = $this->m_kkp->bacadata3();
		$data['hasil3'] = $this->m_kkp->bacadata4();
        $data['menu_user']=' active';
        $this->load->view('utama/kkp/lihat_laporan',$data);
    }
	 function viewtahunan()
    {
	 $this->load->model('m_kkp');
      ;
		$data['hasil2'] = $this->m_kkp->bacadata3();
		$data['hasil3'] = $this->m_kkp->bacadata4();
        $data['menu_user']=' active';
        $this->load->view('utama/kkp/lihat_laporan1',$data);
    }
	 function viewakun()
    {
        $kd_gedung=$this->session->userdata('tb_user');
        $data['result']=$this->m_kkp->bacadata1();
        $data['menu_user']=' active';
        $this->load->view('utama/kkp/listuser',$data);
    }
	function carirekap(){
	
		$cari=$this->input->get('cari');
        $cari1=$this->input->get('cari1');
		$cari2=$this->input->get('cari2');
		$this->load->model('m_superv');
        $this->load->model('m_kkp');
        $beda['cari']=$this->m_kkp->carirekap($cari);
		$beda['data'] = $this->m_superv->bacadata10();
        $this->load->view('laporan/rekap_kba/laporankba',$beda);   
    }
	function carirekap1(){
		$cari['hasil2'] = $this->m_kkp->bacadata3();
		$cari['hasil3'] = $this->m_kkp->bacadata4();
		$cari=$this->input->get('cari');
        $this->load->model('m_kkp');
        $beda['cari']=$this->m_kkp->carirekap1($cari);
        $this->load->view('laporan/rekap_kba/laporankba',$beda);   
    }
       function addpetugas()
    { 
        $this->load->model('m_petugas');
        $data['hasil'] = $this->m_petugas->bacadata1();
        $this->load->view('utama/kkp/addpetugas',$data);
    }
	    function adduser()
    { 
        $this->load->model('m_kkp');
        $data['hasil'] = $this->m_kkp->bacadata1();
        $this->load->view('utama/kkp/adduser',$data);
    }


    function insertpetugas()
    {
       $this->load->model('m_petugas');
       $this->m_petugas->insert();
       redirect('C_kkp/viewpetugas');
    }
	   function insertuser()
    {
       $this->load->model('m_kkp');
       $this->m_kkp->insertuser();
       redirect('C_kkp/viewakun');
    }

   function updatedata($nippos){
        if($_POST==NULL){
            $this->load->model('m_petugas');
            $data['hasil1'] = $this->m_petugas->bacadata1();
            $data['hasil'] = $this->m_petugas->filterdata($nippos);
            $this->load->view('utama/kkp/editpetugas',$data);
        }
        else{
            $this->load->model('m_petugas');
            $this->m_petugas->updatedata();
            redirect('C_kkp/viewpetugas');
        }
    }

 function updateuser($id_user){
        if($_POST==NULL){
            $this->load->model('m_kkp');
            $data['hasil1'] = $this->m_kkp->bacadata1();
            $data['hasil'] = $this->m_kkp->filterdata($id_user);
            $this->load->view('utama/kkp/edituser',$data);
        }
        else{
            $this->load->model('m_kkp');
            $this->m_kkp->updateuser();
            redirect('C_kkp/viewakun');
        }
    }
    function deleteuser($id_user){
 
        $this->load->model('m_kkp');
        $this->m_kkp->deleteuser($id_user);
        redirect('C_kkp/viewakun');
    }

    function cariGedung(){
        $cari=$this->input->get('cari');
        $this->load->model('m_gedung');
        $beda['cari']=$this->m_gedung->cariGedung($cari);
        $this->load->view('utama/gedung/cariGedung',$beda);   
    }
    function filterdata($kd_gedung){
        return $this->db->get_where('gedung',
                          array('kd_gedung'=>$kd_gedung))->row();
    }
    
    function bacadata(){
        $baca = $this->db->get('gedung');
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