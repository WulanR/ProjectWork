<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_budget extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$data['main_view'] = 'budget/tambah_budget';
		$this->load->view('template', $data);
	}

}

/* End of file add_budget.php */
/* Location: ./application/controllers/add_budget.php */