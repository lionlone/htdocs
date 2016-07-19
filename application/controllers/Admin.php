<?php 
	if (!defined('BASEPATH')) exit('No direct script access allowed');
	/**
	* Page administrator
	*/
	class Admin extends CI_Controller {
	    public function index(){
			$this->load->view('admin/layout');
	    }
	    public function data($action = "", $id = ""){
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
	    	if (isset($_POST['action'])) {
	    		if (empty($_POST['nameshop'])) {
	    			echo "Lỗi: Tên shop không được để trống .";
	    		}
	    		else if(empty($_POST['adminshop'])) {
	    			echo "Lỗi: Người quản trị gian hàng không được để trống.";
	    		}
	    		else if(empty($_POST['linkshop'])) {
	    			echo "Lỗi: Link shop không được để trống .";
	    		}
	    		else if(empty($_POST['websiteshop'])) {
	    			echo "Lỗi: Webstie shop không được để trống .";
	    		}
	    		else if(empty($_POST['DiaChi'])) {
	    			echo "Lỗi: Đại chỉ không được để trống.";
	    		}
	    		else if(empty($_POST['DiaDiem'])) {
	    			echo "Lỗi: Địa điểm không được để trống.";
	    		}
	    		else if(empty($_FILES['avatar'])) {
	    			echo "Lỗi: Ảnh đại diện không được để trống.";
	    		}
	    		else if(empty($_POST['MoTa'])) {
	    			echo "Lỗi: Mô tả không được để trống.";
	    		}
	    		else if(empty($_POST['phoneshop'])) {
	    			echo "Lỗi: Số điện thoại không được để trống.";
	    		}
	    		else if(empty($_POST['emailshop'])) {
	    			echo "Lỗi: Email không được để trống.";
	    		}
		    	else{
		    		$nameshop =  $_POST['nameshop'];
			    	$adminshop = $_POST['adminshop'];
			    	$linkshop = $_POST['linkshop'];
			    	$websiteshop = $_POST['websiteshop'];
				    $id_map = $_POST['id-map'];
				    $lat = $_POST['lat'];
				    $lng = $_POST['lng'];
				    $DiaChi = $_POST['DiaChi'];
				    $DiaDiem = $_POST['DiaDiem'];
				    //$nameshop = $_POST['avatar'];
				    $MoTa = $_POST['MoTa'];
				    $phoneshop = $_POST['phoneshop'];
				    $emailshop = $_POST['emailshop'];

				    $data=array(
			            "userid" => "1",
			            "linkshop" => "$linkshop",
			            "website" => "$websiteshop",
			            "listcatid" => "1,2",
			            "vi_nameshop" => "$nameshop",
			            "vi_address" => "$DiaDiem",
			            "vi_phone" => "$phoneshop",
			            "vi_email" => "$emailshop",
			        );
			        if($this->db->insert("listshop", $data)){
			            //echo "Thêm gian hàng thành công";
			            echo true;
			        }else{
			            echo "Thêm gian hàng không thành công";
			        }
		    	}
	    	}
	    	else{
		    	$data['main'] = 'addshop';
		    	$data['css'] = array('maps-google', 'rateit');
		    	$this->load->view('admin/layout', $data);
	    	}
	    }
    }