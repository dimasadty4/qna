<?php

class Data_pertanyaan extends CI_Controller
{
	public function index()
	{
		$data['qnaa'] = $this->ModelPertanyaan->get_data('qnaa')->result();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/data_pertanyaan', $data);
		$this->load->view('template_admin/footer');
	}
	
	public function tambah_pertanyaan()
	{
		$data['qnaa'] = $this->ModelPertanyaan->get_data('qnaa')->result();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/form_tambah_pertanyaan', $data);
		$this->load->view('template_admin/footer');
	}
	
	public function tambah_pertanyaan_aksi()
	{
		$this->_rules();
		
		if($this->form_validation->run() == FALSE) {
			$this->tambah_pertanyaan();
		} else {
			$pertanyaan			= $this->input->post('pertanyaan');
			$jawaban			= $this->input->post('jawaban');
			
			$data = array(
				'pertanyaan'	=> $pertanyaan,
				'jawaban'		=> $jawaban
			);
			
			$this->ModelPertanyaan->insert_data($data,'qnaa');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Data Berhasil Ditambahkan!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
				redirect('admin/data_pertanyaan');
		}
	}
	
	public function update_pertanyaan($id)
	{
		$where = array('id_qna' => $id);
		$data ['qnaa'] = $this->db->query("SELECT * FROM qnaa qa WHERE qa.id_qna='$id'")->result();
		
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/form_update_pertanyaan', $data);
		$this->load->view('template_admin/footer');
	}
	
	public function update_pertanyaan_aksi()
	{
		$this->_rules();
		
		if($this->form_validation->run() == FALSE) 
		{
			$this->update_pertanyaan();
		} else {
			$id					= $this->input->post('id_qna');
			$pertanyaan			= $this->input->post('pertanyaan');
			$jawaban			= $this->input->post('jawaban');
			
			$data = array(
				'pertanyaan'	=> $pertanyaan,
				'jawaban'		=> $jawaban
			);
			
			$where = array (
				'id_qna' => $id
			);
			
			$this->ModelPertanyaan->update_data('qnaa', $data, $where);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Data Berhasil Diupdate!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
				redirect('admin/data_pertanyaan');
		}
	}
	
	public function _rules()
	{
		$this->form_validation->set_rules('pertanyaan','Pertanyaan','required');
		$this->form_validation->set_rules('jawaban','Jawaban','required');
	}
	
	public function detail_pertanyaan($id)
	{
		$data ['qnaa'] = $this->ModelPertanyaan->ambil_id_pertanyaan($id);
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/detail_pertanyaan', $data);
		$this->load->view('template_admin/footer');
	}
	
	public function delete_pertanyaan($id)
	{
		$where = array('id_qna' => $id);
		$this->ModelPertanyaan->delete_data($where, 'qnaa');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">Data Berhasil Dihapus!
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('admin/data_pertanyaan');
	}
}
?>