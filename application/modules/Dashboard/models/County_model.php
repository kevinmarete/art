<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class County_model extends CI_Model {

    public function get_county_patient_distribution($filters){
		$columns = array();

		$this->db->select("CONCAT(UCASE(SUBSTRING(county, 1, 1)),UPPER(SUBSTRING(county, 2))) name, SUM(total) y", FALSE);
		if(!empty($filters)){
			foreach ($filters as $category => $filter) {
				$this->db->where_in($category, $filter);
			}
		}
		$this->db->group_by('name');
		$this->db->order_by('y', 'DESC');
		$query = $this->db->get('dsh_patient');
		$results = $query->result_array();

		foreach ($results as $result) {
			array_push($columns, $result['name']);
		}

		return array('main' => $results, 'columns' => $columns);
	}

	public function get_county_patient_distribution_numbers($filters){
		$columns = array();

		$this->db->select("CONCAT(UCASE(SUBSTRING(county, 1, 1)),UPPER(SUBSTRING(county, 2))) name, COUNT(DISTINCT facility) facilities, SUM(IF(age_category='adult', total, NULL)) adult, SUM(IF(age_category='paed', total, NULL)) child, SUM(total) total", FALSE);
		if(!empty($filters)){
			foreach ($filters as $category => $filter) {
				$this->db->where_in($category, $filter);
			}
		}
		$this->db->group_by('name');
		$this->db->order_by('total', 'DESC');
		$query = $this->db->get('dsh_patient');
		return array('main' => $query->result_array(), 'columns' => $columns);
	}

}