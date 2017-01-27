function pdf()  
 {  
     $this->load->helper('to_pdf');    
     $data =array('nip'=>$this->input->post('nip'), 'nama'=>$this->input->post('nama'),  
     'email'=>$this->input->post('email'),'tempat_lahir'=>$this->input->post('tempat_lahir'),  
     'tgl_lahir'=>$this->input->post('tgl_lahir'),'jabatan'=>$this->input->post('jabatan')  
     );  
 $html = $this->load->view('cetak', $data, true);  
        pdf_create($html,$data['nip']);  
   }   
