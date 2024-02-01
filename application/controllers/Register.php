<?php

class Register extends CI_Controller
{

	public function index()
	{
		$this->_rules();
		
		if($this->form_validation->run() == FALSE) {
			$this->load->view('template_admin/header');
			$this->load->view('form_register');
			$this->load->view('template_admin/footer');
		}else{
			$nama 					= $this->input->post('nama');
			$password 				= md5($this->input->post('password'));
			$role_id 				= '2';
			
			$data = array (
				'nama' 				=> $nama,
				'password' 			=> $password,
				'role_id' 			=> $role_id
			);
			
			$this->ModelPertanyaan->insert_data($data, 'user');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Berhasil Register, Silahkan Login!.
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
				redirect('auth/login');
		}
	}
	
	public function _rules()
	{
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('password','Password','required');
	}
}
?>