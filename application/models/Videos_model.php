<?php



defined('BASEPATH') OR exit('No direct script access allowed');







class Videos_model extends CI_Model 



{



    



	public function __construct()

	{



		parent::__construct();



		



	}











	public function video_ins($data)



	{



		 $this->db->insert('videos',$data);







         return true;



	}







    public function get_video_list()



    {



        $query = $this->db->get('videos');







        return $query->result_array();



    }











    public function view_videos($id)



    {



        $this->db->where('video_id',$id);







        $query = $this->db->get('videos');







        return $query->result_array();



    }











    public function upd_videos($data,$id)



    {



         $this->db->where('video_id',$id);







         $query = $this->db->update('videos',$data);







         //echo $this->db->last_query(); die;







         return true;



    }











    public function del_videos($id)



    {



        $this->db->where('video_id',$id);







        $query = $this->db->delete('videos');







        return true;



    }





    public function get_rand_videos()

    {

        $this->db->select('*');



        $this->db->from('videos');

        $this->db->limit(12);

        $this->db->order_by("video_id", "desc");

        $query = $this->db->get();



       // echo $this->db->last_query(); die;



        return $query->result_array();

    }











   



    











	



}



