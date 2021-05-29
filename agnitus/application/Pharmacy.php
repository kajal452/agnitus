<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pharmacy extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('pharmacy_model');
	}
	
	public function index()
	{
		
		if($this->session->userdata('latitude') != '')
		{	
			$lat = $this->session->userdata('latitude');
		}
		if($this->session->userdata('longitude') != '')
		{	
			$lng = $this->session->userdata('longitude');
		}
		if(isset($lat)  && isset($lng))
		{
			$pharmacy_doctor	= $this->pharmacy_model->get_all_active_filter_pharmacy($lat,$lng);
		}
		else
		{
	        $pharmacy_doctor 	= $this->pharmacy_model->get_all_active_pharmacy();
		}
		$data['total'] = count($this->pharmacy_model->get_all_active_pharmacy());
		
        $data['pharmacyList'] 	= $pharmacy_doctor;
		$data['main_content'] = 'front/pharmacy/pharmacy-list';
		$this->load->view('template',$data);
	}




	public function demo()
	{
		   $this->load->model('pharmacy_model');

		
		$data['total'] = count($this->pharmacy_model->get_all_active_pharmacy());
		$data['main_content'] = 'front/pharmacy/pharmacy-list';
		$this->load->view('template',$data);
	}


	public function product_category()
	{
		$data['main_content'] = 'front/pharmacy/products-category';
		$this->load->view('template',$data);
	}
	
	public function products()
	{
		$data['main_content'] = 'front/pharmacy/products';
		$this->load->view('template',$data);
	}
	public function pharmacy_profile($id='')
	{


		if(!isset($id) || !is_numeric($id))
		{

			redirect(base_url('pharmacy'));
		}
		$whr['admin_user_id'] 	= $id;
		$whr['admin_user_role'] = 3;
		$result = getAlldataById('tbl_admin_user',$whr);
		if(empty($result))
		{
			redirect(base_url('pharmacy'));exit; 
		}
		//////////// IMAGE NAME //////////
		$img_whr['image_type'] 		= 'pharmacy';
		$img_whr['image_owner_id'] 	= $id;
		$img_result 				= getAlldataById('tbl_images',$img_whr);
		// echo $this->db->last_query();
		// die();
		if(!empty($img_result))
		{
			$img_name 				= $img_result[0]->image_name;
		}
		if(!isset($img_name))
		{
			$img_name = 'default.jpg';
		}
		$data['img_name'] 	= $img_name;
		//////////// IMAGE NAME //////////
		$whrReview['org_id'] = $id;
		$data['reviews'] = $this->get_reviews($id);
		$data['doctorDetail'] = $result[0];
		$data['main_content'] = 'front/pharmacy/pharmacy-profile';
		$this->load->view('template',$data);
	}
	public function product_list($id='')
	{	
		if(!isset($id) || !is_numeric($id) )
		{
			redirect(base_url('pharmacy'));
		}
		$whr['admin_user_id'] 	= $id;
		$whr['admin_user_role'] = 3;
		$result = getAlldataById('tbl_admin_user',$whr);
		if(empty($result))
		{
			redirect(base_url('pharmacy'));exit; 
		}


		$whrproduct['product_created_by'] = $id;
		$products = getAlldataById('tbl_product',$whrproduct);
		$whrproduct_cat['status'] =  '1';
		$products_cat = getAlldataById('tbl_product_type',$whrproduct_cat);
		$data['category'] = $products_cat;
		$data['products'] = $products;
		$data['main_content']    = 'front/pharmacy/products';
		$this->load->view('template',$data);
	}
	public function products_details($id='')
	{
		
		if(!isset($id) || !is_numeric($id) )
		{
			redirect(base_url('pharmacy'));
		}
		$whrproduct['product_id'] = $id;
	 	$product_details = getAlldataById('tbl_product',$whrproduct);
	 	if(empty($product_details)  )
	 	{
	 		redirect(base_url('pharmacy'));
		}
		$data['product_details'] = $product_details[0];
		$data['main_content'] = 'front/pharmacy/product-details';
		$this->load->view('template',$data);
	}
	public function shopping_cart()
	{
		$data['cart_product'] = $this->cart->contents();
		$data['main_content'] = 'front/pharmacy/cart';
		$this->load->view('template',$data);
	}
	public function checkout()
	{
		if(isset($_SESSION['user_id']) && $_SESSION['user_id'] != '')
		{
			$whruser['user_id'] = $_SESSION['user_id'];
			$address_table = getAlldataById('tbl_user_address',$whruser);

		}
		else
		{
			 $address_table = '';
		}
		$cart = $this->cart->contents();
		if(empty($cart))
		{
			redirect(base_url('shopping_cart'));
		}
		$data['address_table'] = $address_table;
		$data['deliever_charge'] = '0';
		$data['searchBlock'] 	 = '1';
		$data['cart_product'] = $this->cart->contents();
		$data['main_content'] = 'front/pharmacy/checkout';
		$this->load->view('template',$data);
	}

	public function register_user(){
	}
	public function add_address(){

			$update_location['address'] = $this->input->post('address');
			$update_location['user_latitude'] = $this->input->post('lat');
			$update_location['user_longitude'] = $this->input->post('lng');
			$update_location['user_id'] = $_SESSION['user_id'];
			$update_location['location'] = $this->input->post('location');
			$update_location['landmark'] = $this->input->post('landmark');
			$update_location['type'] = $this->input->post('type');
			$update_location['name'] = $this->input->post('dname');
			$update_location['mobile'] = $this->input->post('dmobile');
			$update_location['pincode'] = $this->input->post('pincode');
			$update_location['status'] = '1';
			$data_insert = insert_data('tbl_user_address',$update_location);
			redirect(base_url('checkout'));exit; 
	}



	function upload_add($name) 
	{ 
		
			$path = './upload/pharmacy/prescription_image'; 
			$this->load->helper('form'); 
		    $config['upload_path'] = $path; 
		    $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|';
		    $config['max_size'] = '30000'; 
		    $config['max_width'] = '102400'; $config['max_height'] = '76800'; 
		    $this->load->library('upload', $config);          
		    $this->upload->initialize($config); 
			if (!$this->upload->do_upload($name)) 
		    { 
		         $data = array('msg' => $this->upload->display_errors()); 
		         
		    }
		    else 
		    { 
		        $data = array('msg' => "success"); 
		        $databasea['upload_data'] = $this->upload->data(); 
		        $this->load->library('image_lib'); 
		        return $databasea['upload_data']['file_name']; 
		    } 
		    return ''; 
	}

	public function upload_prescription()
	{



		$name = $this->upload_add('prescription');


		$response['status'] = '1';
		$response['name'] = $name;
		echo json_encode($response);
		die();
	}
	public function get_reviews($id){


		$sql = "SELECT * FROM review_table WHERE Status = 1 AND org_id = ".$id."  ORDER BY created_time DESC ";
		$query = $this->db->query($sql); 
		return $query->result();



	}


