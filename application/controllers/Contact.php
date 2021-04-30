<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Metadetails_model');
		$this->load->library('email');
	}


	public function index()
	{
         
		
			//echo 'hello';die;
		 $pg_url = $this->uri->segment(1);
        $tit_id = $this->uri->segment(3);

         $data['row'] = $this->Metadetails_model->get_meta_list(basename($pg_url,$tit_id));
			
		
		$this->load->view("includes/header",$data);
		$this->load->view("view_contact");
		$this->load->view("includes/footer");
	}


	public function send_email()
	{
		$config['protocol'] = 'sendmail';
        $config['mailpath'] = '/usr/sbin/sendmail';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE;
        $config['mailtype'] = 'html';

		if(!empty($this->input->post('submit')))
		{
			
            extract($this->input->post());


            $msg = "<table style='border:1px solid #000'>
                    <tr>
                    <td style='border:1px solid #000;width:30%;'>Name</td>
                    <td style='border:1px solid #000;width:50%;'>".$name."</td>
                    </tr>
                    <tr>
                    <td style='border:1px solid #000;width:30%;'>Email</td>
                    <td style='border:1px solid #000;width:50%;'>".$email."</td>
                    </tr>
                    <tr>
                    <td style='border:1px solid #000;width:30%;'>Mobile</td>
                    <td style='border:1px solid #000;width:50%;'>".$phone."</td>
                    </tr>
                    <tr>
                    <td style='border:1px solid #000;width:30%;'>Message</td>
                    <td style='border:1px solid #000;width:50%;'>".$message."</td>
                    </tr>
                   </table>";
                   
             $this->email->initialize($config);           

             $this->email->to('Mail4anikaescorts@gmail.com');
             $this->email->from($email);
             $this->email->subject($subject);
             $this->email->message($msg);


             if(! $this->email->send())
             {
                echo $this->email->print_debugger(); 

             }
             else 
             {
                  $this->session->set_flashdata('msg','Mail sent successfully');
                  redirect(base_url().'mumbai-escorts-phone-number');
             }      

           
		}
	}
	
}



