<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Blog_model extends CI_Model 

{

    

	public function __construct()

	{

		parent::__construct();

	}





	public function blog_ins($data)

	{

		 $this->db->insert('blog',$data);



         return true;

	}



    public function get_blog_list()

    {

        $query = $this->db->get('blog');



        return $query->result_array();

    }





    public function view_blog($id)

    {

        $this->db->where('id',$id);



        $query = $this->db->get('blog');



        return $query->result_array();

    }





    public function upd_blog($data,$id)

    {

         $this->db->where('id',$id);



         $query = $this->db->update('blog',$data);



         //echo $this->db->last_query(); die;



         return true;

    }





    public function del_blog($id)

    {

        $this->db->where('id',$id);



        $query = $this->db->delete('blog');



        return true;

    }


    public function comment_ins($data)
    {
        $this->db->insert('blog_comments',$data);

        return true;
    }


    public function show_comments($blo_id)
    {
         $query = $this->db->from('blog_comments')->where('blog_id',$blo_id)->get()->result_array();

         return $query;
    }




}

