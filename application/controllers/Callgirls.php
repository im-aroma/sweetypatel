<?php

defined('BASEPATH') or exit('No direct script access allowed');



class Callgirls extends CI_Controller

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

		 $pg_url = $this->uri->segment(1);
        $tit_id = $this->uri->segment(3);

		 $data['row'] = $this->Metadetails_model->get_meta_list(basename($pg_url,$tit_id));
		 $data['get_all_prof'] = $this->Prof_model->get_profile_post();

		

	

		$this->load->view('includes/header',$data);

		$this->load->view('view_call-girls',$data);

		$this->load->view('includes/footer');

	}

	

}







