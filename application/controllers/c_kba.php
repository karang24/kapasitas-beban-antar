<?php 
class C_kba extends CI_Controller {

    function __construct(){
		parent::__construct();
        session_start();
        $this->load->model('m_kba');
        $this->load->helper(array('url','form'));
		if ($this->session->userdata('username')=="") {
			redirect('login');
		}
		$this->load->helper('text');
	}

	function index()
	{
		$this->load->view('utama/home');
        $data['result']=$this->m_kba->bacadata();
        $this->data['ruangan'] = $this->m_kba->get();
        $this->load->view('ruangan', $this->data);
	}
    
    function viewkba()
    {
       $this->load->model('m_kba');
        $data['hasil'] = $this->m_kba->bacadata();
		
		$this->load->library('session');
        $data['menu_user']=' active';
        $this->load->view('utama/kba/listkba',$data);
    }
	   function viewkba1()
    {
       $this->load->model('m_kba');
        $data['hasil'] = $this->m_kba->bacadata();
		$this->load->library('session');
        $data['menu_user']=' active';
        $this->load->view('utama/kba/listkba1',$data);
    }

    function addkba()
    { 
		
        $this->load->model('m_kba');
        $data['hasil'] = $this->m_kba->bacadata1();
		$data['hasil1'] = $this->m_kba->bacadata2();
		$data['hasil2'] = $this->m_kba->bacadata3();
		$data['hasil3'] = $this->m_kba->bacadata4();
		$data['hasil21'] = $this->m_kba->bacadata21();
        $this->load->view('utama/kba/addkba',$data);
    }
	   function addkba1()
    { 
		
        $this->load->model('m_kba');
        $data['hasil'] = $this->m_kba->bacadata1();
        $this->load->view('utama/kba/addkba1',$data);
    }

    function insertkba()
	
    {
    $data1['jumlah']=(int)$this->input->post('jumlah',true);
		$data1['terkirim']=(int)$this->input->post('terkirim',true);
		$data1['hasil1']=$data1['jumlah']-$data1['jumlah'];;
		$this->load->view('utama/kba/addkba',$data1);
	   $this->load->model('m_kba');
       $this->m_kba->insert();
       redirect('C_kba/viewkba');
    }
	   function insertkba1()
	
    {
    $data1['jumlah']=(int)$this->input->post('jumlah',true);
		$data1['terkirim']=(int)$this->input->post('terkirim',true);
		$data1['hasil1']=$data1['jumlah']-$data1['jumlah'];;
		$this->load->view('utama/kba/addkba',$data1);
	   $this->load->model('m_kba');
       $this->m_kba->insert();
       redirect('C_kba/viewkba1');
    }

    function updatedata($id_kba){
        if($_POST==NULL){
            $this->load->model('m_kba');
            $data['hasil1'] = $this->m_kba->bacadata1();
            $data['hasil'] = $this->m_kba->filterdata($id_kba);
            $this->load->view('utama/kba/editkba',$data);
        }
        else{
            $this->load->model('m_kba');
            $this->m_kba->updatedata();
            redirect('C_kba/viewkba');
        }
    }
   function updatedata1($id_kba){
        if($_POST==NULL){
            $this->load->model('m_kba');
            $data['hasil1'] = $this->m_kba->bacadata1();
            $data['hasil'] = $this->m_kba->filterdata($id_kba);
            $this->load->view('utama/kba/editkba1',$data);
        }
        else{
            $this->load->model('m_kba');
            $this->m_kba->updatedata();
            redirect('C_kba/viewkba1');
        }
    }
    function deletedata($id_kba)
    {
        $this->load->model('m_kba');
        $this->m_kba->deletedata($id_kba);
        redirect('C_kba/viewkba');
    }

    function cariRuangan()
    {
        $cari=$this->input->get('cari');
        $this->load->model('m_ruangan');
        $beda['cari']=$this->m_ruangan->cariRuangan($cari);
        $this->load->view('utama/ruangan/cariRuangan',$beda);   
    }

    function filterdata($kd_ruangan)
    {
        return $this->db->get_where('ruangan',
                          array('kd_ruangan'=>$kd_ruangan))->row();
    }
    
    function bacadata()
    {
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