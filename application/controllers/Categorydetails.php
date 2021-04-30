<?php

defined('BASEPATH') or exit('No direct script access allowed');



class Categorydetails extends CI_Controller

{

		

	public function __construct()	

	{

		parent::__construct();

		$this->load->model('Metadetails_model');

		$this->load->model('Category_model');

		$this->load->model('Prof_model');

		

	}		



	public function index()

	{

       

		$this->load->view("includes/header");

		$this->load->view("category-details");

		$this->load->view("includes/footer");

	}

	

	public function view()

	{

			

		$pg_url = $this->uri->segment(1);

		$cat_id = $this->uri->segment(3);

		$cat_title = str_replace('-',' ',$this->uri->segment(2));



		$data['cate_title'] = $this->uri->segment(2);

		

		$data['row'] = $this->Metadetails_model->get_meta_list($pg_url,$cat_id);

		

		$data['result']=$this->Category_model->get_list_data($cat_id);



		$data['get_rand_list'] = $this->Category_model->get_cat_rand_title();
 

		$data['get_pro_list'] = $this->Prof_model->get_avbl_pro($loc_id='',$cat_id);

		

	
       
        $this->load->view("includes/header",$data);

		$this->load->view('category-details',$data);

		$this->load->view("includes/footer");
	  





		

	}



}