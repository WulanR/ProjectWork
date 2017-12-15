<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_tempat extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_insert');
	}

	public function index()
	{
		$data['main_view'] = 'tempat/tambah_tempat';
		$this->load->view('template', $data);	
	}

	public function simpan(){
		if($this->input->post('submit')){
			$this->form_validation->set_rules('id_admin', 'Admin', 'trim|required');
			$this->form_validation->set_rules('nm_tempat', 'Nama tempat', 'trim|required');
			$this->form_validation->set_rules('alamat_wis', 'Alamat', 'trim|required');
			$this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');
			$this->form_validation->set_rules('harga_wis', 'Biaya', 'trim|required');
		//	$this->form_validation->set_rules('foto', 'File Input', 'trim|required');

			if($this->form_validation->run() == TRUE){
					if($this->m_insert->insert() == TRUE){
						$data['notif'] = 'Tambah Data Tempat berhasil!';
						$data['main_view'] = 'tempat/tambah_tempat';
						$this->load->view('template', $data);
					} else {
						$data['notif'] = 'Tambah Data Tempat gagal!';
						$data['main_view'] = 'tempat/tambah_tempat';
						$this->load->view('template', $data);
					}

				} else {
					$data['notif'] = validation_errors();
					$data['main_view'] = 'tempat/tambah_tempat';
					$this->load->view('template', $data);
				}
			}
		}
	}

/* End of file add_tempat.php */
/* Location: ./application/controllers/add_tempat.php */