<?php

defined('BASEPATH') or exit('No direct script access allowed');



class Locationdetails extends CI_Controller

{

	public function __construct()

	{

		parent::__construct();

		$this->load->model('Metadetails_model');

		$this->load->model('Location_model');

		$this->load->model('Prof_model');

	}





	public function index()

	{	



		$this->load->view("includes/header");

		$this->load->view("location-details");

		$this->load->view("includes/footer");

	}

	public function view()

	{

			

		//$id=$this->uri->segment(3);





		$limit=8;

		$pg_url = $this->uri->segment(1);

		$loc_id = $this->uri->segment(3);

		$loc_title  = str_replace('-',' ',$this->uri->segment(2));

		$data['loc_title'] = $this->uri->segment(2);



		$data['row'] = $this->Metadetails_model->get_meta_list($pg_url,$loc_id);

		$data['result']=$this->Location_model->get_list_data($loc_id);

		$data['get_rand_list'] = $this->Location_model->get_loc_title($limit);



		$data['get_avbl_loc_list'] = $this->Prof_model->get_avbl_pro($loc_id);



      
        $this->load->view("includes/header",$data);

		$this->load->view('location-details',$data);

		$this->load->view("includes/footer");
	   
	    





	}

 }







