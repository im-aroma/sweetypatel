<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Pro_type_model extends CI_Model 

{

    

	public function __construct()

	{

		parent::__construct();

		
	}





	public function pro_type_ins($data)

	{

		 $this->db->insert('profile_type',$data);



         return true;

	}



    public function get_pro_type_list()

    {
        

        $query = $this->db->get('profile_type');



        return $query->result_array();

    }


    public function view_pro_type($id)

    {

        $this->db->where('id',$id);



        $query = $this->db->get('profile_type');



        return $query->result_array();

    }





    public function upd_pro_type($data,$id)

    {

         $this->db->where('id',$id);



         $query = $this->db->update('profile_type',$data);



         //echo $this->db->last_query(); die;



         return true;

    }





    public function del_pro_type($id)

    {

        $this->db->where('id',$id);



        $query = $this->db->delete('profile_type');



        return true;

    }



}

