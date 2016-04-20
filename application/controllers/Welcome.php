<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	function __contruct(){
		parent::__contruct();		
	}

	public function index()
	{
		$session_user = $this->session->userdata('username');
		if(!isset($session_user) || ($session_user==''))
		{
			$this->session->set_flashdata('msg',"Please login to continue");
			redirect('admin');
		}
		  
		$this->load->model('Product_model');
		$res = $this->Product_model->getAllProduct();
		$resCSV = $this->Product_model->getAllProductInCSV();
		$low = $this->Product_model->getLowStockProduct();
		$lowCSV = $this->Product_model->getLowStockProductInCSV();
		$data['resCSV'] = $resCSV;
		$data['lowCSV'] = $lowCSV;
		$data['result'] = $res->result();
		$data['low'] = $low->result();
		$data['title'] = "Home Page";
		$this->load->view('header',$data);
		$this->load->view('welcome_message');
	}
	
	function write_csv(){
		$data = $this->input->post('data');
		$filename = $this->input->post('filename');
		$path =  FCPATH."assets"."\\".$filename.".csv";
		// Write the contents back to the file
		file_put_contents($path, $data);
		echo "The file has been written to ".$path;
	}

}
