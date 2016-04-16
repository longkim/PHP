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
		$data['title'] = "Home Page";
		$this->load->view('header',$data);
		$this->load->view('welcome_message');
	}
	
	//Yujia, random colour
	function randomColor() { 
    $str = '#'; 
    for($i = 0 ; $i < 6 ; $i++) { 
        $randNum = rand(0 , 15); 
        switch ($randNum) { 
            case 10: $randNum = 'A'; break; 
            case 11: $randNum = 'B'; break; 
            case 12: $randNum = 'C'; break; 
            case 13: $randNum = 'D'; break; 
            case 14: $randNum = 'E'; break; 
            case 15: $randNum = 'F'; break; 
        } 
        $str .= $randNum; 
    } 
    return $str; 
} 
$color = randomColor();
//Yujia, random colour
}
