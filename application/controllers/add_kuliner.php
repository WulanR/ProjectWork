<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_kuliner extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_insert');
	}

	public function index()
	{
		$data['main_view'] = 'kuliner/tambah_kuliner';
		$this->load->view('template', $data);	
	}

	public function simpan(){
		if($this->input->post('submit')){
			$this->form_validation->set_rules('id_admin', 'Admin', 'trim|required');
			$this->form_validation->set_rules('nm_kuliner', 'Nama Kuliner', 'trim|required');
			$this->form_validation->set_rules('harga_kul', 'Harga', 'trim|required');
			$this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');
			$this->form_validation->set_rules('alamat_kul', 'Alamat', 'trim|required');
		//	$this->form_validation->set_rules('foto', 'File Input', 'trim|required');

			if($this->form_validation->run() == TRUE){
					if($this->m_insert->insert2() == TRUE){
						$data['notif'] = 'Tambah Kuliner berhasil!';
						$data['main_view'] = 'kuliner/tambah_kuliner';
						$this->load->view('template', $data);
					} else {
						$data['notif'] = 'Tambah Kuliner gagal!';
						$data['main_view'] = 'kuliner/tambah_kuliner';
						$this->load->view('template', $data);
					}

				} else {
					$data['notif'] = validation_errors();
					$data['main_view'] = 'kuliner/tambah_kuliner';
					$this->load->view('template', $data);
				}
			}
		}

}

/* End of file add_kuliner.php */
/* Location: ./application/controllers/add_kuliner.php */