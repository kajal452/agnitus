<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
        parent::__construct();

	}
	
	public function index()
	{
		$data['searchBlock'] 	= 1;
		$data['onMap']      =  1;
		$data['main_content'] = 'front/login/login-signup';
		$this->load->view('template',$data);
	}

	public function login()
	{
	   
		$mobile_number 	=  $this->input->post('loginMob');
		$password 		=  $this->input->post('loginpass');
		if($mobile_number != '' && $password != '')
		{
			$password = passwordHash($password);
			$getmobile = UserLogin($mobile_number);
			$user_password 	= $getmobile[0]->admin_user_password;
			$verify_status 	= $getmobile[0]->admin_user_mobile_otp_verification_status;
			$role = $getmobile[0]->admin_user_role; 
			if($password == $user_password)
			{

				if($role == '8')
				{

					if($verify_status == '1')
					{
								$newdata = array(
								        'user_mobile'  	=> $mobile_number,
								        'user_id'     	=> $getmobile[0]->admin_user_id,
								        'user_role'  	=> $getmobile[0]->admin_user_role,
								        'user_name'     	=> $getmobile[0]->admin_user_name,
								        'logged_in' => TRUE
								);
								$this->session->set_userdata($newdata);
					            redirect(base_url());
					}
					else
					{
								$newdata = array(
								        'user_mobile'  	=> $mobile_number,
								        'user_name'     => $getmobile[0]->admin_user_name
								);
								$this->session->set_userdata($newdata);
					            redirect(base_url('otp_verification'));
					}
				}
				elseif($role == '1' || $role == '2' || $role == '3' || $role == '4' || $role == '7' || $role == '9')
				{

					$newdata = array(
					        'admin_email'  			=> $email,
					        'admin_user_id'  		=> $getmobile[0]->admin_user_id,
					        'admin_role'  			=> $role,
					        'admin_name'     		=> $getmobile[0]->admin_user_name,
					        'admin_logged_in' 		=> TRUE
					);
					// echo '<pre>';
					// print($newdata);
					// die();
					$this->session->set_flashdata('success','Login Sucessfully');
					$this->session->set_userdata($newdata);
					redirect(base_url('admin'));
				}
				else
				{
					$this->session->set_flashdata('notice','You cannot login in admin section');
	        		redirect(base_url('login'));

				}

			}
			else
			{
				$this->session->set_flashdata('password_error', 'Wrong Password...!!!');
	        	redirect(base_url('login'));
			}

		}
		else
		{
		    redirect(base_url('login'));
		}
	}

	public function loginEmail()
	{
		$email 	=  $this->input->post('loginEmail');
		$password 		=  $this->input->post('loginEmailpass');
		
		if($email != '' && $password != '')
		{
			$password = passwordHash($password);
			$getmobile = UserLoginEmail($email);

			$user_password 	= $getmobile[0]->admin_user_password;
			$verify_status 	= $getmobile[0]->admin_user_mobile_otp_verification_status;
			$mobile_number 	= $getmobile[0]->admin_user_contact;
			
			$role = $getmobile[0]->admin_user_role; 
			if($password == $user_password)
			{
				
				if($role == '8')
				{

					if($verify_status == '1')
					{
								$newdata = array(
								        'user_mobile'  	=> $mobile_number,
								        'user_id'     	=> $getmobile[0]->admin_user_id,
								        'user_role'  	=> $getmobile[0]->admin_user_role,
								        'user_name'     	=> $getmobile[0]->admin_user_name,
								        'logged_in' => TRUE
								);
								$this->session->set_userdata($newdata);
					            redirect(base_url());
					}
					else
					{
								$newdata = array(
								        'user_mobile'  	=> $mobile_number,
								        'user_name'     => $getmobile[0]->admin_user_name
								);
								$this->session->set_userdata($newdata);
					            redirect(base_url('otp_verification'));
					}
				}
				elseif($role == '1' || $role == '2' || $role == '3' || $role == '4' || $role == '7' || $role == '9')
				{

					$newdata = array(
					        'admin_email'  			=> $email,
					        'admin_user_id'  		=> $getmobile[0]->admin_user_id,
					        'admin_role'  			=> $role,
					        'admin_name'     		=> $getmobile[0]->admin_user_name,
					        'admin_logged_in' 		=> TRUE
					);
				
					$this->session->set_flashdata('success','Login Sucessfully');
					$this->session->set_userdata($newdata);
					redirect(base_url('admin'));

				}elseif($role == '5'){

                 $newdata = array(
					        'admin_email'  			=> $email,
					        'admin_user_id'  		=> $getmobile[0]->admin_user_id,
					        'admin_role'  			=> $role,
					        'admin_name'     		=> $getmobile[0]->admin_user_name,
					        'admin_logged_in' 		=> TRUE
					);
				
					$this->session->set_flashdata('success','Login Sucessfully');
					$this->session->set_userdata($newdata);
					redirect(base_url('admin'));
					
				}elseif($role == '6'){

                 $newdata = array(
					        'admin_email'  			=> $email,
					        'admin_user_id'  		=> $getmobile[0]->admin_user_id,
					        'admin_role'  			=> $role,
					        'admin_name'     		=> $getmobile[0]->admin_user_name,
					        'admin_logged_in' 		=> TRUE
					);
				
					$this->session->set_flashdata('success','Login Sucessfully');
					$this->session->set_userdata($newdata);
					redirect(base_url('admin'));
					
				}else{
					$this->session->set_flashdata('notice','You cannot login in admin section');
	        		redirect(base_url('login'));

				}

			}
			else
			{
				$this->session->set_flashdata('password_error', 'Wrong Password...!!!');
	        	redirect(base_url('login'));
			}

		}
		else
		{
		    redirect(base_url('login'));
		}
	}

	public function login_checkout()
	{
		$mobile_number 	=  $this->input->post('loginMob');
		$password 		=  $this->input->post('loginpass');

		if($mobile_number != '' && $password != ''){
			$password = passwordHash($password);

			$getmobile 		= UserLogin($mobile_number);
			$user_password 	= $getmobile[0]->admin_user_password;
			$verify_status 	= $getmobile[0]->admin_user_mobile_otp_verification_status;
			if($password == $user_password){
				// if($verify_status == '1'){
					$newdata = array(
					        'user_mobile'  	=> $mobile_number,
					        'user_id'     	=> $getmobile[0]->admin_user_id,
					        'user_role'  	=> $getmobile[0]->admin_user_role,
					        'user_name'     	=> $getmobile[0]->admin_user_name,
					        'logged_in' => TRUE
					);
					$this->session->set_userdata($newdata);
		            redirect(base_url('checkout'));
				// }
				// else
				// {
				// 	$newdata = array(
				// 	        'user_mobile'  	=> $mobile_number,
				// 	        'user_name'     => $getmobile[0]->admin_user_name
				// 	);
				// 	$this->session->set_userdata($newdata);
		  //           redirect(base_url('otp_verification'));
				// }
				
			}else{
				
	       		$this->session->set_flashdata('password_error', 'Wrong Password...!!!');
	        	redirect(base_url('checkout'));
			}
		}else{
			
	        redirect(base_url('login'));
		}

	}
	public function logout() 
	{
		  
		  $user_data = array(
					'user_id' 		=> '',
			        'user_mobile'  		=> '',
			        'user_name'     	=> '',
			        'logged_in' 		=> FALSE
				 );
		$this->session->set_userdata($user_data);
		$this->session->unset_userdata($user_data);
		redirect(base_url(), 'refresh'); 
	}

	public function check_number_exist()
	{

		$mobile_number 	=  $this->input->post('loginMob');

		$getmobile=user_number_exist($mobile_number);

		if($getmobile == null)
		{
			echo 'false';
		}
		else
		{
			echo 'true';
		}
	}

	public function check_number_exist_phone()
	{

		$mobile_number 	=  $this->input->post('phone');

		$getmobile=user_number_exist($mobile_number);
		if($getmobile == null)
		{
			echo 'true';
		}
		else
		{
			echo 'false';
		}
	}



	public function check_email_exist()
	{

		$loginEmail 	=  $this->input->post('loginEmail');
		$getmobile= user_email_exist($loginEmail);
	
		if($getmobile == null)
		{
			echo 'false';
		}
		else
		{
			echo 'true';
		}
	}



	public function check_email_exist_email()
	{
		$loginEmail 	=  $this->input->post('email');
		$getmobile= user_email_exist($loginEmail);

		if($getmobile == null)
		{
			echo 'true';
		}
		else
		{
			echo 'false';
		}

	}
	
	public function forgotPasswordOtp()
	{
	    $user_email_mob =  $this->input->post('user_email_mob');
	    if (is_numeric ($user_email_mob)){
	       $wher_mob['admin_user_contact'] =  $user_email_mob;
	       $customer_data  =  getAlldataById('tbl_admin_user',$wher_mob);
	       if(!empty($customer_data)){
	           $customer_id=$customer_data[0]->admin_user_id;
	           $customer_id = $this->session->set_userdata('customer_id', $customer_id );
               $this->session->userdata('customer_id', $customer_id);
      
	            $rnd_no = rand(10000,99999);
	            //send otp
	            $request = ""; 
			    $param['method'] = "sendMessage";
			    $param['format'] = "JSON";
			    $param['send_to'] = $user_email_mob;
			    $param['msg'] = "Your OTP is : $rnd_no Use the One Time Password to verify your identity on Number Ghumao";
			    $param['userid'] = "2000186743";
			    $param['password'] = "oe1fvVnHj";
			    $param['v'] = "1.1";
			    $param['msg_type'] = "TEXT"; 
			    $param['auth_scheme'] = "PLAIN";
			    $param['auth_scheme'] = "PLAIN";
			    //Have to URL encode the values 
			    foreach ($param as $key => $val) {
			        $request .= $key . "=" . urlencode($val);  
			        $request .= "&";
			    }

			    $request = substr($request, 0, strlen($request) - 1); 
			    $url = "http://enterprise.smsgupshup.com/GatewayAPI/rest?" . $request;
			    $ch = curl_init($url);

			    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			    $curl_scraped_page = curl_exec($ch);
			    $result = json_decode($curl_scraped_page, true);
			    curl_close($ch);
			    //end otp
			   $wher_mob['admin_user_contact'] =  $user_email_mob;
			   $customer_otp['admin_user_mobile_otp'] = $rnd_no ;
			   $customer_otp['admin_user_mobile_otp_verification_status'] = 0 ;
			   $customer_otp['admin_user_active'] = 0 ;
			   $customer_otp['admin_user_mobile_otp_inserted_time'] = date("Y-m-d H:i:s");
			   $update_otp = updaterow($customer_otp,'tbl_admin_user',$wher_mob);
			    $response['status']      = 1;
			    $response['customer_id'] = $customer_id;
			    $response['message'] = "OTP is send on your mobile";
			    
	       }else{
	          
	           $response['status']      = 0;
			   $response['message'] = "Your data is not exit into database";
	       }
	    }else{
	      $wher_email['admin_user_email'] =  $user_email_mob;  
	      $customer_data  =  getAlldataById('tbl_admin_user',$wher_email);
	      if(!empty($customer_data)){
	          $customer_id = $customer_data[0]->admin_user_id;
	          $full_name = $customer_data[0]->admin_user_name;
	          $customer_id = $this->session->set_userdata('customer_id', $customer_id );
               $this->session->userdata('customer_id', $customer_id);
	           $rnd_no = rand(10000,99999);
	           //start otp
	            $this->send_email($user_email_mob,$full_name,$rnd_no);
		      //end otp
		       $wher_mob['admin_user_email'] =  $user_email_mob;
			   $customer_otp['admin_user_mobile_otp'] = $rnd_no ;
			   $customer_otp['admin_user_mobile_otp_verification_status'] = 0 ;
			   $customer_otp['admin_user_active'] = 0 ;
			   $customer_otp['admin_user_mobile_otp_inserted_time'] = date("Y-m-d H:i:s");
			   $update_otp = updaterow($customer_otp,'tbl_admin_user',$wher_mob);
		       	$response['status']      = 1;
		       	$response['customer_id'] = $customer_id;
			   $response['message'] = "OTP is send on your email";
		       
	       }else{
	           $response['status']      = 0;
			   $response['message'] = "Your data is not exit into database";
	       }
	       
	    }
	     echo json_encode($response);
	}
	
	public function send_email($email,$name,$rand){
       
        $mail_data['email']       = $email;
        $data['name']             = 'Dear'.' '.$name;
        $data['heading']          = 'Greetings from 2TIC';
        $data['top_content']      = '';
        $data['content']          = "Thank you very much for your interest in 2TIC.Your OTP is : $rand Use the One Time Password to verify your identity on 2TIC";
        $data['footer_content']   = '';
        $mail_data['subject']     = "2TIC Forgot Password OTP Verification";
        $mail_data['description'] = "";                     
        $mail_data['template']    = $this->load->view('email_template',$data, TRUE);
        OtpMail_function($mail_data);

      }
      
	
		public function otpVerifyPage()
	{
		$data['main_content'] = 'front/login/forgot-otp-verify';
		$this->load->view('template',$data);
	}
	
	public function VerifyOtpForgotPassword(){
	   
		$otp 	= $this->input->post('otp1').$this->input->post('otp2').$this->input->post('otp3').$this->input->post('otp4').$this->input->post('otp5');
		$customer_id = $this->session->userdata('customer_id');
		$date = date("Y-m-d H:i:s");
		$time = strtotime($date);
		$time = $time - (5 * 60);
		$date = date("Y-m-d H:i:s", $time);
	if($otp != '')
		{
			$whr['admin_user_id'] 						= $customer_id;
			$whr['admin_user_mobile_otp_inserted_time >'] 	= $date;
			$getmobile 			= getAlldataById('tbl_admin_user',$whr);
// 			echo $this->db->last_query();
          if(!empty($getmobile)){
            
			$user_mobile_otp 	= $getmobile[0]->admin_user_mobile_otp; 
		 
			if($otp == $user_mobile_otp)
			{ 
			   
						$data_array = array(
				            'admin_user_mobile_otp_verification_status'   => 1,
				            'admin_user_active'   => 1
				        );		
				        
						$whr_id['admin_user_id'] = $customer_id;
				        $user_insert_result = updaterow($data_array,'tbl_admin_user',$whr_id);
						$newdata = array(
						        	'logged_in'  	=> TRUE,
							        'user_id'     	=> $customer_id
						); 
					 $response['status'] = '1';
					 $response['message'] = 'OTP is verified';
					
			}else{
			    $response['status'] = '0';
				$response['message'] = 'O.T.P not match .....!!!';
			}
			
          }else{
			
				$response['status'] = '0';
				$response['message'] = 'O.T.P expired .....!!!';
			}
		}else
		{
		        $response['status'] = '2';
				$response['message'] = 'Please enter OTP';
		}
	
		echo json_encode($response);
        die();
	}
	
	public function ForgotPasswordPage(){
	    
	    $data['main_content'] = 'front/login/forgot-password-form';
		$this->load->view('template',$data);
	    
	    
	}
	
	public function forgotPassword(){
	    
	  $id = $this->session->userdata('customer_id');
      $newpassword           =  $this->input->post('newpassword');
      $confirmpassword       =  $this->input->post('confirmpassword');
      $new_password          =  passwordHash($newpassword);
      $whr_admin_id['admin_user_id']  =        $id;
      $customer_data        =  getAlldataById('tbl_admin_user',$whr_admin_id);
      foreach($customer_data as $customerall_data){
      $admin_user_password  = $customerall_data->admin_user_password;
      }
      if ($newpassword == $confirmpassword)
		{
		 $whr_admin_id['admin_user_id']  =        $id;
		 $where_newdata['admin_user_password']  = $new_password; 
     	 $update_usr_password  = updaterow($where_newdata,'tbl_admin_user',$whr_admin_id);
     	if($update_usr_password == 1)
     	{
					 $response['status'] = '1';
					 $response['message'] = 'your password is updated';
		}
		  else
			{
					$response['status'] = '0';
			     	 $response['message'] = 'password not updated';
			}
			
			
     }
     else
     {
     		$response['status'] = '2';
			 $response['message'] = 'new and reenter password does not match';
     }
     echo json_encode($response);
     die();
	}
	
	public function forgot_resend_otp()
	{
				$rand = rand(10000,99999);
				$admin_id = $this->session->userdata('customer_id');
		        $current_datetime = date("Y-m-d H:i:s");
				$data_array = array(
		            'admin_user_mobile_otp'    				=> $rand,
		            'admin_user_mobile_otp_inserted_time'    	=> $current_datetime
		        );
				$whr['admin_user_id'] = $admin_id;
		        $user_insert_result = updaterow($data_array,'tbl_admin_user',$whr);
		   if(!empty($user_insert_result)){
		      $whr_id['admin_user_id'] = $admin_id;
		      $get_customer_all_details = getAlldataById('tbl_admin_user',$whr_id);
		      $mobile_number = $get_customer_all_details[0]->admin_user_contact;
				///// SEND O.T.P //////
				$request = "";  
			    $param['method'] = "sendMessage";
			    $param['format'] = "JSON";
			    $param['send_to'] = $mobile_number;
			    $param['msg'] = "Your OTP is : $rand Use the One Time Password to verify your identity on Number Ghumao";
			    $param['userid'] = "2000186743";
			    $param['password'] = "oe1fvVnHj";
			    $param['v'] = "1.1";
			    $param['msg_type'] = "TEXT"; 
			    $param['auth_scheme'] = "PLAIN";
			    $param['auth_scheme'] = "PLAIN";
			    //Have to URL encode the values 
			    foreach ($param as $key => $val) {
			        $request .= $key . "=" . urlencode($val);  
			        $request .= "&";
			    }

			    $request = substr($request, 0, strlen($request) - 1); 
			    $url = "http://enterprise.smsgupshup.com/GatewayAPI/rest?" . $request;
			    $ch = curl_init($url);

			    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			    $curl_scraped_page = curl_exec($ch);
			    $result = json_decode($curl_scraped_page, true);
			    curl_close($ch);
                $response['status'] = '1';
				$response['message'] = 'OTP send Successfully';
		        }else{
		         $response['status'] = '0';
				$response['message'] = 'OTP is not sent';   
		        }
		
	}

	
	
}