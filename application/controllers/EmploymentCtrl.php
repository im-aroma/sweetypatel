<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EmploymentCtrl extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Metadetails_model');
	}


	public function index()
	{
         
		if(basename($_SERVER['PHP_SELF']) == 'employment')
		{
			//echo 'hello';die;
			$data['row'] = $this->Metadetails_model->get_meta_list(basename($_SERVER['PHP_SELF']));
		}	
		
		$this->load->view("header",$data);
		$this->load->view("employment",$data);
		$this->load->view("footer");
	}
	
}



