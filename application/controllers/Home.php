<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$indoor_groups = $this->getdata_m->get_indoor_groups($_GET["group_id"]);
		foreach($indoor_groups as $key => $indoor_group){
			$views[$key]["id_stasiun"] = $indoor_group["id_stasiun"];
			$views[$key]["caption"] = $indoor_group["caption"];
		}
		
		foreach($views as $key => $view){
			$data["aqms"][$key] = $this->getdata_m->getdata($view["id_stasiun"]);
			$data["caption"][$key] = $view["caption"];
		}
		$this->load->view('indoor/indoor', $data);
	}
}
