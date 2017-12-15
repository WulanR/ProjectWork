<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Table_kuliner extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_get');
	}

	public function index(){
	if ($this->session->userdata('logged_in') == TRUE) {
				$data['main_view'] = 'kuliner/data_kuliner';
				$id_kuliner = $this->uri->segment(3);
				$data['kuliner'] = $this->m_get->get_data_kuliner();
				$this->load->view('template', $data);
			} else {
				$this->load->view('login_view');
			}
	}

	public function hapus()
	{
		if($this->session->userdata('logged_in') == TRUE)
		{
			$id_kuliner = $this->uri->segment(3);

			if($this->m_get->delete2($id_kuliner) == TRUE)
			{
				$this->session->set_flashdata('notif', 'Hapus data berhasil!');
				redirect('table_kuliner/index');
			} else {
				$this->session->set_flashdata('notif', 'Hapus data gagal!');
				redirect('table_kuliner/index');
			}
		} else {
			redirect('table_kuliner/index');
		}
	}

}

/* End of file table_kuliner.php */
/* Location: ./application/controllers/table_kuliner.php */