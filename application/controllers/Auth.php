<?php

class Auth extends CI_Controller
{
	public function login()
	{
		$this->_rules();
		
		if($this->form_validation->run() == FALSE) {
			$this->load->view('template_admin/header');
			$this->load->view('form_login');
			$this->load->view('template_admin/footer');
		} else {
			$nama = $this->input->post('nama');
			$password = md5($this->input->post('password'));
			
			$cek = $this->ModelPertanyaan->cek_login($nama, $password);
			
			if($cek == FALSE) {
				$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">Username atau Password Salah!.
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
					redirect('auth/login');
			} else {
				$this->session->set_userdata('role_id', $cek->role_id);
				$this->session->set_userdata('nama', $cek->nama);
				$this->session->set_userdata('id_user', $cek->id_user);
				
				switch ($cek->role_id) {
					case 1 : 	redirect('admin/dashboard');
								break;
								
					case 2 : 	redirect('customer/dashboard');
								break;
					
					default :	break;
				}
			}
		}
	}
	
	public function _rules()
	{
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('user/dashboard');
	}
}
?>