<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blogdetails extends CI_Controller
{
		
	public function __construct()	
	{
		parent::__construct();
		$this->load->model('Metadetails_model');

		$this->load->model('Blog_model');
		
		$this->load->model('Prof_model');
		
		
	}		

	public function view()
	{
		
			
		$pg_url = $this->uri->segment(1);
		$blo_id = $this->uri->segment(3);

		$data['cate_title'] = $this->uri->segment(2);

		$data['blog_id']  = $this->uri->segment(3);
		
		$data['row'] = $this->Metadetails_model->get_meta_list($pg_url,$blo_id);
		
		$data['result'] = $this->Blog_model->view_blog($blo_id);

		$data['res_com'] = $this->Blog_model->show_comments($blo_id);
		
		$data['get_blo_dt_list'] = $this->Prof_model->get_pro_blog_list();
		
		$data['get_blog_list'] = $this->Blog_model->get_blog_list();
		
	
        $this->load->view("includes/header",$data);
		$this->load->view('blog-details',$data);
		$this->load->view("includes/footer");


		
	}

	public function ajax_comment()
	{
		 extract($_REQUEST);

		 $data = array(
                     'blog_id'=>$blog_id,
                     'name'=>$name,
                     'email'=>$email,
                     'comment'=>$content,
                     'website'=>$website,
                     'posted_date'=>date('Y-m-d H:i:s')
		           );

		 $this->Blog_model->comment_ins($data);
		 echo '1';
	}


	

}