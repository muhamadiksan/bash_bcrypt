<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
public function __construct()
{
	parent::__construct();
	$this->load->model('m_user');
}

public function index(){
 if($this->session->userdata('is_login')==TRUE)
    {
    redirect('user/dashboard/','refresh');
}else{
   $this->template->load('role','v_login'); 
}
}
public function daftar(){

$this->template->load('role','v_register');

}
public function proses_daftar(){

    $this->form_validation->set_rules('nama', 'Nama', 'trim|required|min_length[3]|max_length[22]');
    $this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[5]|max_length[22]|is_unique[login.email]');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|max_length[8]');
   
                if ($this->form_validation->run() == FALSE):

                	  $this->template->load('role','v_register');
                	
                	else:

                    if($this->m_user->reg())
                         {
                            $this->session->set_flashdata('pesan','Pendaftaran berhasil, silahkan login.');
                            redirect('','refresh');

                         }

                	endif;

}

public function proses_login(){

    $this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[5]|max_length[22]');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|max_length[8]');
   
                if ($this->form_validation->run() == FALSE):

                      $this->template->load('role','v_login');
                    
                    else:

                            if($this->m_user->check_db()->num_rows()==1) // check email.....
                            {
                                $db=$this->m_user->check_db()->row();// verifikasi pass + hash......
                                if(hash_verified($this->input->post('password'),$db->password)) 
                                {
                                   // login berhasil buat session
                                    $session = array('is_login' => TRUE,
                                                     'is_nama'=>$db->nama,
                                                     'is_id'=>$db->id);
                                    $this->session->set_userdata($session);
                                    redirect('user/dashboard/','refresh');
                                }else{
                                    $this->session->set_flashdata('pesan','Maaf Password Salah.');
                                    redirect('','refresh');
                                }
                               
                            }else
                                {
                              
                              $this->session->set_flashdata('pesan','Maaf E-mail tidak terdaftar.');
                              redirect('','refresh');

                                 }

                    endif;


}
public function dashboard(){

    if($this->session->userdata('is_login')==TRUE)
    {
       $this->template->load('role','v_secure_page'); 
    }else{

        redirect('logout','refresh');
    }
}	

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */