<?php 
	if (!defined('BASEPATH')) exit('No direct script access allowed');
	/**
	* Page administrator
	*/
	class Admin extends CI_Controller {
	    function index(){
			$this->load->view('admin/layout');
	    }
	    function data($action = "", $id = ""){
	    	$data['main'] = 'data';
	    	$data['edit_data'] = '';
	    	$query = $this->db->query("SELECT * FROM data");
	    	$list_data_array = $query->result_array();
	    	if ($action == 'edit' && isset($id)) {
	    		foreach ($list_data_array as $key => $value) {
	    			if ($value['id'] == $id) {
	    				if (isset($_POST['data'])) {
	    					$data_update = $_POST['data'];
	    					$result = $this->db->where('id', $id)->update("data", array('data' => $data_update));
	    					$query = $this->db->query("SELECT * FROM data");
					    	$list_data_array = $query->result_array();
	    				}
	    				else{
	    					$data['edit_data'] = $value;
	    				}
	    			}
		    	}
	    	}
	    	if ($data['edit_data'] != '') {
	    		$data['main'] = 'edit_data';
	    	}
	    	$data['list_data'] = $list_data_array;
	    	$this->load->view('admin/layout', $data);
	    }
	    public function addshop(){
	    	$data['main'] = 'addshop';
	    	$data['css'] = array('maps-google', 'rateit');
	    	$this->load->view('admin/layout', $data);
	    }
    }