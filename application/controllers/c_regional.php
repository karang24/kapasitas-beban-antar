<?php 
class C_regional extends CI_Controller {

    function __construct(){
		parent::__construct();
        session_start();
        $this->load->model('m_superv');
		if ($this->session->userdata('username')=="") {
			redirect('login');
		}
		$this->load->helper('text');
	}
    
	function index()
	{
		$this->load->view('utama/home_4');
	}
    
    function viewsuperv()
    {
		 $this->load->model('m_kba');
        $data['hasil'] = $this->m_kba->bacadata1();
		$data['hasil1'] = $this->m_kba->bacadata2();
		$data['hasil2'] = $this->m_kba->bacadata3();
		$data['hasil3'] = $this->m_kba->bacadata4();
        $data['menu_user']=' active';
        $this->load->view('utama/superv/caripetugas',$data);
    }
   
	//jepara
		 function print2()
    {
     $this->load->model('m_superv');
      ;  
        $data['result']=$this->m_superv->bacadata20();
        $data['menu_user']=' active';
        $this->load->view('laporan/rekap_kba/laporankba2',$data);
    }
	
	 function viewbulanan()
    {
	 $this->load->model('m_kkp');
	 
      ;
		$data['hasil2'] = $this->m_kkp->bacadata3();
		$data['hasil3'] = $this->m_kkp->bacadata4();
		
        $data['menu_user']=' active';
        $this->load->view('utama/regional/lihat_laporan',$data);
    }
	 function viewbulanan2()
    {
	 $this->load->model('m_kkp');
	 
      ;
		$data['hasil2'] = $this->m_kkp->bacadata3();
		$data['hasil3'] = $this->m_kkp->bacadata4();
		
        $data['menu_user']=' active';
        $this->load->view('utama/regional/lihat_laporan_kudus',$data);
    }
	function viewbulanan3()
    {
	 $this->load->model('m_kkp');
	 
      ;
		$data['hasil2'] = $this->m_kkp->bacadata3();
		$data['hasil3'] = $this->m_kkp->bacadata4();
		
        $data['menu_user']=' active';
        $this->load->view('utama/regional/lihat_laporan_rembang',$data);
    }

	 function viewtahunan()
    {
	 $this->load->model('m_kkp');
      ;
		$data['hasil2'] = $this->m_kkp->bacadata3();
		$data['hasil3'] = $this->m_kkp->bacadata4();
        $data['menu_user']=' active';
        $this->load->view('utama/regional/lihat_laporan1',$data);
    }
	function viewtahunan1()
    {
	 $this->load->model('m_kkp');
      ;
		$data['hasil2'] = $this->m_kkp->bacadata3();
		$data['hasil3'] = $this->m_kkp->bacadata4();
        $data['menu_user']=' active';
        $this->load->view('utama/regional/lihat_laporan1_kudus',$data);
    }
		function viewtahunan2()
    {
	 $this->load->model('m_kkp');
      ;
		$data['hasil2'] = $this->m_kkp->bacadata3();
		$data['hasil3'] = $this->m_kkp->bacadata4();
        $data['menu_user']=' active';
        $this->load->view('utama/regional/lihat_laporan1_rembang',$data);
    }
	//rembang
		 function print3()
    {
       
        $data['result']=$this->m_superv->bacadata4();
        $data['menu_user']=' active';
        $this->load->view('laporan/rekap_kba/laporankba',$data);
    }
	//kudus
		 function print4()
    {
        $kd_gedung=$this->session->userdata('tb_rekap');
        $data['result']=$this->m_superv->bacadata5();
        $data['menu_user']=' active';
        $this->load->view('laporan/rekap_kba/laporankba',$data);
    }
    function addkategori()
    { 
        $this->load->view('utama/kategori/addkategori');
    }

    function insertkategori()
    {
       $this->load->model('m_kategori');
       $this->m_kategori->insert();
       redirect('C_kategori/viewkategori');
    }
    function insertrekap()
    {
		$this->load->model('m_kba');
        $data['hasil'] = $this->m_kba->bacadata();
       $this->load->model('m_superv');
       $this->m_superv->insertrekap();
       redirect('C_superv/caripetugas',$data);
    }

