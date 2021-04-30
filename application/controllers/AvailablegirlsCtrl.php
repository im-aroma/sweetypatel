<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AvailablegirlsCtrl extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Metadetails_model');
		$this->load->model('Prof_model');
	}


	public function index()
	{
         
		
			//echo 'hello';die;
		$data['row'] = $this->Metadetails_model->get_meta_list(basename($_SERVER['PHP_SELF']));
		
		$limit = 4;
		$data['res']  = $this->Prof_model->posts_list($limit);

		$this->load->model('Category_model');
		$cat_limit =12;
		$data['result']  = $this->Category_model->get_cat_list($cat_limit);

		$this->load->view("header",$data);
		$this->load->view("availablegirls",$data);
		$this->load->view("footer");
	}
	
}
	


