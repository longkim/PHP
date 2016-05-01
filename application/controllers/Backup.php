<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backup extends CI_Controller 
{
	
	function __contruct()
	{
		parent::__contruct();		
	}
	
	
	function index()
	{
		$data['title'] = "Backup Database";
		$this->load->model('Sales_model');
		$table = $this->Sales_model->listAllTable();
		$data['table'] = $table;
		$this->load->view('header',$data);
		$this->load->view("backup_view");
	}
	
	
	function dumptable()
	{
		$tablename = $this->input->post('tablename');
		$this->load->model('Sales_model');
		$backup = $this->Sales_model->backup($tablename);
		$path =  FCPATH."assets"."\\".$tablename."_".date('d_F_Y_H_i_s').".sql";
		// Write the contents back to the file
		file_put_contents($path, $backup);
		echo "The file has been written to ".$path;
	}
}?>