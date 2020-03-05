<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use GuzzleHttp\Client;

class Getdata_m extends CI_model
{
	
	public function getdata($id_stasiun = ""){
		$this->db->where('id_stasiun', $id_stasiun);
		$this->db->order_by('id', 'DESC');
		$this->db->limit('1');
		$query = $this->db->get('aqm_data');
		return $query->result_array();
	}

	public function getalldata($id_stasiuns = [])
	{
		$this->db->select('DISTINCT(waktu), id_stasiun, h2s, cs2, ws, wd, humidity, temperature, pressure, sr, rain_intensity');
		if(count($id_stasiuns) > 0){
			$this->db->where_in('id_stasiun', $id_stasiuns);
		}
		$this->db->group_by('waktu'); 
		$this->db->order_by('waktu', 'DESC');
		$query = $this->db->get('aqm_data');
		return $query->result_array();
	}

	public function get_indoor_groups($id_group){
		$this->db->where('id_group', $id_group);
		$query = $this->db->get('indoor_groups');
		return $query->result_array();
	}
}