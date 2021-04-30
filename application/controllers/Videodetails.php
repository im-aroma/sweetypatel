<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Videodetails extends CI_Controller
{
		
	public function __construct()	
	{
		parent::__construct();
		$this->load->model('Metadetails_model');
		$this->load->model('Videos_model');
	
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
		$tit_id = $this->uri->segment(3);
		$data['row'] = $this->Metadetails_model->get_meta_list($pg_url,$tit_id);
		$data['result'] = $this->Videos_model->view_videos($tit_id);
		
		$data['get_rand_video_list'] = $this->Videos_model->get_rand_videos();
	
        $this->load->view("includes/header",$data);
		$this->load->view('video_details',$data);
		$this->load->view("includes/footer");


		
	}

}