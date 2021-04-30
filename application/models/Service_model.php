<?php
Class Service_model extends CI_Model
{
    public function __construct()
    {
     parent::__construct();
     $this->load->database();
    }

    public function add_service($data)
    {
        $this->db->insert('services',$data);

        return true;
    }

    public function view_service()
    {
         $query = $this->db->get('services');

         return $query->result_array();
    }

    public function disp_service($edit_id)
    {
       $query = $this->db->from('services')->where('id',$edit_id)->get();

       return $query->row_array();
    }

    public function upd_service($data,$upd_id)
    {
         $this->db->update('services',$data,array('id'=>$upd_id));

         return true;

    }

    public function delt_service($del_id)
    {
         $this->db->delete('services',array('id'=>$del_id));

         return true;
    }
}
?>