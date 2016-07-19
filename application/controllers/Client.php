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
	public function shop($shop_name = ""){
		$query = $this->db->query("SELECT * FROM listshop WHERE linkshop = '$shop_name'");
		if ($query->num_rows() === 1) {
			$shop_name = 'shop';
		}
		switch ($shop_name) {
			case 'admin':
				$this->load->view('admin/layout');
				break;
			case 'shop':
				$data['main'] = "";
				$data_header = $query->row_array();
				$vi_phone = $this->data['list_data'];
				$data_header['Hotline'] = $vi_phone['Hotline'];
				$data['data_header_shop'] = $data_header;
				$this->load->view('listshop/layout', $data);
				break;
			default:
				$this->load->view('client/layout', $this->data);
				break;
		}
	}
}
