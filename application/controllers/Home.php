<?php

defined('BASEPATH') or exit('No direct script access allowed');



class Home extends CI_Controller

{

	public function __construct()

	{

		parent::__construct();

		$this->load->model('Metadetails_model');

		$this->load->model('Prof_model');

		$this->load->model('Category_model');

		$this->load->model('Location_model');

		$this->load->model('Slider_model');

	}





	public function index()

	{


	    $data['row'] = $this->Metadetails_model->get_meta_list(basename($_SERVER['PHP_SELF']));


		$data['get_ten_pro_list']=$this->Prof_model->get_ten_pro_data();


		$data['get_expt_ten_pro_list'] = $this->Prof_model->get_expt_ten_pro_data();


		$this->load->view('includes/header',$data);

		$this->load->view('view_home',$data);

		$this->load->view('includes/footer');

	}
	// public function sendsms(){
	// 	// print_r ($this->input->post()); die;
	// 	if(isset($_POST['submit'])){
	// 		$mobile='91'.$_POST['mobile'];
	// 		$message=$_POST['message'];
			
	// 		$apiKey = urlencode('UgIXMosZdRg-PDMxYyXokYQprfhbWdoV9gmo0uMo4X');
	// 		$numbers = array($mobile);
	// 		$sender = urlencode('TXTLCL');
	// 		$message = rawurlencode($message);
	// 		$numbers = implode(',', $numbers);
			
	// 		 $data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
	// 		//  print_r ($data); die;
	// 		 $ch = curl_init('https://api.textlocal.in/send/');
	// 		curl_setopt($ch, CURLOPT_POST, true);
	// 		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	// 		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	// 		$response = curl_exec($ch);
	// 		curl_close($ch);
	// 		echo $response;
	// 	}
	// }
	public function sendsms(){
		// print_r ($this->input->post()); die;
		if(isset($_POST['submit'])){
			$mobile=$_POST['mphone'];
			$name=$_POST['name'];
			$email=$_POST['email'];
			$phone=$_POST['uphone'];
			
			$apiKey = urlencode('UgIXMosZdRg-PDMxYyXokYQprfhbWdoV9gmo0uMo4X');
			$numbers = array($mobile);
			$sender = urlencode('TXTLCL');
			// $message = rawurlencode('This is your message');
			$message =  "Mumbaibeauties\r\nNAME: $name\r\nEMAIL: $email\r\nPHONE: $phone" ;
			$numbers = implode(',', $numbers);
			 $data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
			//  print_r ($data); die;
			 $ch = curl_init('https://api.textlocal.in/send/');
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$response = curl_exec($ch);
			curl_close($ch);
			echo $response;
			//  print_r ($response); die;
			if($response == True){
echo "hi";
$this->session->set_flashdata('msg','Message sent successfully');
redirect(base_url().'#success');
			}else
			{
echo "bie";
			}

		}	
	}
	public function nf(){

		redirect(base_url());

	}

	

}



	

		

		