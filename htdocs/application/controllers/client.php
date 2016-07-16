<?php
//defined('BASEPATH') OR exit('No direct script access allowed');
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Client extends CI_Controller {
	
	public function index(){
		$this->load->view('client/layout');
	}
	public function listshop(){
		$this->load->view('client/listshop');
	}
}
