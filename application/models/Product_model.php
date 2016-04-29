<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model 
{

	function __construct(){
		parent::__construct();
	}
	//get all products
	function getAllProduct(){
        return $this->db->get('p_products');
		
	
	}
	
	//get all stocked products
	function getAllProductInCSV(){
		$this->load->dbutil();

		$q = $this->db->query("SELECT * FROM p_products");

		return $this->dbutil->csv_from_result($q);
	}
	
	//get low stocked products in CSV
	function getLowStockProductInCSV()
	{
		$this->load->dbutil();

		$q = $this->db->query("SELECT * FROM p_products WHERE quantity < 10");

		return $this->dbutil->csv_from_result($q);
	}
	
	
	//get low stocked products	
	function getLowStockProduct()
	{
		return $this->db->query('SELECT * FROM p_products WHERE quantity < 10');
	
	}


}