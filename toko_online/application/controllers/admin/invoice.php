<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Invoice extends CI_Controller{
	public function index()
	{
		// $data['invoice'] = $this->model_invoice->tampil_data();
		$this->load->view('templatesadmin/header');
		$this->load->view('templatesadmin/sidebar');

		// $this->load->view('admin/invoice', $data); // buat tampilin data invoice pake yang ini (yg divideo)

		$this->load->view('admin/invoice'); // ini tampilan data invoice gak muncul 
		$this->load->view('templatesadmin/header');
	}
}

 ?>