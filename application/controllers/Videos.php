<?php

defined('BASEPATH') or exit('No direct script access allowed');



class Videos extends CI_Controller

{

	public function __construct()

	{

		parent::__construct();

		$this->load->model('Metadetails_model');

		$this->load->model('Videos_model');

	}





	public function index()

	{

         

		

	     $pg_url = $this->uri->segment(1);
        $tit_id = $this->uri->segment(3);

		 $data['row'] = $this->Metadetails_model->get_meta_list(basename($pg_url,$tit_id));

	

		$data['get_video_list'] = $this->Videos_model->get_video_list();

		$this->load->view('includes/header',$data);

		$this->load->view('view_videos',$data);

		$this->load->view('includes/footer');

	}

	

}







