<?php
///user registration
$app->post('/userRegistration', function()use ($app) {
    $db = new DbHandler();
    $session         = $db->getSession();
    $r               = $app->request->post();
    $user_name       = $r['user_name'];
    $user_email      = $r['user_email'];
    $user_mobileno   = $r['user_mobileno'];
    $user_password   = $r['user_password'];
    $user_password   = md5($user_password);
    $user_address    = $r['user_address'];
    $user_latitude   = $r['user_latitude'];
    $user_longitude  = $r['user_longitude'];
    $user_role       = $r['user_role'];
    $query = "SELECT admin_user_mobile FROM tbl_admin_user WHERE admin_user_mobile = '$user_mobileno'";
    $mobileExist  = $db->getOneRecord($query);
    if($mobileExist == 'null' || $mobileExist == '' || $mobileExist == 'false'){
            $tabble_name = "tbl_admin_user";
            $insert_array['admin_user_name']                   = $user_name;
            $insert_array['admin_user_email']                  = $user_email;
            $insert_array['admin_user_mobile']                 = $user_mobileno;
            $insert_array['admin_user_password']               = $user_password;
            $insert_array['admin_user_address']                = $user_address;
            $insert_array['admin_user_latitude']               = $user_latitude;
            $insert_array['admin_user_longitude']              = $user_longitude;
            $insert_array['admin_user_role']                   = $user_role;
           
            date_default_timezone_set('Asia/Kolkata');
            $insert_array['admin_user_created_time']           = date("Y-m-d" . " " . "h:i:s");
            $column_names = array(
                    'admin_user_name'             ,
                    'admin_user_email'            ,
                    'admin_user_mobile'           ,
                    'admin_user_password'         ,
                    'admin_user_created_time'     ,
                    'admin_user_address'          ,
                    'admin_user_latitude'        ,
                    'admin_user_longitude'       ,
                    'admin_user_role'            ,
                    );
                $result = $db->insertIntoTable($insert_array, $column_names, $tabble_name);
                if($result != null){
                    $response["status"]     = 1;
                    $response["user_id"]    = $result;
                    $response["message"]    = "Register Successfully";
                    
                }else{
                    $response["status"]     = 2;
                    $response["message"]    = "Registration Failed";
                }
        }else{
          
            $response["status"]     = 0;
            $response["message"]    = "Mobile Already Exist....!!!!";
        }
        echoResponse(200, $response);
});

//send otp
$app->post('/sendOtp', function()use ($app) {
    $db = new DbHandler();
    $session           = $db->getSession();
    $r                 = $app->request->post();
    $user_mobileno     = $r['user_mobileno'];
    $mobile_otp = rand(10000,99999);
    $query = "UPDATE tbl_admin_user set admin_user_mobile_otp = '$mobile_otp' where admin_user_mobile = '$user_mobileno' ";
    $result = $db->updateData($query);
                $request = ""; //initialise the request variable 
                $param['method'] = "sendMessage";
                $param['format'] = "JSON";
                $param['send_to'] = $user_mobileno;
                $param['msg'] = "Your OTP is : $mobile_otp Use the One Time Password to verify your identity on Number Ghumao";
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

            if($result != null){
                $response["status"]     = 1;
                $response["message"]    = "OTP send Successfully";
            }else{          
                $response["status"]     = 0;
                $response["message"]    = "Something Wrong";
            }
    echoResponse(200, $response);
});

//match otp
$app->post('/otpMatch', function()use ($app) {
    $db = new DbHandler();
    $session        = $db->getSession();
    $r              = $app->request->post();
    $user_mobileno  = $r['user_mobileno'];
    $user_mobile_otp= $r['user_mobile_otp'];
    $userLogin  = $db->getOneRecord("SELECT admin_user_mobile_otp as otp FROM tbl_admin_user WHERE admin_user_mobile = '$user_mobileno'");
    if($userLogin != ''){
        if($userLogin['otp'] == $user_mobile_otp){
            $query = "UPDATE tbl_admin_user set admin_user_mobile_otp_verification_status = '1' where admin_user_mobile = '$user_mobileno' ";
            $result22 = $db->updateData($query);
            $response["status"]     = 1;
            $response["message"]    = "Mobile Verification Successfully";
        }else{
            $response["status"]     = 0;
            $response["message"]    = "Wrong Otp";
        }
    }else{
            $response["status"]     = 2;
            $response["message"]    = "Mobile Not Exist.";
    }
    echoResponse(200, $response);
});

$app->post('/userLogin', function()use ($app) {
    $db = new DbHandler();
    $session         = $db->getSession();
    $r               = $app->request->post();
    $user_mobileno   = $r['user_mobileno'];
    $user_email      = $r['user_email'];
    $user_password   = $r['user_password'];
    $user_role       = $r['user_role'];
    if($user_mobileno != ''){
    $userLogin  = $db->getOneRecord("SELECT * FROM tbl_admin_user WHERE admin_user_mobile = '$user_mobileno'");
   }elseif($user_email != '') {
     $userLogin  = $db->getOneRecord("SELECT * FROM tbl_admin_user WHERE admin_user_email = '$user_email'");
   }else{
    $userLogin  = $db->getOneRecord("SELECT * FROM tbl_admin_user WHERE admin_user_email = '$user_email' and admin_user_email = '$user_email'");
   }
    if($userLogin != ''){
        if($userLogin['admin_user_password']==md5($user_password) && $userLogin['admin_user_role'] == $user_role){
            if($userLogin['admin_user_mobile_otp_verification_status'] == '1'){
                unset($userLogin['admin_user_password']);
                $response["status"]     = 1;
                $response["message"]    = "Login Successfully";
                $response["user_result"]    = $userLogin;
                
            }else{
                $response["status"]     = 2;
                $response["message"]    = "Mobile Not Verified. Please use login with OTP";
            }
        }else{
            $response["status"]     = 0;
            $response["message"]    = "Password not matched";
        }
    }else{
        $response["status"]     = 3;
        $response["message"]    = "Mobile number not found";
    }
    echoResponse(200, $response);
});

