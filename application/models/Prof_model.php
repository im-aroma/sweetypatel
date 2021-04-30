<?php

defined('BASEPATH') or exit('No direct script access allowed');



class Prof_model extends CI_Model
{



    public function __construct()
    {

        parent::__construct();

    
    }





    public function post_add($data) 
    {

        $this->db->insert('profile_post', $data);

        return $this->db->insert_id();
    }


    public function posts_list($limit='')
    {
        $this->db->select('*');
        $this->db->from('profile_post');
        if(!empty($limit))
        { 
         $this->db->order_by('rand()');   
         $this->db->limit($limit);
        }
        
        $query = $this->db->get();

        //echo $this->db->last_query(); die; 
        
        return $query->result_array();
    }





    public function get_post_list($edit_id)
    {

        $this->db->where('id', $edit_id);
        $query = $this->db->get('profile_post');
        return $query->result_array();
    }


    public function get_list()
    {
        $this->db->select('`profile_post`.*, avg(reviews.rating) as rating');

        $this->db->from('profile_post');

        $this->db->join('reviews','`profile_post`.`id` = `reviews`.`post_id`','left');

        $this->db->group_by('`profile_post`.`title`');

        $query = $this->db->get();

       // echo $this->db->last_query(); die;

        return $query->result_array();
    }


    public function post_update($data, $upd_id)
    {

        $query = $this->db->update('profile_post', $data,array('id'=>$upd_id));

        return true;
    }





    public function post_del($del_id)
    {

        $this->db->where('id', $del_id);

        $query = $this->db->delete('profile_post');

        return true;
    }

    public function get_list_data($pro_id)
    {

        $this->db->select('profile_post.*,GROUP_CONCAT(services.service) as service_name');

        $this->db->from('profile_post');

        $this->db->join('services','find_in_set(services.id,profile_post.service)<>0');

        $this->db->where('profile_post.id',$pro_id);

        $query = $this->db->get();

     //echo $this->db->last_query(); die;
    
        return $query->result_array();
    }


    public function get_avbl_pro($loc_id='',$cat_id='')
    {

        $this->db->select('*');

        $this->db->from('profile_post');

        if(!empty($loc_id))
        {
            $this->db->where("find_in_set('$loc_id',profile_post.avbl_loc)!=",0);
        }
        
        if(!empty($cat_id))
        {
            $this->db->where("find_in_set('$cat_id',profile_post.avbl_cat)!=",0);
        }
        

        $query = $this->db->get();

       // echo $this->db->last_query(); die;

        return $query->result_array();
    }

    
    public function get_last_ten_records()
    {

        $sub_query = '(SELECT * FROM `profile_post` order by id desc limit 10) sub';

        $where_ten_cat = "find_in_set(category.id,sub.avbl_cat)<>0";

        $where_ten_loc = "find_in_set(location.id,sub.avbl_loc)<>0 ";

        $where_ten_st  = "find_in_set(states.id,sub.avbl_st)<>0";

        $this->db->select("sub.*,states.state_name,avg(reviews.rating) as rating,GROUP_CONCAT(DISTINCT(category.sub_cat_title))cat_title,GROUP_CONCAT(DISTINCT(location.sub_loc_title)) loc_title");

        $this->db->from($sub_query);

        $this->db->join('category',$where_ten_cat,'left');

        $this->db->join('location',$where_ten_loc,'left');

        $this->db->join('states',$where_ten_st,'left');

        $this->db->join('reviews','sub.id = reviews.post_id','left');

        $this->db->group_by('sub.title');

        $this->db->order_by('rand()');

        $query = $this->db->get();

        //echo $this->db->last_query(); die;

        return $query->result_array();

    }


    public function get_profile_post()
    {
        $this->db->select('profile_post.*,states.state_name,avg(reviews.rating) as rating,group_concat(DISTINCT(category.sub_cat_title)) cat_title,GROUP_CONCAT(DISTINCT(location.sub_loc_title)) loc_title');
        $this->db->from('profile_post');
        $this->db->join('states','profile_post.avbl_st = states.id','left');
        $this->db->join('reviews','`profile_post`.`id` = `reviews`.`post_id`','left');
        $this->db->join('category','find_in_set(category.id,profile_post.avbl_cat)<>0','left');
        $this->db->join('location','find_in_set(location.id,profile_post.avbl_loc)<>0','left');
        $this->db->group_by('`profile_post`.`title`');
        $this->db->order_by('profile_post.id','asc');
        $query = $this->db->get();

        //echo $this->db->last_query(); die; 
        return $query->result_array();
    }



    public function gal_add($data_slider_img)
    {
        $this->db->insert('slider_images',$data_slider_img);


       // echo $this->db->last_query(); die;

        return true;
    }


    public function gal_upd($data_slider_img,$upd_id)
    {
         $this->db->where('pro_id',$upd_id);

         $this->db->update('slider_images',$data_slider_img);

         return true;
    }


    public function get_pro_blog_list()
    {
         $query = $this->db->from('profile_post')->order_by('rand()')->limit(10)->get();
         
         return $query->result_array();
         
         
    }

    public function get_ten_pro_data()
    {
        $query = $this->db->from('profile_post')->limit(10)->get();

        return $query->result_array();
    }


    public function get_expt_ten_pro_data()
    {
        $this->db->select('*');

        $this->db->from('profile_post');

        $this->db->where("profile_post.id NOT IN (select * from(select id from profile_post order by id limit 10)sub)",NULL,false);

        $query = $this->db->get();

       // echo $this->db->last_query(); die;

        return $query->result_array();
    }


    public function get_mumbai_escorts_profile()
    {
        $query = $this->db->from('profile_post')->order_by('id','desc')->get();

        return $query->result_array();
    }

     
}
