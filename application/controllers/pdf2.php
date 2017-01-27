<?php 
class Pdf2 extends CI_Controller {
  function __construct()
  {
    parent::__construct();
    $this->load->helper(array('url','pdf_helper'));
    $this->load->database();
  }

  function index($download_pdf=''){
    $ret ='';
    $hak_akses = 4;
    $pdf_filename ='laporan_transaksi'.$hak_akses.'.pdf';
    $link_download = ($download_pdf == TRUE)?'':anchor(base_url().'index.php/pdf/index/true','Download Pdf');
    //
    $query= $this->db->query("SELECT * FROM tb_petugas where nippos");
    if($query->num_rows()>0)
      $laporan_transaksi =$query->row_array();

    //
    $data_header = array(
      'title' => 'Rekap Kapasitas Beban Antar',
    );
    $data = array(
      'laporan_transaksi' =>$laporan_transaksi,
      'link_download' => $link_download
    );
    $header = $this->load->view('laporan/rekap_kba/header',$data_header,true);
	$this->load->model('m_superv');
    $data['result']=$this->m_superv->bacadata3();
	

    $laporan_transaksi = $this->load->view('laporan/rekap_kba/laporankba2',$data,true);
    $footer =$this->load->view('laporan/rekap_kba/footer','$footer',true);
    //
    $output =$laporan_transaksi.$header.$footer;
    //
    if($download_pdf == TRUE)
      generate_pdf($output, $pdf_filename);
    else
      echo $output;
  }
}
?>
