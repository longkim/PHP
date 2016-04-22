<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales_model extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	function getAllSales(){
        return $this->db->get('p_sales');
		
	
	}
	
	function getAllSalesInCSV(){
		$this->load->dbutil();

		$q = $this->db->query("SELECT * FROM p_sales");

		return $this->dbutil->csv_from_result($q);
	}
	
	
	function getMaleCustomer(){
		return $this->db->query("SELECT * FROM p_sales WHERE gender='Male'");
	}
	
	function getMaleCustomerInCSV(){
		$this->load->dbutil();

		$q = $this->db->query("SELECT * FROM p_sales WHERE gender='Male'");

		return $this->dbutil->csv_from_result($q);
	}
	
	function getFemaleCustomer(){
		return $this->db->query("SELECT * FROM p_sales WHERE gender='Female'");
	}
	
	function getFemaleCustomerInCSV(){
		$this->load->dbutil();

		$q = $this->db->query("SELECT * FROM p_sales WHERE gender='Female'");

		return $this->dbutil->csv_from_result($q);
	}
	
	function getOutstandingSales(){
		return $this->db->query("SELECT * FROM p_sales WHERE balance !=0");		
	}
	
	function getOutstandingSalesInCSV(){
		$this->load->dbutil();

		$q = $this->db->query("SELECT * FROM p_sales WHERE balance !=0");

		return $this->dbutil->csv_from_result($q);
	}
	
	function getPendingPayment(){
		return $this->db->query("SELECT * FROM p_sales WHERE payment_status = 'pending'");		
	}
	
	function getPendingPaymentInCSV(){
		$this->load->dbutil();

		$q = $this->db->query("SELECT * FROM p_sales WHERE payment_status = 'pending'");

		return $this->dbutil->csv_from_result($q);
	}
	
	function getPendingShipping(){
		return $this->db->query("SELECT * FROM p_sales WHERE shipping_status = 'pending'");	
	}
	
	function getPendingShippingInCSV(){
		$this->load->dbutil();

		$q = $this->db->query("SELECT * FROM p_sales WHERE shipping_status = 'pending'");

		return $this->dbutil->csv_from_result($q);
	}
	
	
	function listAllTable(){
		return $this->db->list_tables();
	}
	
	function backup($tablename){
		$this->load->dbutil();
		$prefs = array(
                'tables'      => array($tablename),  // Array of tables to backup.
                'ignore'      => array(),           // List of tables to omit from the backup
                'format'      => 'txt',             // gzip, zip, txt
                'filename'    => $tablename.'.sql',    // File name - NEEDED ONLY WITH ZIP FILES
                'add_drop'    => TRUE,              // Whether to add DROP TABLE statements to backup file
                'add_insert'  => TRUE,              // Whether to add INSERT data to backup file
                'newline'     => "\n"               // Newline character used in backup file
              );
		
	}
	
	
}