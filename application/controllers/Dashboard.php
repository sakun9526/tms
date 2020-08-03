<?php

class Dashboard extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('CRUD_model');
	}
	
	public function index(){
		$this->load->view('admin/Dashboard');
	}
	
	public function show(){
		$data =$this->CRUD_model->dataList();
		echo json_encode($data);
	}
	
	public function save(){
		$data=$this->CRUD_model->insertData();
		echo json_encode($data);
	}
	
	public function update(){
		$data=$this->CRUD_model->updateData();
		echo json_encode($data);
	} 
	
	public function delete(){
		$data->$this->CRUD_model->deleteData();
		echo json_encode($data);
	}
}