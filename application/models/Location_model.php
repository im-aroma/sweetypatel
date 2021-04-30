<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Location_model extends CI_Model 

{

    

	public function __construct()

	{

		parent::__construct();

		
	}





	public function loc_ins($data)

	{

		 $this->db->insert('location',$data);



         return true;

	}



    public function get_loc_list()

    {
        

        $query = $this->db->get('location');



        return $query->result_array();

    }


    public function view_loc($id)

    {

        $this->db->where('id',$id);



        $query = $this->db->get('location');



        return $query->result_array();

    }





    public function upd_loc($data,$id)

    {

         $this->db->where('id',$id);



         $query = $this->db->update('location',$data);



         //echo $this->db->last_query(); die;



         return true;

    }





    public function del_loc($id)

    {

        $this->db->where('id',$id);



        $query = $this->db->delete('location');



        return true;

    }





   
   public function get_list_data($tit_id)
   {

        $this->db->where('id',$tit_id);
        $query = $this->db->get('location');
       // echo $this->db->last_query(); die;
        return $query->result_array();
   }



    public function get_loc_title($limit='')
    {
        $this->db->select("*");

        $this->db->from('location');

        if(!empty($limit))
        {
           $this->db->order_by('rand()');
           $this->db->limit($limit);
        }

        $query = $this->db->get();

        //echo $this->db->last_query(); die;
        return $query->result_array();
    }
    




    
	

}

