<?php
//defined('BASEPATH') OR exit('No direct script access allowed');
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Client extends CI_Controller {
	public $data = array();
	public function __construct(){
        parent::__construct();
        $query_data = $this->db->query("SELECT * FROM data");
        $list_data_array = $query_data->result_array();
        $list_data = array();
        foreach ($list_data_array as $key => $value) {
        	$list_data[$value['key']] = $value['data'];
        }
	    $this->data['list_data'] = $list_data;
    }
	public function index(){
		$this->load->view('client/layout', $this->data);
	}
	public function listshop(){
		$this->load->view('listshop/layout');
	}
}
