<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
        parent::__construct();
		$this->load->model('Manage_model');
	}
	
	public function index()
	{
		$this->load->view('insert_train');
	}

	public function show()
	{
		$data['query'] =$this->Manage_model->view_train();
		$this->load->view('view_train',$data);
	}
}
