<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Table_tempat extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_get');
	}

	public function index(){
	if ($this->session->userdata('logged_in') == TRUE) {
				$data['main_view'] = 'tempat/data_tempat';
				$id_tempat = $this->uri->segment(3);
				$data['tempat'] = $this->m_get->get_data_tempat();
				$this->load->view('template', $data);
			} else {
				redirect('admin');
			}
	}

	public function hapus()
	{
		if($this->session->userdata('logged_in') == TRUE)
		{
			$id_tempat = $this->uri->segment(3);

			if($this->m_get->delete($id_tempat) == TRUE)
			{
				$this->session->set_flashdata('notif', 'Hapus data berhasil!');
				redirect('table_tempat/index');
			} else {
				$this->session->set_flashdata('notif', 'Hapus data gagal!');
				redirect('table_tempat/index');
			}
		} else {
			redirect('table_tempat/index');
		}
	}

}

/* End of file table_tempat.php */
/* Location: ./application/controllers/table_tempat.php */