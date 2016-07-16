<?php 
	if (!defined('BASEPATH')) exit('No direct script access allowed');
	/**
	* Page administrator
	*/
	class Admin extends MY_Controller {
		public $data = array();
		function __construct(){
			parent::__construct();
			$this->load->library('breadcrumbs');
		}
	    function index(){
	    	$this->load->view('admin/layout');
	    }
    }