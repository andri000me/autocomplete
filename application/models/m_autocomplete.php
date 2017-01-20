<?php

class M_autocomplete extends CI_model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function lookup($keyword)
	{
		$this->db->select('*');
		$this->db->like('negara', $keyword);
		$query = $this->db->get('data_negara');

		return $query->result_array();
		
	}

}