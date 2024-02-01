<?php

class Dashboard extends CI_Controller
{
	public function index()
	{
		if(isset($_POST['submit']))
		{
			$data['qnaa'] = $this->ModelPertanyaan->get_data_cari($_POST['cari'])->result();
		}else{
			$data['qnaa'] = $this->ModelPertanyaan->get_data('qnaa')->result();
		}
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/dashboard');
		$this->load->view('template_admin/footer');
	}
}

?>