public function load_prodoct(){
		 $start = $_POST['start'];
		 $end = $_POST['limit'];
		 $pharmacy_id = $_POST['pharmacy_id'];
		 $product_type = $_POST['product_type'];
		 $product_start_price = $_POST['product_start_price'];
		 $product_end_price = $_POST['product_end_price'];
		$this->load->model('Pharmacy_model');
		$data = $this->Pharmacy_model->pharmacy_filler_data($start,$end,$pharmacy_id,$product_type,$product_start_price,$product_end_price);
		// echo  $this->db->last_query();

		$load_data = '';
		if(isset($data) && !empty($data)){
		$load_data .= '<div class="row" id="computers">';

			foreach ($data as $product_data) {
		
				$load_data .= '<div class="col-12 system col-sm-6 col-md-4 filter '.get_product_type_name($product_data->product_type,'2').'" data-price="'.$product_data->selling_price.'"><div class="products_shop"><a href="'.base_url().'products_details/'.$product_data->product_id.'"><img src="'.base_url().'upload/product_image/'.$product_data->product_image.'" class="products_img"><h3 class="products_prodtitle">'.$product_data->product_name.'</h3></a>';

				$load_data .= '<p class="products_prodprice">Rs.'.$product_data->selling_price.'';


				if($product_data->product_stock <= 10 && $product_data->product_stock != '0' )
				{
					$load_data .='<br><i style ="color:red;">Only '.$product_data->product_stock.' product left</i></p>';
				}


				$load_data.='<div class="row"><div class="col-12 col-sm-6"><p class="products_unit"></p></div><div class="col-12 col-sm-6"><form id="form_'.$product_data->product_id.'" method="POST"><input type="hidden" name="product_id" id="product_id_'.$product_data->product_id.'" value="'.$product_data->product_id.'"><input type="hidden" name="product_qty" id="product_qty_'.$product_data->product_id.'" value="1"><input type="hidden" name="product_name" id="product_name_'.$product_data->product_id.'" value="'.$product_data->product_name.'"><input type="hidden" name="phamacy_id" id="pharmacy_id_'.$pharmacy_id.'" value="'.$pharmacy_id.'"><input type="hidden" name="product_price" id="price_'.$product_data->product_id.'" value="'.$product_data->selling_price.'">';
			if($product_data->product_stock <= '0')
			{
				$load_data .='<p style="color:red;">Out of stock</p>';
			}
			else
			{
				$load_data .='<button type="button" id="hidecartbtn" value="'.$product_data->product_id.'" class="addproduct_btn">Add </button>';
			}
				$load_data .='</form></div></div></div></div>';

			}
		$load_data .= '</div>';
		}
		else
		{

			$load_data .= '';



		}
		echo $load_data;
	die();
	}


	public function load_pharmacy(){


		$start = $this->input->post('start');
		$limit = $this->input->post('limit');

		if($this->session->userdata('latitude') != '')
		{	
			$lat = $this->session->userdata('latitude');
		}
		if($this->session->userdata('longitude') != '')
		{	
			$lng = $this->session->userdata('longitude');
		}
		if(isset($lat)  && isset($lng))
		{
			$pharmacyList	= $this->pharmacy_model->get_all_active_filter_pharmacy_limit($lat,$lng,$start,$limit);
		}
		else
		{
	        $pharmacyList 	= $this->pharmacy_model->get_all_active_pharmacy_limit($start,$limit);
		}

		
		
		if(isset($pharmacyList))
			{   
			    foreach($pharmacyList as $doctors) 
			    {

			    	$data['user_sesssion_id'] = $this->session->userdata('user_id');
			    	$data['doctors'] = $doctors;
				   	$this->load->view('front/pharmacy/load_pharmacy',$data);





			   }


			}



	}


}