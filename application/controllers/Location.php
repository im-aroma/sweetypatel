<?php

defined('BASEPATH') or exit('No direct script access allowed');



class Location extends CI_Controller

{

	public function __construct()

	{

		parent::__construct();

		$this->load->model('Metadetails_model');

		$this->load->model('Location_model');

	}





	public function index()

	{

         

		

	     $pg_url = $this->uri->segment(1);
        $tit_id = $this->uri->segment(3);

		 $data['row'] = $this->Metadetails_model->get_meta_list(basename($pg_url,$tit_id));

	

		$data['get_loc'] = $this->Location_model->get_loc_title();

		$this->load->view('includes/header',$data);

		$this->load->view('view_location',$data);

		$this->load->view('includes/footer');

	}

	

}







