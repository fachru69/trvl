<?php 
 
class Admin extends CI_Controller{
 
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("admin/login"));
		}
	}
 
	function index(){
		$this->load->view('admin/index');
	}
    function charts(){
        $this->load->view('admin/charts');
    }
    function article(){
        $this->load->view('admin/article');
    }
    function view(){
        $this->load->view('admin/view');
    }
}