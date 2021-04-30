<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Meta_model extends CI_Model 

{

    

	public function __construct()

	{

		parent::__construct();

		$this->load->database();

	}





	public function meta_add($data)

	{

		 $this->db->insert('meta_tags',$data);



         return true;

	}





    public function meta_list()

    {

        $query = $this->db->get('meta_tags');



        return $query->result_array();

    }





    public function get_meta_list($edit_id)

    {

        $this->db->where('id',$edit_id);



        $query = $this->db->get('meta_tags');



        return $query->result_array();

    }





    public function meta_update($data,$upd_id)

    {

        $this->db->where('id',$upd_id);


        $query = $this->db->update('meta_tags',$data);





        //echo $this->db->last_query(); die;



        return true;

    }





    public function meta_del($del_id)

    {

         $this->db->where('id',$del_id);



         $query = $this->db->delete('meta_tags');



         return true;

    }





    public function get_page()

    {

        $query = $this->db->get('pages');



        return $query->result_array();





    }





    public function get_location()

    {

        $query = $this->db->get('location');



        return $query->result_array();

    }



    

    public function get_profile()

    {

        $query = $this->db->get('profile_post');



        return $query->result_array();

    }





    public function get_blog()

    {

        $query = $this->db->get('blog');



        return $query->result_array();

    }





    public function get_category_list()

    {

        $query = $this->db->get('category');



        return $query->result_array();

    }

	

	public function get_video_list()

	{

		$query = $this->db->get('videos');



        return $query->result_array();

	}





	

}

