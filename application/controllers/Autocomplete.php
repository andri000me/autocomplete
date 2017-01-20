<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Autocomplete extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_autocomplete');
	}

	function index()
	{
		//$this->load->view('autocomplete/header');
		//$this->load->view('autocomplete/form');
		//$this->load->view('autocomplete/footer');

		$this->load->view('autocomplete');
	}

	function lookup()
	{
		$term = $this->input->get('term');
		if (isset($term)) {
			$q = strtolower($term);
			$query = $this->m_autocomplete->lookup($q);

			if (count($query) > 0) {
					foreach ($query as $row) {
						$new_row['label'] = htmlentities(stripcslashes($row['negara']));
						$new_row['value'] = htmlentities(stripcslashes($row['ibu_kota']));
						$row_set[] = $new_row;
					}
			echo json_encode($row_set);
			}
		}


	}


}