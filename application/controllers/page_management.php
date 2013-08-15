<?php

error_reporting(0);
class Page_management extends MY_Controller {
	function __construct() {
		parent::__construct();
		$this -> load -> library('PHPExcel');
		$this -> load -> helper('url');
		
	}

	public function index() {
		$data['contentView']='home';
		$this->load->view('template');
	}
}
		