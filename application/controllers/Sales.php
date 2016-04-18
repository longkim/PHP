<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales extends CI_Controller {
	
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
		
		
		$this->load->model('Sales_model');
		$res = $this->Sales_model->getAllSales();
		$male = $this->Sales_model->getMaleCustomer();
		$female = $this->Sales_model->getFemaleCustomer();
		$outstanding = $this->Sales_model->getOutstandingSales();
		$payment = $this->Sales_model->getPendingPayment();;
		$shipping = $this->Sales_model->getPendingShipping();
		
		$data['result'] = $res->result();
		$data['male'] = $male->result();
		$data['female'] = $female->result();
		$data['outstanding'] = $outstanding->result();
		$data['payment'] = $payment->result();
		$data['shipping'] = $shipping->result();
		
		//================ CSV ===================================
		
		$resCSV = $this->Sales_model->getAllSalesInCSV();
		$maleCSV = $this->Sales_model->getMaleCustomerInCSV();
		$femaleCSV = $this->Sales_model->getFemaleCustomerInCSV();
		$outstandingCSV = $this->Sales_model->getOutstandingSalesInCSV();
		$paymentCSV = $this->Sales_model->getPendingPaymentInCSV();;
		$shippingCSV = $this->Sales_model->getPendingShippingInCSV();
		
		$data['resCSV'] = $resCSV;
		$data['maleCSV'] = $maleCSV;
		$data['femaleCSV'] = $femaleCSV;
		$data['outstandingCSV'] = $outstandingCSV;
		$data['paymentCSV'] = $paymentCSV;
		$data['shippingCSV'] = $shippingCSV;
		//$data['lowCSV'] = $lowCSV;
		
		//$data['low'] = $low->result();
		$data['title'] = "Home Page";
		$this->load->view('header',$data);
		$this->load->view('sales_view');
	}
	
	
	function write_csv(){
		$data = $this->input->post('data');
		$filename = $this->input->post('filename');
		$path =  FCPATH."assets"."\\".$filename.".csv";
		// Write the contents back to the file
		file_put_contents($path, $data);
		echo "The file has been written to ".$path;
	}
	
	function analysis(){
		$data['title'] = "Analysis Page";
		$this->load->model('Sales_model');
		$this->load->helper('pdf_helper');
		
		
		$male = $this->Sales_model->getMaleCustomer();
		$female = $this->Sales_model->getFemaleCustomer();
		$outstanding = $this->Sales_model->getOutstandingSales();
		$payment = $this->Sales_model->getPendingPayment();;
		$shipping = $this->Sales_model->getPendingShipping();
		
		$data['male'] = $male->num_rows();
		$data['female'] = $female->num_rows();
		$data['outstanding'] = $outstanding->num_rows();
		$data['payment'] = $payment->num_rows();
		$data['shipping'] = $shipping->num_rows();
		
		$this->load->view('header',$data);
		$this->load->view("analysis_view");
	}
}
