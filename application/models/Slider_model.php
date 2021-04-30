<?php

class Slider_model extends CI_model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function get_images()
	{
		$query = $this->db->get('slider_images');

		return $query->result_array();
	}


	public function upd_img_act($prof_id)
	{
		$cnt_pro = count($prof_id);

		$data = array(
                    'status'=>1
		           );

		for($i=0;$i<$cnt_pro;$i++)
		{
           $this->db->where('pro_id',$prof_id[$i]);

           $this->db->update('slider_images',$data);
		}

		return true;
	}


	public function get_active_img()
	{
		$this->db->select('profile_post.alt_title,slider_images.*');
		
		$this->db->from('profile_post');
		
		$this->db->join('slider_images','profile_post.id = slider_images.pro_id');
		
		$this->db->where('slider_images.status',1);
		
		$query = $this->db->get();
		
		return $query->result_array();
	}


}