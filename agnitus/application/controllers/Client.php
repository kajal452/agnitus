<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Client extends CI_Controller {

	public function __construct(){
        parent::__construct();
      $this->load->library('phpqrcode/qrlib');
	}

	public function index()

	{
		if($this->session->userdata('client_logged_in') == TRUE){
			
			$id         = $this->session->userdata('client_email');
			// print_r($id);
			$clientData = ClientLogin($id);
			// print_r($clientData);exit;
			$newdata = array(
					        'client_email'  			=> $clientData[0]->client_email,
					        'client_id'  				=> $clientData[0]->client_id,
					        'client_name'     			=> $clientData[0]->client_name,
					        'client_wallet_balance'     => $clientData[0]->client_wallet_balance,
					        'client_logged_in' 			=> TRUE
			);
			$this->session->set_userdata($newdata);
	        redirect(base_url('client/product_list'));
		}
		$this->load->view('client/client_login');
	}


	public function client_login()
	{
		if($this->session->userdata('client_logged_in') == TRUE)
		{
			$id         = $this->session->userdata('client_id');
			$clientData = ClientLogin($id);
			$newdata = array(
					        'client_email'  			=> $clientData[0]->client_email,
					        'client_id'  				=> $clientData[0]->client_id,
					        'client_name'     			=> $clientData[0]->client_name,
					        'client_wallet_balance'     => $clientData[0]->client_wallet_balance,
					        'client_logged_in' 			=> TRUE
			);
			$this->session->set_userdata($newdata);
	       redirect(base_url('client/product_list'));
		}
		$userid 		=  $this->input->post('userid');
		$password 		=  $this->input->post('password');
		if($userid != '' && $password != '')
		{
			$password = passwordHash($password);

			$getEmail=ClientLogin($userid);
			$user_password = $getEmail[0]->client_password;
			if($password == $user_password){

					$newdata = array(
					        'client_email'  			=> isset($userid) ? $userid: '',
					        'client_id'  				=> $getEmail[0]->client_id,
					        'client_name'     			=> $getEmail[0]->client_name,
					        'client_wallet_balance'     => $getEmail[0]->client_wallet_balance,
					        'client_logged_in' 			=> TRUE
					);
				if($getEmail[0]->client_active == '1')
				{
					$this->session->set_flashdata('success','Login Sucessfully');
					$this->session->set_userdata($newdata);
	            	// redirect(base_url('admin/dashboard'));
	            						redirect(base_url('client'));

	            }
				else
				{

					$this->session->set_flashdata('notice','You cannot login in Client section');
					redirect(base_url('client'));
				}
			}
			else
			{
				$this->session->set_flashdata('notice','Invalid Credentcial');
				// $data['error'] = "Wrong Password...!!!";
				redirect(base_url('client'));
			}
		}
		else
		{
			$this->session->set_flashdata('error','Invalid Credentcial');
		    redirect(base_url('client'));
		}
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

	public function client_logout() {
		  

	 $user_data = array(
	   'client_email'  			=> '',
	   'client_id'  			=> '',
	   'client_name'     		=> '',
	   'client_wallet_balance'  => '',
	   'client_logged_in' 		=> FALSE
	 );
	 $user_id = $this->session->userdata('client_id');
	 
	 $this->session->set_userdata($user_data);
	 $this->session->unset_userdata($user_data);
	 redirect(base_url('client'), 'refresh'); 

	}


	public function product_list()
	{
		if($this->session->userdata('client_logged_in') != TRUE){
	        redirect(base_url('client'));exit;
		}
		$id         = $this->session->userdata('client_email');
			$clientData = ClientLogin($id);
			$newdata = array(
					        'client_email'  			=> $clientData[0]->client_email,
					        'client_id'  				=> $clientData[0]->client_id,
					        'client_name'     			=> $clientData[0]->client_name,
					        'client_wallet_balance'     => $clientData[0]->client_wallet_balance,
					        'client_logged_in' 			=> TRUE
			);
			$this->session->set_userdata($newdata);
		$this->load->model('product_model');
	
        $result = $this->product_model->get_all_records();
        $data['productList'] = $result;
        
		$this->load->view('client/include/header');
		$this->load->view('client/product_list',$data);
		$this->load->view('client/include/footer');
	}
		
	public function purchase_list()
	{
		if($this->session->userdata('client_logged_in') != TRUE){
	        redirect(base_url('client'));exit;
		}
		$id         = $this->session->userdata('client_email');
			$clientData = ClientLogin($id);
			$newdata = array(
					        'client_email'  			=> $clientData[0]->client_email,
					        'client_id'  				=> $clientData[0]->client_id,
					        'client_name'     			=> $clientData[0]->client_name,
					        'client_wallet_balance'     => $clientData[0]->client_wallet_balance,
					        'client_logged_in' 			=> TRUE
			);
			$this->session->set_userdata($newdata);
		$this->load->model('purchase_model');
		$client_id = $clientData[0]->client_id;
        $result = $this->purchase_model->get_all_records($client_id);
        $data['purchaseList'] = $result;
        
		$this->load->view('client/include/header');
		$this->load->view('client/purchase_list',$data);
		$this->load->view('client/include/footer');
	}
			
	public function client_purchase_product()
	{
		

		if($this->session->userdata('client_logged_in') != TRUE){
			
			redirect(base_url('client/'));exit; 
		}


		$this->load->model('purchase_model');
		
		$products = $this->purchase_model->get_products();

		$data['onMap'] 			= 1;
		$data['products']		= $products;
		$data['main_content']	= 'client/add_purchase';
		$this->load->view('client/template',$data);
	}
	public function add_purchase()
	{
		

		if($this->session->userdata('client_logged_in') != TRUE){
			
			redirect(base_url('client/'));exit; 
		}



		
		$purchase_product_id 			=    $this->input->post('product_id');
		$purchase_product_quantity 		=    $this->input->post('purchase_product_quantity'); 
		$purchase_client_id 			=    $this->session->userdata('client_id');
		
			$email = $this->session->userdata('client_email');
			
			$clientWallet  = ClientLogin($email);

			$this->load->model('purchase_model');
			



			$wallet_balance = $clientWallet[0]->client_wallet_balance;
			$current_datetime = date("Y-m-d H:i:s");

	        if(empty($purchase_product_id)  || empty($purchase_product_quantity)){
			    $this->session->set_flashdata('error', 'Something went wrong .....!!!');

				$data['main_content']	= 'client/add_purchase';
				$this->load->view('client/template',$data);
		    }else{
			$productPrice = $this->purchase_model->get_product_price($purchase_product_id);
			
			$purchase_total_amount 			= $purchase_product_quantity * $productPrice[0]->product_price;   

				if($wallet_balance >= $purchase_total_amount){
				$insert_array = array(
		            'purchase_product_id'           => $purchase_product_id,
		            'purchase_product_quantity'     => $purchase_product_quantity, 
		            'purchase_total_amount'     	=> $purchase_total_amount, 
		            'purchase_client_id'          	=> $purchase_client_id,
		            'purchase_created_time'   		=> $current_datetime

		        );   	
			        $insert_result = insert_data('agnitus_product_purchase',$insert_array);
			  		
			  		if($insert_result != '')
			       	{	
						
			       		$client_new_balance = $wallet_balance - $purchase_total_amount;

						$update_array = array(
				            'client_wallet_balance'           	=> $client_new_balance

				        );
						$whr['client_email'] 	=  $email;
						$update_result = updaterow($update_array,'generic_clients',$whr);

				       	$this->session->set_flashdata('success', 'Purchase Product Successfully .....!!!');

						redirect(base_url('client/purchase_list'));
			       	}else{
				       	$this->session->set_flashdata('error', 'Something went wrong .....!!!');

					$data['main_content']	= 'client/add_purchase';
					$this->load->view('client/template',$data);
			       	}
		        }
		    }


	}

}