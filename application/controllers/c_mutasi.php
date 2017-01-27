<?php 
class C_mutasi extends CI_Controller {

    function __construct(){
		parent::__construct();
        session_start();
        $this->load->model('m_mutasi');
        $this->load->helper(array('url','form'));
	}
    
	function index()
	{
		$this->load->view('utama/home');
        $data['result']=$this->m_mutasi->display_dtMutasi();
        $this->data['mutasi_brg'] = $this->m_mutasi->get();
        $this->load->view('mutasi_brg', $this->data);
	}
    
    function viewmutasi()
    {
        $no_mutasi=$this->session->userdata('no_mutasi');
        $data['result']=$this->m_mutasi->display_dtMutasi();
        $data['menu_user']=' active';
        $this->load->view('utama/mutasi_barang/listmutasibarang',$data);
    }

    function addmutasi()
    { 
        $this->load->model('m_mutasi');
        $data['hasil'] = $this->m_mutasi->bacadata1();
        $data['hasil1'] = $this->m_mutasi->bacadata2();
        $data['hasil2'] = $this->m_mutasi->bacadata3();
        $this->load->view('utama/mutasi_barang/addmutasibarang',$data);
    }

    function insertmutasi()
    {
       $this->load->model('m_mutasi');
       $this->m_mutasi->insert();
       redirect('C_mutasi/viewmutasi');
    }

    function updatedata($no_mutasi){
        if($_POST==NULL){
            $this->load->model('m_mutasi');
            $data['hasil3'] = $this->m_mutasi->bacadata1();
            $data['hasil4'] = $this->m_mutasi->bacadata2();
            $data['hasil5'] = $this->m_mutasi->bacadata3();
            $data['hasil'] = $this->m_mutasi->filterdata($no_mutasi);
            $this->load->view('utama/mutasi_barang/editmutasibarang',$data);
        }
        else{
            $this->load->model('m_mutasi');
            $this->m_mutasi->updatedata();
            redirect('C_mutasi/viewmutasi');
        }
    }

    function deletedata($no_mutasi)
    {
        $this->load->model('m_mutasi');
        $this->m_mutasi->deletedata($no_mutasi);
        redirect('C_mutasi/viewmutasi');
    }

    function cariPenempatan()
    {
        $cari=$this->input->get('cari');
		 $this->load->model('m_mutasi');
		 $data['menu_user']=' active';
      
        $beda['cari']=$this->m_mutasi->cariMutasi($cari);
        $this->load->view('utama/mutasi_barang/viewdata',$beda);   
    }

    function cariMutasi()
    {
        $cari=$this->input->get('cari');
        $this->load->model('m_mutasi');
		$data['menu_user']=' active';
        $beda['cari']=$this->m_mutasi->cariMutasi($cari);
        $this->load->view('utama/mutasi_barang/viewdata',$beda);   
    }

    function filterdata($no_penempatan)
    {
        return $this->db->get_where('penempatan_brg',
                          array('no_penempatan'=>$no_penempatan))->row();
    }
    
    function bacadata()
    {
        $baca = $this->db->get('penempatan_brg');
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