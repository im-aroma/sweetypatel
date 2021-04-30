<?php



defined('BASEPATH') OR exit('No direct script access allowed');







class Category_model extends CI_Model 



{



    	



	public function __construct()



	{



		parent::__construct();



	



	}







	public function cat_list()



	{



		$query = $this->db->get('category');

        

		return $query->result_array();



	}



    public function get_cat_list($limit='')

    {

        $this->db->select('*');

        $this->db->from('category');

        if(!empty($limit))

        { 

         $this->db->order_by('rand()');   

         $this->db->limit($limit);

        }

        

        $query = $this->db->get();



        //echo $this->db->last_query(); die; 

        

        return $query->result_array();

    }







	public function cat_add($data)



	{



		$this->db->insert('category',$data);







		return true;



	}











	public function cat_edit($edit_id)



	{



		$this->db->where('id',$edit_id);







		$query = $this->db->get('category');







		return $query->result_array();



	}











	public function cat_upd($data,$upd_id)



	{



		$this->db->where('id',$upd_id);







		$query = $this->db->update('category',$data);







		return true;







	}











	public function cat_del($del_id)



	{



		$this->db->where('id',$del_id);







		$this->db->delete('category');







		return true;



	}





	public function get_list_data($tit_id)

	{



        $this->db->where('id', $tit_id);

        $query = $this->db->get('category');

       // echo $this->db->last_query(); die;

        return $query->result_array();

    }







    public function get_cat_title()

    {



    	$this->db->select('id,trim(cat_title) as cat_title,trim(sub_cat_title) as sub_cat_title');



    	$this->db->from('category');



    	$query = $this->db->get();



    	return $query->result_array();



    }





    public function get_cat_rand_title()

    {

    	$this->db->select('*');



    	$this->db->from('category');



    	$this->db->order_by('rand()');



    	$this->db->limit(8);



    	$query = $this->db->get();



    	return $query->result_array();

    }







	





}