    function updatedata($kd_kategori){
        if($_POST==NULL){
            $this->load->model('m_kategori');
            $data['hasil'] = $this->m_kategori->filterdata($kd_kategori);
            $this->load->view('utama/kategori/editkategori',$data);
        }
        else{
            $this->load->model('m_kategori');
            $this->m_kategori->updatedata();
            redirect('C_kategori/viewkategori');
        }
    }

    function deletedata($kd_kategori){
 
        $this->load->model('m_kategori');
        $this->m_kategori->deletedata($kd_kategori);
        redirect('C_kategori/viewkategori');
    }

    function caripetugas(){
		$this->load->model('m_kba');
    
        $data['menu_user']=' active';
        $cari=$this->input->get('cari');
		
        $this->load->model('m_superv');
		$beda['hasil2'] = $this->m_kba->bacadata3();
		$beda['hasil3'] = $this->m_kba->bacadata4();
        $beda['cari']=$this->m_superv->caripetugas($cari);
		
        $this->load->view('utama/superv/caripetugas',$beda);   
    }
	    function carirekap1(){
        $cari=$this->input->get('cari');
		
        $this->load->model('m_superv');
        $beda['cari']=$this->m_superv->carirekap1($cari);
		
        $this->load->view('utama/superv/kinerjatotal',$beda);   
    }
	function carirekap2(){
        $cari1=$this->input->get('cari1');
		$cari2=$this->input->get('cari2');
        $this->load->model('m_superv');
		$beda['data'] = $this->m_superv->bacadata11();
        $beda['cari1']=$this->m_superv->carirekap21($cari1);
		
        $this->load->view('laporan/rekap_kba/laporankba3',$beda);   
    }
		function carirekap6(){
		 $cari1=$this->input->get('cari1');
		$cari2=$this->input->get('cari2');
        $this->load->model('m_superv');
		$beda['data'] = $this->m_superv->bacadata11();
        $beda['cari1']=$this->m_superv->carirekap7($cari1);
        $this->load->view('laporan/rekap_kba/laporankba3',$beda);   
    }
		function carirekap4(){
		 $cari1=$this->input->get('cari1');
		$cari2=$this->input->get('cari2');
        $this->load->model('m_superv');
		$beda['data'] = $this->m_superv->bacadata11();
        $beda['cari1']=$this->m_superv->carirekap6($cari1);
        $this->load->view('laporan/rekap_kba/laporankba3',$beda);   
    }
	function carirekap7(){
		 $cari1=$this->input->get('cari1');
		$cari2=$this->input->get('cari2');
        $this->load->model('m_superv');
		$beda['data'] = $this->m_superv->bacadata11();
        $beda['cari1']=$this->m_superv->carirekap11($cari1);
        $this->load->view('laporan/rekap_kba/laporankba4',$beda);   
    }
		function carirekap8(){
		 $cari1=$this->input->get('cari1');
		$cari2=$this->input->get('cari2');
        $this->load->model('m_superv');
		$beda['data'] = $this->m_superv->bacadata11();
        $beda['cari1']=$this->m_superv->carirekap13($cari1);
        $this->load->view('laporan/rekap_kba/laporankba4',$beda);   
    }
	function carirekap9(){
		 $cari1=$this->input->get('cari1');
		$cari2=$this->input->get('cari2');
        $this->load->model('m_superv');
		$beda['data'] = $this->m_superv->bacadata11();
        $beda['cari1']=$this->m_superv->carirekap13($cari1);
        $this->load->view('laporan/rekap_kba/laporankba4',$beda);   
    }
	
		function carirekap3(){
		$cari=$this->input->get('cari');
        $cari1=$this->input->get('cari1');
		$cari2=$this->input->get('cari2');
		
        $this->load->model('m_superv');
        $beda['cari']=$this->m_superv->carirekap3($cari);
		
        $this->load->view('utama/superv/kinerjaharian',$beda);   
    }
    function filterdata($id_petugas){
        return $this->db->get_where('kategori',
                          array('kd_kategori'=>$kd_kategori))->row();
    }
    
    function bacadata(){
        $baca = $this->db->get('kategori');
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