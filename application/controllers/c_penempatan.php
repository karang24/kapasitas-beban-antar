<?php 
class C_penempatan extends CI_Controller {

    function __construct(){
		parent::__construct();
        session_start();
        $this->load->model('m_penempatan');
        $this->load->helper(array('url','form'));
	}
    
	function index()
	{
		$this->load->view('utama/home');
        $data['result']=$this->m_penempatan->display_dtPenempatan();
        $this->data['penempatan_brg'] = $this->m_penempatan->get();
        $this->load->view('penempatan_brg', $this->data);
	}
    
    function viewpenempatan()
    {
        $no_penempatan=$this->session->userdata('no_penempatan');
        $data['result']=$this->m_penempatan->display_dtPenempatan();
        $data['menu_user']=' active';
        $this->load->view('utama/penempatan_barang/listpenempatanbarang',$data);
    }

    function addpenempatan()
    { 
        $this->load->model('m_penempatan');
        $data['hasil'] = $this->m_penempatan->bacadata1();
        $data['hasil1'] = $this->m_penempatan->bacadata2();
        $data['hasil2'] = $this->m_penempatan->bacadata3();
        $this->load->view('utama/penempatan_barang/addpenempatanbarang',$data);
    }

    function insertpenempatan()
    {
       $this->load->model('m_penempatan');
       $this->m_penempatan->insert();
       redirect('C_penempatan/viewpenempatan');
    }

    function updatedata($no_penempatan){
        if($_POST==NULL){
            $this->load->model('m_penempatan');
            $data['hasil3'] = $this->m_penempatan->bacadata1();
            $data['hasil4'] = $this->m_penempatan->bacadata2();
            $data['hasil5'] = $this->m_penempatan->bacadata3();
            $data['hasil'] = $this->m_penempatan->filterdata($no_penempatan);
            $this->load->view('utama/penempatan_barang/editpenempatanbarang',$data);
        }
        else{
            $this->load->model('m_penempatan');
            $this->m_penempatan->updatedata();
            redirect('C_penempatan/viewpenempatan');
        }
    }

    function deletedata($no_penempatan)
    {
        $this->load->model('m_penempatan');
        $this->m_penempatan->deletedata($no_penempatan);
        redirect('C_penempatan/viewpenempatan');
    }

    function cariPenempatan()
    {
        $cari=$this->input->get('cari');
        $this->load->model('m_penempatan');
        $beda['cari']=$this->m_penempatan->cariPenempatan($cari);
        $this->load->view('utama/penempatan_barang/cariPenempatan',$beda);   
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