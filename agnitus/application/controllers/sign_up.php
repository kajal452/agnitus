<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Sign_up extends CI_Controller 
{
	public function __construct(){
        parent::__construct();
	}
	public function index()
	{
		


		if($this->session->userdata('admin_logged_in') == TRUE){
			
			redirect(base_url('admin/'));exit; 
		}

		if($this->session->userdata('client_logged_in') == TRUE){
			
			redirect(base_url('client/'));exit; 
		}

		$this->load->model('client_model');
		$country = $this->client_model->get_country();
		$data['country']		= $country;
		$this->load->view('signin/sign_up',$data);
	}

	public function add_client()
	{
		

		if($this->session->userdata('admin_logged_in') == TRUE){
			
			redirect(base_url('admin/'));exit; 
		}

		if($this->session->userdata('client_logged_in') == TRUE){
			
			redirect(base_url('client/'));exit; 
		}




		
		$name 		=    $this->input->post('name');
		$email 		=    $this->input->post('email'); 
		$password 	=    $this->input->post('password');
		$phone 		=    $this->input->post('phone');
		$country_id =    $this->input->post('country_id');

	
		$password = passwordHash($password);
	
		$current_datetime = date("Y-m-d H:i:s");
		$insert_array = array(
            'client_name'           	=> $name,
            'client_email'     			=> $email, 
            'client_password'     		=> $password, 
            'client_phone'          	=> $phone, 
            'client_country_id'         => $country_id,
            'client_created_time'   	=> $current_datetime

        );

        $insert_result = insert_data('generic_clients',$insert_array);
  		if($insert_result != '')
       	{	
			

	       	$this->session->set_flashdata('success', 'Client added Successfully .....!!!');

			redirect(base_url('client'));
       	}else{
	       	$this->session->set_flashdata('error', 'Something went wrong .....!!!');

			redirect(base_url('client'));
       	}

	}

}