//forgot password
$app->post('/forgotPassword', function()use ($app) {
    $db = new DbHandler();
    $session        = $db->getSession();
    $r              = $app->request->post();
    $user_mobileno  = $r['user_mobileno'];
    $user_email     = $r['user_email'];
    $newPassword    = md5($r['newPassword']);
    $re_enterPassword = md5($r['re_enterPassword']);
    $re_enterPassword = $re_enterPassword;
    if($newPassword == $re_enterPassword)
    {
      if($user_mobileno != ''){
      $userLogin  = $db->getOneRecord("SELECT admin_user_password,admin_user_mobile_otp_verification_status FROM tbl_admin_user WHERE admin_user_mobile = '$user_mobileno'");
    }else{
      $userLogin  = $db->getOneRecord("SELECT admin_user_password,admin_user_mobile_otp_verification_status FROM tbl_admin_user WHERE admin_user_email = '$user_email'");
    }
      $phone_verified = $userLogin['admin_user_mobile_otp_verification_status'];
      if($userLogin != '' && $phone_verified == '1'){
        if($user_mobileno != ''){
      $query = "UPDATE tbl_admin_user set admin_user_password = '$newPassword' where admin_user_mobile = '$user_mobileno' ";
       }else{
     $query = "UPDATE tbl_admin_user set admin_user_password = '$newPassword' where admin_user_email = '$user_email' ";
       }
      $result22 = $db->updateData($query);
      $response["status"]     = 1;
      $response["message"]    = "Password changed successfully";
    
      }else{
      $response["status"]     = 0;
      $response["message"]    = "Mobile number not verified";
       
      }
    }else{
      $response["status"]     = 2;
      $response["message"]    = "New password and re-enter password not matched";
    }
      echoResponse(200, $response);
});


//search hospital,doctors,ambulance,pharmacy,labs,police,fire brigade
 $app->post('/search', function()use ($app) {
    $db = new DbHandler();
    $session        = $db->getSession();
    $r              = $app->request->post();
    $keyword        = $r['keyword'];
    $latitude       = $r['latitude'];
    $longitude      = $r['longitude'];
    if(isset($latitude)  && isset($longitude))
     {
       $hospital_data=$db->serach_data_location($latitude,$longitude,'2',$keyword);
       $pharmacy_data=$db->serach_data_location($latitude,$longitude,'3',$keyword);
       $doctors_data=$db->serach_data_location($latitude,$longitude,'4',$keyword);
       $police_data=$db->serach_data_location($latitude,$longitude,'5',$keyword);
       $fire_brigade_data=$db->serach_data_location($latitude,$longitude,'6',$keyword);
       $labs_data=$db->serach_data_location($latitude,$longitude,'7',$keyword);
       $ambulance_data=$db->serach_data_location($latitude,$longitude,'9',$keyword);
       $product_data=$db->serach_product_location($latitude,$longitude,$keyword);
     
     }else{
        $hospital_data=$db->serach_data('2',$keyword);
        $pharmacy_data=$db->serach_data('3',$keyword);
        $doctors_data=$db->serach_data('4',$keyword);
        $police_data=$db->serach_data('5',$keyword);
        $fire_brigade_data=$db->serach_data('6',$keyword);
        $labs_data=$db->serach_data('7',$keyword);
        $ambulance_data=$db->serach_data('9',$keyword);
        $product_data=$db->serach_product($keyword);
     }
        
		if(isset($hospital_data) && !empty($hospital_data) && is_array($hospital_data))
        {
			
        		$search_data = $hospital_data;
        	
        	
		}
		if(isset($pharmacy_data) && !empty($pharmacy_data) && is_array($pharmacy_data))
        {
        	$search_data = $pharmacy_data;
        
		}
		if(isset($doctors_data) && !empty($doctors_data) && is_array($doctors_data))
        {
        	$search_data = $doctors_data;
		}
		if(isset($labs_data) && !empty($labs_data) && is_array($labs_data))
        {
        	$search_data = $labs_data;
        
		}
		if(isset($police_data) && !empty($police_data) && is_array($police_data))
        {
        	$search_data = $police_data;
		}
		if(isset($fire_brigade_data) && !empty($fire_brigade_data) && is_array($fire_brigade_data))
        {
		    $search_data = $fire_brigade_data;
		}
		if(isset($ambulance_data) && !empty($ambulance_data) && is_array($ambulance_data))
        {
        	$search_data = $ambulance_data;
        
		}

		if(isset($product_data) && !empty($product_data) && is_array($product_data))
        {
        	$search_data = $product_data;
        
		}


		if(empty($ambulance_data) && empty($fire_brigade_data) && empty($police_data) && empty($labs_data) &&  empty($doctors_data) && empty($pharmacy_data) && empty($hospital_data) && empty($product_data) )
		{
			$search_data = 'No data found ';

		}
	    print_r($search_data);exit;
        $response['hospital_data'] = $search_data;
        $response["status"]     = 1;
        $response["message"]    = "get all data";
        echoResponse(200, $response);

     
      
 });

?>