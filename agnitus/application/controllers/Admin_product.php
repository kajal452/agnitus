<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_product extends CI_Controller 
{
	public function __construct(){
        parent::__construct();
	}
	public function index()
	{
		

		if($this->session->userdata('admin_logged_in') != TRUE){
			
			redirect(base_url('admin/'));exit; 
		}


		$data['onMap'] 			= 1;
		$data['main_content']	= 'admin/product/add_product';
		$this->load->view('admin/template',$data);
	}
	public function product_edit()
	{
		$id = $this->input->get('id');

		if(!isset($id) || !is_numeric($id)){
			redirect(base_url('admin/product_list'));exit; 
		}

		
		if($this->session->userdata('admin_logged_in') != TRUE){
			
			redirect(base_url('admin/'));exit; 

		}

		$whr['product_id'] 	= $id;

		$edit_result 	= getAlldataById('agnitus_products',$whr);
		if(empty($edit_result)){
			
			redirect(base_url('admin/product_list'));exit; 
		}


		$data['edit'] 		= $edit_result[0];	 

		$data['onMap'] = 1;
		$data['main_content']	= 'admin/product/edit_product';
		$this->load->view('admin/template',$data);

	}


	public function add_product()
	{
		

		if($this->session->userdata('admin_logged_in') != TRUE){
			
			redirect(base_url('admin/'));exit; 
		}




		
		$product_name 		=    $this->input->post('product_name');
		$product_price 		=    $this->input->post('product_price'); 
		$product_in_stock 	=    $this->input->post('product_in_stock');
		$product_brand 		=    $this->input->post('product_brand');

	
		$current_datetime = date("Y-m-d H:i:s");
		$insert_array = array(
            'product_name'           	=> $product_name,
            'product_price'     		=> $product_price, 
            'product_in_stock'     		=> $product_in_stock, 
            'product_brand'          	=> $product_brand,
            'product_created_time'   	=> $current_datetime

        );

        $insert_result = insert_data('agnitus_products',$insert_array);
  		if($insert_result != '')
       	{	
			

	       	$this->session->set_flashdata('success', 'Product added Successfully .....!!!');

			redirect(base_url('admin/product_list'));
       	}else{
	       	$this->session->set_flashdata('error', 'Something went wrong .....!!!');

		$data['main_content']	= 'admin/product/add_product';
		$this->load->view('admin/template',$data);
       	}

	}
	public function edit_product()
	{


		
		$id 				=    $this->input->post('id');
		$product_name 		=    $this->input->post('product_name');
		$product_price 		=    $this->input->post('product_price'); 
		$product_in_stock 	=    $this->input->post('product_in_stock');
		$product_brand 		=    $this->input->post('product_brand');

	
		$update_array = array(
            'product_name'           	=> $product_name,
            'product_price'     		=> $product_price, 
            'product_in_stock'     		=> $product_in_stock, 
            'product_brand'          	=> $product_brand

        );



        
		$whr['product_id'] 	=  $id;
		$update_result = updaterow($update_array,'agnitus_products',$whr);
		

	
   		if($update_result == 'true')
   		{
            
			$this->session->set_flashdata('success', 'Product Updated Successfully .....!!!');
			redirect(base_url('admin/product_list'));
    	}else{
	       	$this->session->set_flashdata('notice', $message);
	   		$data['main_content']	= 'admin/product/edit_product';
			redirect(base_url('admin_product/product_edit?id='.$id));
			$this->load->view('admin/template',$data);
    	}

	}


	public function inactive_row()
	{
		$id 			=    $this->input->get('id');
		$whr['product_id'] 		= $id;

		$data_array = array(
            'product_active'           	=> 0
        );
    	$inactive = updaterow($data_array,'agnitus_products',$whr);
    	if($inactive == 'true'){

	       	$this->session->set_flashdata('success', 'Inactive Successfully .....!!!');

			redirect(base_url('admin/product_list'));
    	}else{
	       	$this->session->set_flashdata('notice', 'Inactive Failed .....!!!');
			redirect(base_url('admin/product_list'));
    	}
	}




	public function active_row()
	{
		$id 			=    $this->input->get('id');
		$whr['product_id'] 		= $id;

		$data_array = array(
            'product_active'           	=> 1
        );
    	$inactive = updaterow($data_array,'agnitus_products',$whr);
    	if($inactive == 'true'){

	       	$this->session->set_flashdata('success', 'Active Successfully .....!!!');

			redirect(base_url('admin/product_list'));
    	}else{
	       	$this->session->set_flashdata('notice', 'Active Failed .....!!!');
			redirect(base_url('admin/product_list'));
    	}
	}

	public function check_email_exist($email)
	{
		$whr['admin_user_email'] = $email;
		$getEmail=getAlldataById('tbl_admin_user',$whr);
		if($getEmail == null)
		{
			return 'true';
		}
		else
		{
			return 'false';
		}
	}

	public function request_affilliation()
	{
		$type = $this->input->post('type');
		$request['hospital_id'] 	= 	$this->session->userdata('admin_user_id');
		$request['doctor_id']   	=   $this->input->post('doctor_id');
		$request['requested_by']   	=   $this->session->userdata('admin_user_id');
		$request['request_status']  = '0';
		if($type == '1')
		{
			$request['status']  = $type;
		}
		else
		{
			$request['status']  = $type;
		}
		$whrR['hospital_id'] 		=  	$this->session->userdata('admin_user_id');
		$whrR['doctor_id']   		=   $this->input->post('doctor_id');
		$whrR['requested_by']   	=   $this->session->userdata('admin_user_id');
		$data = getAlldataById('doctor_hospital_connections',$whrR);

		if(empty($data))
		{
			$insert = insert_data('doctor_hospital_connections',$request);
		}
		else
		{
			$update = updaterow($request,'doctor_hospital_connections',$whrR);
			$response['message'] = 'Request Already send Waiting to approve by doctor';
		}
		$this->session->set_flashdata('success','Request send  Sucessfully');
		$response['status'] = '1';
		echo json_encode($response);
		die();
	}

}