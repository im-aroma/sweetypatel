<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profiledetails extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Metadetails_model');
		$this->load->model('Prof_model');
		$this->load->model('Reviews_model');
	}


	public function view()
	{
			
		
		$pg_url = $this->uri->segment(1);
		$pro_id = $this->uri->segment(3);
		$pro_title = $this->uri->segment(2);
		
        
		$limit=8;
		
		$data['row'] = $this->Metadetails_model->get_meta_list($pg_url,$pro_id);
		$data['result']=$this->Prof_model->get_avbl_pro($cat_id = '',$loc_id='',$pro_id,$pro_title);
		$data['get_rew_list'] = $this->Reviews_model->rev_list($pro_id);
		$data['get_reply_rev_list'] = $this->Reviews_model->reply_rev_list($pro_id);
		
		$data['get_rand_prof'] = $this->Prof_model->posts_list($limit);
		
		$data['res'] = $this->Prof_model->get_list_data($pro_id);

		
        $this->load->view("includes/header",$data);
		$this->load->view('profile-details',$data);
		$this->load->view("includes/footer");
	   


		
	}


	public function ajax_review()
	{
		
		extract($_REQUEST);

		$data = array(
                    'name'=>strip_tags($name),
                    'email'=>$email,
                    'content'=>strip_tags($content),
                    'rating'=>$rating,
                    'post_id'=>$post_id,
                    'created_at'=>date('Y-m-d H:i:s')
		            );

		$this->Reviews_model->review_add($data);

		$get_rew_list = $this->Reviews_model->rev_list($post_id);


		foreach($get_rew_list as $get_rew_list_val)
		{
			$msg="<div class='col12 p10 rbgc'>
            <div class='col6'>
               <h4 class='rname'>".$get_rew_list_val['name']."</h4>
            </div>
            <div class='col6'>
               <ul class='review-rate fright'>";
                  
                      for($i=0;$i<$get_rew_list_val['rating'];$i++)
                      {  
                  $msg.="<li>
                     <svg class='img-rate' xmlns='http://www.w3.org/2000/svg' aria-hidden='true' focusable='false' data-prefix='fas' data-icon='star' role='img' viewBox='0 0 576 512'>
                        <path fill='currentColor' d='M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z'></path>
                     </svg>
                  </li>";
                   } 
               $msg.="</ul>
            </div>
            <div class='col12'>
               <p class='m0'> (Visited on ".date('Y-m-d',strtotime($get_rew_list_val['created_at'])).")</p>
               <p class='m0'>".$get_rew_list_val['content']."</p>
            </div>
         </div>";

         echo $msg;

		}

	}
	
	public function ajax_reply_review()
	{
	    extract($_REQUEST);
	    
	    $data = array(
	                'name'=>strip_tags($rname),
	                'content'=>strip_tags($rep_cont),
	                'post_id'=>$post_id,
	                'reply_review_id'=>$rep_rev_id,
	                'created_at'=>date('Y-m-d H:i:s')
	                );
	    $res = $this->Reviews_model->review_add($data);
	    
	    $get_rply_list = $this->Reviews_model->rply_list($res);
	    
	    foreach($get_rply_list as $get_rply_val)
	    {
	    
	    $msg = "<div class='col11 fright cmt'>
			<div class='col12'>
			   <h4 class='rname'>".$get_rply_val['name']."</h4>
			   <p class='m0'> (Visited on ".date('Y-m-d',strtotime($get_rply_val['created_at'])).")</p>
			   <p class='m0'>".$get_rply_val['content']."</p>
			</div>
          </div>";
          
        echo $msg;  
          
	    }  
	}
 }
