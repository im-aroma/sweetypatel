<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Vacancy extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Metadetails_model');
		$this->load->library('email');
	}


	public function index()
	{
         
		
		 $pg_url = $this->uri->segment(1);
        $tit_id = $this->uri->segment(3);

         $data['row'] = $this->Metadetails_model->get_meta_list(basename($pg_url,$tit_id));
		
		$this->load->view("includes/header",$data);
		$this->load->view("view_vacancy",$data);
		$this->load->view("includes/footer");
	}


	public function send_vacancy_email()
	{
		
		if(!empty($this->input->post('vac_submit')))
		{
			$subject = 'Vacancy Message';
            extract($this->input->post());
            
            $config['protocol'] = 'sendmail';
            $config['mailpath'] = '/usr/sbin/sendmail';
            $config['charset'] = 'iso-8859-1';
            $config['wordwrap'] = TRUE;
            $config['mailtype'] = 'html';
            $config['upload_path'] = 'uploads/email_attachments';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['encrypt_name']  = TRUE;

            
            $this->upload->initialize($config);
            
           
            
            foreach($_FILES['pht']['name'] as $key => $image)
            {
                $_FILES['phto']['name'] = $_FILES['pht']['name'][$key];
                $_FILES['phto']['type'] = $_FILES['pht']['type'][$key];
                $_FILES['phto']['tmp_name'] = $_FILES['pht']['tmp_name'][$key];
                $_FILES['phto']['error']  = $_FILES['pht']['error'][$key];
                $_FILES['phto']['size']  = $_FILES['pht']['size'][$key];
                
                if(! $this->upload->do_upload('phto'))
                {
                    echo $this->upload->display_errors();
                }
                else
                {
                    $data = $this->upload->data('full_path');
                    $filename = $this->upload->data('file_name');
                    
                }
                
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
                    <td style='border:1px solid #000;width:30%;'>City</td>
                    <td style='border:1px solid #000;width:50%;'>".$city."</td>
                    </tr>
                    <tr>
                    <td style='border:1px solid #000;width:30%;'>Age</td>
                    <td style='border:1px solid #000;width:50%;'>".$age."</td>
                    </tr>
                     <tr>
                    <td style='border:1px solid #000;width:30%;'>Accept incalls</td>
                    <td style='border:1px solid #000;width:50%;'>".$incall."</td>
                    </tr>
                     <tr>
                    <td style='border:1px solid #000;width:30%;'>Describe Yourself</td>
                    <td style='border:1px solid #000;width:50%;'>".$describe."</td>
                    </tr>
                   </table>";
             
             
                 $this->email->initialize($config);
                 $this->email->to('vino2k7@gmail.com');
                 $this->email->from($email);
                 $this->email->subject($subject);
                 $this->email->message($msg);
                 $this->email->attach($data);
                  
    
                 if(! $this->email->send())
                 {
                    show_error($this->email->print_debugger());
    
                 }
                 else 
                 {
                     unlink(FCPATH.'uploads/email_attachments/'.$filename); 
                     $this->session->set_flashdata('msg','Mail sent Successfully');
                     redirect(base_url().'vacancy');
                 }
                }
 
           
		}
	}
	
}



