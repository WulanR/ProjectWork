<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_get extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function get_data_tempat_by_id($id_tempat)
	{
		return $this->db->where('ID_TEMPAT', $id_tempat)->get('tempat_wisata')->row();
	}

	public function get_data_kuliner_by_id($id_kuliner)
	{
		return $this->db->where('ID_KULINER', $id_kuliner)->get('tempat_kuliner')->row();
	}	

	public function get_data_tempat(){
		return $this->db->order_by('ID_TEMPAT','ASC')
						->get('tempat_wisata')
						->result();
	}

	public function get_data_kuliner(){
		return $this->db->order_by('ID_KULINER','ASC')
						->get('tempat_kuliner')
						->result();
	}

	function delete($id_tempat){
		$this->db->where('ID_TEMPAT', $id_tempat)
				->delete('tempat_wisata');

			if($this->db->affected_rows() > 0)
				{
					return TRUE;
				} else {
					return FALSE;
				}
	}

	function delete2($id_kuliner){
		$this->db->where('ID_KULINER', $id_kuliner)
				->delete('tempat_kuliner');

			if($this->db->affected_rows() > 0)
				{
					return TRUE;
				} else {
					return FALSE;
				}
	}

	public function update($id_tempat){
		$data = array(
			'NAMA_TEMPAT' => $this->input->post('nm_tempat'),
			'ALAMAT_WISATA' => $this->input->post('alamat_wis'),
			'KETERANGAN' => $this->input->post('keterangan'),
			'HARGA_WISATA' => $this->input->post('harga_wis'),
			//'FOTO' => $this->input->post('foto')
			);

		$this->db->where('ID_TEMPAT',$id_tempat)
				->update('tempat_wisata', $data);

				if($this->db->affected_rows() > 0){
					return TRUE;
				} else {
					return FALSE;
				}
	}

	public function update2($id_kuliner){
		$data = array(
			'NAMA_KULINER' => $this->input->post('nm_kuliner'),
			'HARGA_KULINER' => $this->input->post('harga_kul'),
			'KETERANGAN' => $this->input->post('keterangan'),
			'ALAMAT_KULINER' => $this->input->post('alamat_kul'),
			//'FOTO' => $this->input->post('foto')
			);

		$this->db->where('ID_KULINER',$id_kuliner)
				->update('tempat_kuliner', $data);

				if($this->db->affected_rows() > 0){
					return TRUE;
				} else {
					return FALSE;
				}
	}

}

/* End of file m_get.php */
/* Location: ./application/models/m_get.php */