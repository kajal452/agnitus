<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {

	public function __construct(){
        parent::__construct();
      $this->load->library('phpqrcode/qrlib');
	}

	public function index()

	{
		if($this->session->userdata('admin_logged_in') == TRUE){
			
	       redirect(base_url('admin/product_list'));
		}
		$this->load->view('admin/login');
	}


	public function login()
	{
		if($this->session->userdata('admin_logged_in') == TRUE)
		{
	       redirect(base_url('admin/product_list'));
		}
		$userid 		=  $this->input->post('userid');
		$password 		=  $this->input->post('password');
		if($userid != '' && $password != '')
		{

			$password = passwordHash($password);

			$getEmail=AdminLogin($userid);
			$user_password = $getEmail[0]->admin_password;

			if($password == $user_password){
					$newdata = array(
					        'admin_email'  			=> isset($userid) ? $userid: '',
					        'admin_id'  		=> $getEmail[0]->admin_id,
					        'admin_name'     		=> $getEmail[0]->admin_name,
					        'admin_logged_in' 		=> TRUE
					);
				
				if($getEmail[0]->admin_active == '1')
				{
					$this->session->set_flashdata('success','Login Sucessfully');
					$this->session->set_userdata($newdata);
	            	// redirect(base_url('admin/dashboard'));
	            						redirect(base_url('admin'));

	            }
				else
				{

					$this->session->set_flashdata('notice','You cannot login in admin section');
					redirect(base_url('admin'));
				}
			}
			else
			{
				$this->session->set_flashdata('notice','Invalid Credentcial');
				// $data['error'] = "Wrong Password...!!!";
				redirect(base_url('admin'));
			}
		}
		else
		{
			$this->session->set_flashdata('error','Invalid Credentcial');
		    redirect(base_url('admin'));
		}
	}

	public function dashboard()
	{
		
	 if($this->session->userdata('admin_logged_in') != TRUE){

	    redirect(base_url('admin'));exit;
	 }
     $role_id = $this->session->userdata('admin_role');
     $user_id = $this->session->userdata('admin_id');
     $whr['admin_id'] 	= $user_id;
	 $user_result 	= getAlldataById('generic_admin',$whr);
     
	 $this->load->view('admin/include/header');
	 $this->load->view('admin/dashboard',$data);
	 $this->load->view('admin/include/footer');
	 
	}



	public function check_email_exist()
	{

		$userid 	=  $this->input->post('userid');
		$whr['admin_email'] = $userid;

		$getEmail=getAlldataById('generic_admin',$whr);
		
		if($getEmail == null)
		{
			echo 'false';
		}
		else
		{
			echo 'true';
		}
	}

   public function check_contact_exist_validation()
	{
		$contact 	=  $this->input->post('contact');
		$whr['admin_user_contact'] = $contact;
		$contactExist=getAlldataById('tbl_admin_user',$whr);
		if($contactExist == null)
		{
			echo 'true';
		}
		else
		{
			echo 'false';
		}
	}

	public function logout() {
		  

	 $user_data = array(
	   'admin_email'  			=> '',
	   'admin_id'  				=> '',
	   'admin_name'     		=> '',
	   'admin_logged_in' 		=> FALSE
	 );
	 $user_id = $this->session->userdata('admin_id');
	 
	 $this->session->set_userdata($user_data);
	 $this->session->unset_userdata($user_data);
	 redirect(base_url('admin'), 'refresh'); 

	}


	public function product_list()
	{
		if($this->session->userdata('admin_logged_in') != TRUE){
	        redirect(base_url('admin'));exit;
		}

		$this->load->model('product_model');
	
        $result = $this->product_model->get_all_records();
        $data['productList'] = $result;
        
		$this->load->view('admin/include/header');
		$this->load->view('admin/product_list',$data);
		$this->load->view('admin/include/footer');
	}
		
	public function client_list()
	{
		if($this->session->userdata('admin_logged_in') != TRUE){
	        redirect(base_url('admin'));exit;
		}

		$this->load->model('client_model');
	
        $result = $this->client_model->get_all_records();
        $data['clientList'] = $result;
        
		$this->load->view('admin/include/header');
		$this->load->view('admin/client_list',$data);
		$this->load->view('admin/include/footer');
	}
			


}