<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restrict extends CI_Controller{
	
	public function index(){
		$data = array(
			"scripts" => array(
				"util.js",
				"login.js"
			)
		);
		$this->template->show("login.php", $data);
	}
}