<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Table_budget extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$data['main_view'] = 'budget/data_budget';
		$this->load->view('template', $data);
	}

}

/* End of file table_budget.php */
/* Location: ./application/controllers/table_budget.php */