<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Reviews_model extends CI_Model 

{

    

	public function __construct()

	{

		parent::__construct();

	

	}


    public function review_add($data)
    {
        $this->db->insert('reviews',$data);

        return $this->db->insert_id();
    }

	public function reviews_list()

	{

		$query = $this->db->get('reviews');



		return $query->result_array();

	}



	public function reviews_edit($edit_id)

	{

		$this->db->where('id',$edit_id);

		$query = $this->db->get('reviews');



		return $query->result_array();

	}



	public function reviews_upd($data,$upd_id)

	{

		 $this->db->where('id',$upd_id);

		 $query = $this->db->update('reviews',$data);



		 return true;

	}



	public function review_del($del_id)

 	{

 		$this->db->where('id',$del_id);

 		$this->db->delete('reviews');



 		return true;



	}


	public function rev_list($pro_id)
	{
	    $where = array('post_id'=>$pro_id);
		$query = $this->db->from('reviews')->where($where)->order_by('id','desc')->get();
		
		return $query->result_array();
	}
	
	
	public function reply_rev_list($pro_id)
	{
	    $where = array('post_id'=>$pro_id,'reply_review_id !='=>NULL);
	    $query = $this->db->from('reviews')->where($where)->get();
	    
	    return $query->result_array();
	}
	
	
	public function rply_list($rply_id)
	{
	     $where = array('id'=>$rply_id,'reply_review_id !='=>NULL);
	     $query = $this->db->from('reviews')->where($where)->get();
	     
	     //echo $this->db->last_query(); die;
	     
	     return $query->result_array();
	}



}

