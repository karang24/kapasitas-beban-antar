<?php 
class Utama extends CI_Controller {

    public function __construct(){
		parent::__construct();
        session_start();
        $this->load->model('model_user');
	}
    
	public function index()
	{
		$this->load->view('utama/home');
	}
    
    public function viewuser()
    {
        $id_petugas=$this->session->userdata('id_petugas');
        $data['result']=$this->model_user->display_dtUser();
        $data['menu_user']=' active';
    	$this->load->view('utama/petugas/listpetugas',$data);

    }

    public function adduser()
    {
        $data['error']=false;
        $submit=$this->input->post('submit');
        if($submit){
            $this->form_validation->set_rules('nama', 'Username', 'trim|required|is_unique[user.username]');
            $this->form_validation->set_rules('nip', 'Nip', 'trim|required|is_unique[user.nip]');
            $this->form_validation->set_rules('hak', 'Level', 'trim|required');
            if ($this->form_validation->run()==FALSE){
                $data['error']=true;
            }else {
                $config['upload_path'] = './public/img/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '1000';
                $config['max_width']  = '1200';
                $config['max_height']  = '1200';
                $config['file_name'] = $this->input->post('nip');
                if(! $this->upload->do_upload()){
                    $err = $this->upload->display_errors();
                    if ($err=='Belum ada file yang diunggah.'){
                        $upload='avatar.jpg';
                    }
                    else{ 
                        $data['er_file'] = $this->upload->display_errors();
                        $data['error']=true;
                    }
                }else{
                        $filename = $this->upload->data();
                        $upload=$filename['file_name'];
                }
                if($data['error']==false){
                    $arrayData = array(
                        'username' => $this->input->post('nama'),
                        'password' => sha1($this->input->post('nama')),
                        'hak_akses' => $this->input->post('hak'),
                        'nip' => $this->input->post('nip'),
                        'foto' => $upload,
                        'sts_user' => 1
                    );
                    $this->model_user->add_dtUser($arrayData);
                    $this->session->set_flashdata('save', 'Data user berhasil disimpan');
                    redirect('Utama/listUser'); */
                }
            }
        }
        $id_user=$this->session->userdata('id_user');
        $data['menu_user']=' active';
    	$this->load->view('utama/adduser',$data);
    }


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */