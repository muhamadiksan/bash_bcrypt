<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

	public function reg(){

		$data = array('nama' => $this->input->post('nama') ,
		              'email'=> $this->input->post('email'),
		              'password'=>get_hash($this->input->post('password')));
         return $this->db->insert('login',$data);
	}

	public function check_db(){

		return $this->db->get_where('login',array('email' => $this->input->post('email')));
	}

}

/* End of file M_user.php */
/* Location: ./application/models/M_user.php */
