<?php
///user registration
$app->post('/userRegistration', function()use ($app) {
    $db = new DbHandler();
    $session        = $db->getSession();
    $r              = $app->request->post();
    $user_name       = $r['user_name'];
    $user_mobileno   = $r['user_mobileno'];
    $user_password   = $r['user_password'];
    $user_password   = md5($user_password);
    $rand            = rand(1000,9999);
    $referal_user_code =  "zozocar$rand";
    $query = "SELECT user_mobileno FROM zozocar_user WHERE user_mobileno = '$user_mobileno'";
    $mobileExist  = $db->getOneRecord($query);
    if($mobileExist == 'null' || $mobileExist == '' || $mobileExist == 'false'){
            $tabble_name = "zozocar_user";
            $insert_array['user_name']                   = $user_name;
            $insert_array['user_mobileno']               = $user_mobileno;
            $insert_array['user_password']               = $user_password;
            $insert_array['referal_user_code']           = $referal_user_code;
            date_default_timezone_set('Asia/Kolkata');
            $insert_array['user_created_time']           = date("Y-m-d" . " " . "h:i:s");
            $column_names = array(
                    'user_name'                  ,
                    'user_mobileno'              ,
                    'user_password'              ,
                    'user_created_time'         ,
                    'referal_user_code'
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
    $rand = rand(10000,99999);
    $query = "UPDATE zozocar_user set user_mobile_otp = '$rand' where user_mobileno = '$user_mobileno' ";
    $result = $db->updateData($query);
    $api_key = '45D7C7C4C4E7CC';
    $contacts = $user_mobileno;
    $from = 'ZOZOCA';
    $sms_text = urlencode("Your OTP is :  " . $rand . "   use the One Time Password to verify your identity on ZOZOCAR");
     $api_url = "http://opendnd.smsmedia.org/app/smsapi/index.php?key=".$api_key."&campaign=7331&routeid=100308&type=text&contacts=".$contacts."&senderid=".$from."&msg=".$sms_text;
     $otp_result = file_get_contents( $api_url);
     if($otp_result != null){
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
    $userLogin  = $db->getOneRecord("SELECT user_mobile_otp as otp FROM zozocar_user WHERE user_mobileno = '$user_mobileno'");
    if($userLogin != ''){
        if($userLogin['otp'] == $user_mobile_otp){
            $query = "UPDATE zozocar_user set phone_verified = '1' , user_verify_otp_status = '1' where user_mobileno = '$user_mobileno' ";
            $result22 = $db->updateData($query);
            $response["status"]     = 1;
            $response["message"]    = "Mobile Verification Successfully";
        }else{
            $response["status"]     = 0;
            $response["message"]    = "Wrong Otp";
        }
    }else{
            $response["status"]     = 2;
            $response["message"]    = "Mobile Not Matched.";
    }
    echoResponse(200, $response);
});
$app->post('/userLogin', function()use ($app) {
    $db = new DbHandler();
    $session    = $db->getSession();
    $r          = $app->request->post();
    $user_mobileno = $r['user_mobileno'];
    $user_password   = $r['user_password'];
   $userLogin  = $db->getOneRecord("SELECT * FROM zozocar_user WHERE user_mobileno = '$user_mobileno'");
    if($userLogin != ''){
        if($userLogin['user_password']==md5($user_password)){
            if($userLogin['user_verify_otp_status'] == '1'){
                unset($userLogin['user_password']);
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

//change password
$app->post('/changePassword', function()use ($app) {
    $db = new DbHandler();
    $session        = $db->getSession();
    $r              = $app->request->post();
    $user_mobileno     = $r['user_mobileno'];
    $oldPassword    = md5($r['oldPassword']);
    $newPassword    = md5($r['newPassword']);
    $oldPassword    = $oldPassword;
    $userLogin  = $db->getOneRecord("SELECT * FROM zozocar_user WHERE user_password = '$oldPassword' and user_mobileno = '$user_mobileno'");
    if($userLogin != ''){
        $query = "UPDATE zozocar_user set user_password = '$newPassword' where user_mobileno = '$user_mobileno' ";
        $result22 = $db->updateData($query);
        $response["status"]     = 1;
        $response["message"]    = "Password Changed Successfully";
    }else{
        $response["status"]     = 0;
        $response["message"]    = "Old Password Not Matched";
    }
    echoResponse(200, $response);
});
//forgot password
$app->post('/forgotPassword', function()use ($app) {
    $db = new DbHandler();
    $session        = $db->getSession();
    $r              = $app->request->post();
    $user_mobileno  = $r['user_mobileno'];
    $newPassword    = md5($r['newPassword']);
    $re_enterPassword = md5($r['re_enterPassword']);
    $re_enterPassword = $re_enterPassword;
    if($newPassword == $re_enterPassword)
    {
      $userLogin  = $db->getOneRecord("SELECT user_password,phone_verified FROM zozocar_user WHERE user_mobileno = '$user_mobileno'");
      $phone_verified = $userLogin['phone_verified'];
      if($userLogin != '' && $phone_verified == '1'){
      $query = "UPDATE zozocar_user set user_password = '$newPassword' where user_mobileno = '$user_mobileno' ";
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
//login with otp
$app->post('/otpLogin', function()use ($app) {
    $db = new DbHandler();
    $session    = $db->getSession();
    $r          = $app->request->post();
    $user_mobileno = $r['user_mobileno'];
    $user_mobile_otp= $r['user_mobile_otp'];
    $userLogin  = $db->getOneRecord("SELECT * FROM zozocar_user WHERE user_mobileno = '$user_mobileno'");
     unset($userLogin['user_password']);
    if($userLogin != ''){
        if($userLogin['user_mobile_otp']==$user_mobile_otp){
          $query = "UPDATE zozocar_user set phone_verified = '1', user_verify_otp_status = '1' where user_mobileno = '$user_mobileno' ";
          $result22 = $db->updateData($query);
            if($userLogin['phone_verified'] == '1'){
                $response["status"]     = 1;
                $response["message"]    = "Login Successfully";
                $response["user_result"]    = $userLogin;
            }else{
                $response["status"]     = 2;
                $response["message"]    = "Mobile Not verified";
            }
        }else{
            $response["status"]     = 0;
            $response["message"]    = "OTP Not Matched";
        }
    }else{
        $response["status"]     = 3;
        $response["message"]    = "Mobile not found.";
    }
    echoResponse(200, $response);
});
$app->post('/findRide', function()use ($app) {
    $db = new DbHandler();
    $session    = $db->getSession();
    $r          = $app->request->post();
    $data['boarding_latitude']    = $r['boarding_latitude'];
    $data['boarding_longitude']   = $r['boarding_longitude'];
    $data['destination_latitude'] = $r['destination_latitude'];
    $data['destination_longitude']= $r['destination_longitude'];
    $data['user_ride_date']       = $r['user_ride_date'];
    $data['range']                = 20;
    $data['user_id']              = $r['user_id'];
    $user_ride_date =  $data['user_ride_date'];
   
     $rideList    = $db->getAllRideForSearch($data);
     
      if(!empty($rideList)){
         unset($rideList[0]->user_password);
        $response["status"]         = 1;
        $response["rideList"]    = $rideList;
    }else{
        $response["status"]         = 0;
        $response["message"]        = "No Data Found";
    }
     echoResponse(200, $response);
  });
//update profile
$app->post('/UpadteProfile', function()use ($app) {
    $db = new DbHandler();
    $session    = $db->getSession();
    $r          = $app->request->post();
    $user_name     = $r['user_name'];
    $user_mobileno = $r['user_mobileno'];
    $user_bio      = $r['user_bio'];
    $user_email    = $r['user_email'];
    $user_dob      = $r['user_dob'];
    $user_gender   = $r['user_gender'];
    $query = "UPDATE zozocar_user set user_name = '$user_name',user_bio = '$user_bio', 
    user_email = '$user_email',user_dob = '$user_dob', user_gender = '$user_gender' where user_mobileno = '$user_mobileno' ";
    $result = $db->updateData($query);
     if($result != null){
    $result2  = $db->getOneRecord("SELECT * FROM zozocar_user WHERE user_mobileno = '$user_mobileno'");
      unset($result2['user_password'],$result2['user_mobile_otp'],$result2['user_email_otp']);
                $response["status"]     = 1;
                $response["message"]    = "Your Profile is Updated Successfully";
                $response["updateInfo"] = $result2;
            }else{          
                $response["status"]     = 0;
                $response["message"]    = "Something Wrong";
            }
    echoResponse(200, $response);
  });
  //upload image
$app->post('/updateImage', function()use ($app) {
    $db = new DbHandler();
    $session    = $db->getSession();
    $r          = $app->request->post();
    $user_mobileno = $r['user_mobileno'];
    $user_profile  = $r['user_profile'];
    foreach ($_FILES as $key => $value) {
                  $tempPath = $_FILES[$key]['tmp_name'];
                  $unid_characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
                  $random_unid_length = 10;
                  $random_unid = '';
                  for ($i = 0; $i < $random_unid_length; $i++) {
                  $random_unid .= $unid_characters[mt_rand(0, strlen($unid_characters) - 1)];
                  }
                  $temp_type = $_FILES[$key]['type'];
                  $type = array();
                  $type = explode("/", $temp_type);
                  $file_type = $type[1];
                  $pathname1 = 'user' . "_" . $random_unid . "." . $file_type;
                  $pathname = strtolower($pathname1);
                  $uploadPath = "../../assets/images/user_image/";
                  $move = @move_uploaded_file($tempPath, $uploadPath . $pathname);
                  $result2 = "UPDATE zozocar_user set user_profile = '".$pathname."' where user_mobileno = '$user_mobileno' ";
                  $result = $db->updateData($result2);
                }
             if($result2 != null){
                $response["status"]     = 1;
                $response["message"]    = "Profile image updated successfully";
                $response["image_name"] = $pathname;
            }else{          
                $response["status"]     = 0;
                $response["message"]    = "Something Wrong";
            }
        echoResponse(200, $response);
  });
  //add preferences
$app->post('/userPreferences', function()use ($app) {
    $db = new DbHandler();
    $session        = $db->getSession();
    $r              = $app->request->post();
    $user_id        = $r['user_id'];
    $chattiness     = $r['chattiness'];
    $smoking        = $r['smoking'];
    $pets           = $r['pets'];
    $music          = $r['music'];
   
    $query = "SELECT * FROM users_cars WHERE  user_id = '$user_id'";
    $mobileExist  = $db->getOneRecord($query);
    if($mobileExist == 'null' || $mobileExist == '' || $mobileExist == 'false'){
            $tabble_name = "users_cars";
            $insert_array['Chattiness']         = $chattiness;
            $insert_array['Smoking']            = $smoking;
            $insert_array['Pets']               = $pets;
            $insert_array['Music']              = $music;
            $insert_array['user_id']            = $user_id;
      
            $column_names = array(
                    'Chattiness'                  ,
                    'Smoking'              ,
                    'Pets'              ,
                    'Music'            ,
                    'user_id'
                    );
                $result = $db->insertIntoTable($insert_array, $column_names, $tabble_name);
                $result2  = $db->getOneRecord("SELECT * FROM users_cars WHERE user_id = '$user_id'");
                if($result != null){
                    $response["status"]     = 1;
                    $response["user_id"]    = $user_id;
                    $response["user_preferences"]    = $result2;
                    $response["message"]    = "Your Preferences Inserted Successfully";
                    
                }else{
                    $response["status"]     = 0;
                    $response["message"]    = "Something Wrong";
                }
        }else{
        $query = "UPDATE users_cars set Chattiness = '$chattiness',Smoking = '$smoking',Pets = '$pets' ,Music = '$music'  where user_id = '$user_id' ";
        $result = $db->updateData($query);
        $result2  = $db->getOneRecord("SELECT * FROM users_cars WHERE user_id = '$user_id'");
            $response["status"]     = 2;
            $response["user_id"]    = $user_id;
            $response["user_preferences"]    = $result2;
            $response["message"]    = "Your data is updated Successfully";
        }
        echoResponse(200, $response);
});
//select preferences
$app->post('/selectPreferences', function()use ($app) {
    $db = new DbHandler();
    $session        = $db->getSession();
    $r              = $app->request->post();
    $user_id        = $r['user_id'];
    $query = "SELECT * FROM users_cars WHERE  user_id = '$user_id'";
    $preference_data  = $db->getOneRecord($query);
    if($preference_data != null){
 
                $response["status"]     = 1;
            $response["message"]    = "Your Preferences is Fetch";
                $response["user_preferences"] = $preference_data;
            }else{          
                $response["status"]     = 0;
                $response["message"]    = "Something Wrong";
            }
    echoResponse(200, $response);
});
//add offer ride
$app->post('/offerride', function()use ($app){
    $db = new DbHandler();
    $session    = $db->getSession();
    $r          = $app->request->post();
    $rides      = array();
    $r          = json_decode($app->request->getBody());
    $offer_user_id      = $r->user_id;
    $offer_data         = $r->ride_list;
    // $count              = 0; 
     foreach ($offer_data as $key => $value) {
        //  $count++;
        $table_name = "offer_ride";
        $insert_array['user_id']                = $offer_user_id;
        $insert_array['boarding_address']       = $value->boarding_address;
        $insert_array['boarding_latitude']      = $value->boarding_latitude;
        $insert_array['boarding_longitude']     = $value->boarding_longitude;
        $insert_array['destination_address']    = $value->destination_address;
        $insert_array['destination_latitude']   = $value->destination_latitude;
        $insert_array['destination_longitude']  = $value->destination_longitude;
        $insert_array['ride_start_time']        = $value->ride_start_time;
        $insert_array['ride_end_time']          = $value->ride_end_time;
        $insert_array['ride_charge']            = $value->ride_charge;
        $insert_array['available_seat']         = $value->available_seat;
        $insert_array['ride_note']              = $value->ride_note;
           $insert_array['distance']             = $value->distance;
        $insert_array['ride_status']            = '1';
        $insert_array['Status']                 = '1';
        $insert_array['parent_rideid']          = '';
        $insert_array['ride_type']              = $value->ride_type;
        $column_names = array( 
                    'user_id'                      ,
                    'boarding_address'              ,
                    'boarding_latitude'              ,
                    'boarding_longitude'            ,
                    'destination_address'          ,
                    'destination_latitude'         ,
                    'destination_longitude'         ,
                    'distance'         ,
                    'ride_start_time'              ,
                    'ride_end_time'              ,
                    'ride_charge'               ,
                    'available_seat'         ,
                    'stop_over1'              ,
                    'stop_over2'              ,
                    'stop_over3'              ,
                    'stop_over4'              ,
                    'ride_type'           ,
                    'ride_note'         ,
                       
                     'ride_status'      ,
                    'Status'           ,
                    'ride_one_two_way_status' ,
                    'parent_rideid'    
                   
            );
        //   $result_data  = $db->getOneRecord("SELECT * FROM zozocar_user WHERE user_id = '$offer_user_id'");
        //   print_r();
        //   die();
             if(isset($insert_array['ride_end_time']))
    {
        $insert_array['ride_one_two_way_status']  = 2;
    }else{
        
        $insert_array['ride_one_two_way_status']  = 1;
    }
        $result_main = $db->insertIntoTable($insert_array, $column_names, $table_name);
    if(isset($insert_array['ride_end_time']))
    {
        $insert_array['ride_end_time']               = '0000-00-00 00:00:00';
        $insert_array['ride_start_time']             = $value->ride_end_time;
        $insert_array['boarding_address']            = $value->destination_address;
        $insert_array['destination_address']         = $value->boarding_address;
         $insert_array['boarding_latitude']      = $value->destination_latitude;
        $insert_array['boarding_longitude']     = $value->destination_latitude;
        $insert_array['destination_latitude']   = $value->boarding_latitude;
        $insert_array['destination_longitude']  = $value->boarding_longitude;
        $insert_array['ride_one_two_way_status']     = 2;
        $result = $db->insertIntoTable($insert_array, $column_names, $table_name);
       
    }
    break;
     }
    // stop over insertion
    $count =0;
     foreach ($offer_data as $key => $value) {
          $count++;
          if($count>=2) {
        $table_name = "offer_ride";
        $insert_array['user_id']                = $offer_user_id;
        $insert_array['boarding_address']       = $value->boarding_address;
        $insert_array['boarding_latitude']      = $value->boarding_latitude;
        $insert_array['boarding_longitude']     = $value->boarding_longitude;
        $insert_array['destination_address']    = $value->destination_address;
        $insert_array['destination_latitude']   = $value->destination_latitude;
        $insert_array['destination_longitude']  = $value->destination_longitude;
        $insert_array['ride_start_time']        = $value->ride_start_time;
        $insert_array['ride_end_time']          = '0000-00-00 00:00:00';
        $insert_array['ride_charge']            = $value->ride_charge;
        $insert_array['available_seat']         = $value->available_seat;
        $insert_array['ride_note']              = $value->ride_note;
        $insert_array['distance']               =  $value->distance;
        $insert_array['ride_status']            = '1';
        $insert_array['Status']                 = '1';
        $insert_array['parent_rideid']          = $result_main;
          $insert_array['ride_type']              = $value->ride_type;
         $insert_array['ride_one_two_way_status'] = '1';
        $column_names = array( 
                    'user_id'                      ,
                    'boarding_address'              ,
                    'boarding_latitude'              ,
                    'boarding_longitude'            ,
                    'destination_address'          ,
                    'destination_latitude'         ,
                    'destination_longitude'         ,
                    'ride_start_time'              ,
                    'ride_end_time'              ,
                    'ride_charge'               ,
                    'available_seat'         ,
                    'stop_over1'              ,
                    'stop_over2'              ,
                    'stop_over3'              ,
                    'stop_over4'              ,
                    'ride_note'         ,
                      'distance'         ,
                     'ride_status'      ,
                     'ride_type'    ,
                    'Status'           ,
                      'ride_one_two_way_status' ,
                    'parent_rideid'   
            );
        //   $result_data  = $db->getOneRecord("SELECT * FROM zozocar_user WHERE user_id = '$offer_user_id'");
        //   print_r();
        //   die();
            
        $result = $db->insertIntoTable($insert_array, $column_names, $table_name);
   
  
     }
     }
    if($result_main != null){
                // $api_key = '45D7C7C4C4E7CC';
                // $contacts = $user_contactnumber;
                // $from = 'ZOZOCA';
                // $sms_text = urlencode("Your OTP is :  " . $confirmationRide_otp . "   use the One Time Password (OTP) to verify your book ride on ZOZOCAR");
                // $api_url = "http://opendnd.smsmedia.org/app/smsapi/index.php?key=".$api_key."&campaign=7331&routeid=100308&type=text&contacts=".$contacts."&senderid=".$from."&msg=".$sms_text;
                // $otp_result = file_get_contents( $api_url);
                
                $response["status"]      = 1;
                $response["message"]    = "Your Rides is Inserted";
                
            }else{          
                $response["status"]     = 0;
                $response["message"]    = "Something Wrong";
            }
           
    echoResponse(200, $response);

});

//book a ride
$app->post('/bookride', function()use ($app){
    $db = new DbHandler();
    $session    = $db->getSession();
    $r          = $app->request->post();
     $ride_accept_user_id   = $r['ride_accept_user_id'];
    $ride_offer_user_id    = $r['ride_offer_user_id'];
    $ride_book_seat        = $r['ride_book_seat'];
    $offer_ride_id         = $r['offer_ride_id'];
    //$pickup_date_time      = $r['pickup_date_time'];
    $bookedride_status     = '0';
    $total_ride_charge     = $r['total_ride_charge'];
    $ride_user_name        = $r['ride_user_name'];
    $user_contactnumber    = $r['user_contactnumber'];
    
    // offered ride car details
    
     $query            = "select *from users_cars where user_id = $ride_offer_user_id";
                        
   
    $offered_car_details  = $db->getAllRecord($query);
    if($offered_car_details!="")
    {
       $insert_car_details = $offered_car_details[0];
       if(!empty($insert_car_details))
       {
        $offeredCarDetails = json_encode($insert_car_details);
       }
       else
       {
           $offeredCarDetails="";
       }
    }
    else
    {
        $offeredCarDetails ="";
    }
    
    
    
    //end
    
    
    $tabble_name = "rides";
        $insert_array['ride_offer_user_id']          = $ride_offer_user_id;
        $insert_array['ride_accept_user_id']         = $ride_accept_user_id;
        $insert_array['ride_user_name']              = $ride_user_name;
        $insert_array['ride_book_seat']              = $ride_book_seat;
        $insert_array['pickup_date_time']            = $r['pickup_date_time'];
        $insert_array['offer_ride_id']               = $offer_ride_id;
        $insert_array['bookedride_status']           = $bookedride_status;
        $insert_array['user_contactnumber']          = $user_contactnumber;
        $insert_array['total_ride_charge']           = $total_ride_charge;
        $insert_array['offered_car_details']         = $offeredCarDetails;
       
    
   $column_names = array(
                    'ride_offer_user_id'                      ,
                    'ride_accept_user_id'              ,
                    'ride_user_name'              ,
                    'ride_book_seat'            ,
                    'pickup_date_time'          ,
                    'offer_ride_id'         ,
                    'bookedride_status'         ,
                    'user_contactnumber'              ,
                    'total_ride_charge',
                    'offered_car_details'
                     
                    
                    );
         
        $result = $db->insertIntoTable($insert_array, $column_names, $tabble_name);
        if($result != null){
                $confirmationRide_otp = rand(10000,99999);
               
                $query = "UPDATE rides
                          set confirmationRide_otp = '$confirmationRide_otp' where offer_ride_id  = '$offer_ride_id' ";
                $result = $db->updateData($query);
                $api_key = '45D7C7C4C4E7CC';
                $contacts = $user_contactnumber;
                $from = 'ZOZOCA';
                $sms_text = urlencode("Your OTP is :  " . $confirmationRide_otp . "   use the One Time Password (OTP) to verify your book ride on ZOZOCAR");
                $api_url = "http://opendnd.smsmedia.org/app/smsapi/index.php?key=".$api_key."&campaign=7331&routeid=100308&type=text&contacts=".$contacts."&senderid=".$from."&msg=".$sms_text;
                $otp_result = file_get_contents( $api_url);
                
                //push notification to driver
                
                $offer_ride_id = $offer_ride_id;
                 $offeredRideData = $db->getOneRecord("select offer_ride.boarding_address,offer_ride.destination_address from offer_ride where ride_id = '$offer_ride_id' ");
                 if(!empty($offeredRideData))
                 {
                     $pickup_address = $offeredRideData['boarding_address'];
                     $drop_address   = $offeredRideData['destination_address'];
                 }
                 else
                 {
                     $pickup_address = "";
                     $drop_address   = "";
                 }
                
                  $driver_user_id               =  $ride_offer_user_id;
   
                $booked_user_name               =  $ride_user_name;
    $driverData = $db->getOneRecord("select user_fcm_id from zozocar_user where user_id = '$driver_user_id' ");
     if(!empty($driverData)) {
    $driver_device_id  = $driverData['user_fcm_id'];
                if($driver_device_id!="") {
                    
                    $image = $driverData['user_profile'];

                       //push notification 
                    $response = '';
                    $title    =  'Booked';
                    $image    =  '';
                    $message_date = $r['pickup_date_time'];
                    $message  =  ucfirst($booked_user_name).   ' Has Booked Your Ride..' .$message_date .'From : '.$pickup_address .'To : '.$drop_address;
                     $res     = $db->getPush($title,$message);
                  $regids   =  str_replace(' ', '', $driverData['user_fcm_id']);
                
 // $regId ='dJIXuvCZlas:APA91bGil8qGMd0sUjML_-yQ3a00ap3vDwN4jMaGxbrSx_GT6kYYvwBO8-v_E4hcuNTZxx9jgmc3zL16_HIMSfuck_Gx7k8f9Sr_i_PKe46ie8b2sMTrKqZAlgNPv2D9x10FYYjpOf5K';
                    
                   
                     $response = $db->pustnotisend($regids, $res);
                    
                    
                     //end
                }
                else
                {
                    
                }
     
    }  
    else
    {
       
    }
         //end         
                
                
                
                
                
                
                
                
                
                
                
                
                
     
                $response["status"]      = 1;
                $response["message"]    = "Your Rides is book";
                
            }else{          
                $response["status"]     = 0;
                $response["message"]    = "Something Wrong";
            }
    
       echoResponse(200, $response);
});

//user all book ride
$app->post('/userAllBookRide', function()use ($app) {
    $db = new DbHandler();
    $session                    = $db->getSession();
    $r                          = $app->request->post();
    $ride_accept_user_id        = $r['ride_accept_user_id'];
    //$ride_id                   = $r['ride_id'];
   
    $query = " SELECT users_cars.*,rides.ride_accept_user_id,rides.offered_car_details,rides.ride_id as booked_ride_id,rides.confirmationRide_otp,rides.offer_ride_id,rides.bookedride_status,rides.ride_book_seat,rides.pickup_date_time ,rides.total_ride_charge,offer_ride.*,zozocar_user.user_mobileno,zozocar_user.user_name,zozocar_user.user_profile FROM rides INNER JOIN offer_ride on rides.offer_ride_id=offer_ride.ride_id INNER JOIN zozocar_user on zozocar_user.user_id=rides.ride_offer_user_id inner join users_cars on users_cars.user_id = rides.ride_offer_user_id where rides.ride_accept_user_id=$ride_accept_user_id and rides.bookedride_status != 3 order by rides.pickup_date_time desc ";
  
    $book_ride_data  = $db->getAllRecord($query);
    
   
    if($book_ride_data != null){
 
                $response["status"]     = 1;
                $response["message"]    = "Your All Book Rides List ";
                $response["book_history"] = $book_ride_data;
            }else{          
                $response["status"]     = 0;
                $response["message"]    = "Something Wrong";
            }
    
    echoResponse(200, $response);
});
// user payments to zozocar
$app->post('/userAllPaymentsRide', function()use ($app) {
    $db = new DbHandler();
    $session                    = $db->getSession();
    $r                          = $app->request->post();
    $driverId                   = $r['user_id'];
    //$ride_id                   = $r['ride_id'];
   
    $query = " SELECT * FROM `offer_ride` where user_id=$driverId AND ride_status=1 and parent_rideid=0 order by ride_id ASC  ";
                        
   
    $driverPayments  = $db->getAllRecord($query);
    
   
    if($driverPayments != null){
 
                $response["status"]     = 1;
                $response["message"]    = "Driver Payments ";
                $response["driverPayments"] = $driverPayments;
            }else{          
                $response["status"]     = 0;
                $response["message"]    = "Something Wrong";
            }
    
    echoResponse(200, $response);
});




//all earnings of a user 
$app->post('/userAllEarning', function()use ($app) {
    $db = new DbHandler();
    $session                    = $db->getSession();
    $r                          = $app->request->post();
    $user_id1                 = $r['user_id'];
    //$ride_id                   = $r['ride_id'];
   
    $query = " SELECT transaction.transaction_createdDateTime,offer_ride.boarding_address,offer_ride.destination_address,rides.total_ride_charge FROM `transaction` inner join rides on transaction.transaction_ride_id=rides.ride_id inner join offer_ride on rides.offer_ride_id=offer_ride.ride_id where transaction_user_id =$user_id1 and transaction_status=1 ";
                        
   
    $earnings_through_offered_rides = $db->getAllRecord($query);
    
    // earnings through referals all
     
    $query_referal = " SELECT sum(earning_amount) as total_referal_earning FROM `earnings` where earning_user_id=$user_id1";
                        
   
    $earnings_through_referal = $db->getOneRecord($query_referal);
    
   $amount_index=$earnings_through_referal['total_referal_earning'];
   //print_r($amount_index);
 //  die;
    if($earnings_through_referal != null || $earnings_through_offered_rides != null){
 
                $response["status"]                          =  1;
                $response["message"]                         =  "Total Earnings ";
                $response["earnings_rideList"] =   $earnings_through_offered_rides;
                $response["total_referal_earning"]          =    $amount_index;
            }else{          
                $response["status"]     = 0;
                $response["message"]    = "Something Wrong";
            }
    
    echoResponse(200, $response);
});




//user all offer ride 
$app->post('/userAllOfferRide', function()use ($app) {
    $db = new DbHandler();
    $session                    = $db->getSession();
    $r                          = $app->request->post();
    $user_id                    = $r['user_id'];
   
    // $query = "SELECT 
    //             * FROM `offer_ride` 
    //           INNER JOIN zozocar_user ON offer_ride.user_id = zozocar_user.user_id 
    //           INNER JOIN users_cars ON offer_ride.user_id = users_cars.user_id 
    //           where offer_ride.user_id =$user_id && offer_ride.Status='1'";
      $query = "SELECT 
                * FROM `offer_ride` 
              INNER JOIN zozocar_user ON offer_ride.user_id = zozocar_user.user_id 
    
              where offer_ride.user_id =$user_id and offer_ride.ride_status=1 order by ride_id desc" ;
              
    
    $offer_ride_data  = $db->getAllRecord($query);
   
    if($offer_ride_data != null){
 
                $response["status"]     = 1;
                $response["message"]    = "Your All Offer Rides List ";
                $response["book_history"] = $offer_ride_data;
            }else{          
                $response["status"]     = 0;
                $response["message"]    = "Something Wrong";
            }
    
    echoResponse(200, $response);
});

//add car details
$app->post('/addCarDetails' , function()use ($app) {
    $db = new DbHandler();
    $session                 = $db->getSession();
    $r                       = $app->request->post();
    $user_id                 = $r['user_id'];
    $car_number              = $r['car_number'];
    $car_type                = $r['car_type'];
    $car_name                = $r['car_name'];
    $car_image               = $r['car_image'];
    $car_model               = $r['car_model'];
    $car_registration_date   = $r['car_registration_date'];
    $car_seats               = $r['car_seats'];
    $ac                      = $r['ac'];
    $country                 = $r['country'];
    $car_type_detail         = $r['car_type_detail'];

     $query = "SELECT * FROM users_cars WHERE  user_id = '$user_id'";
    $mobileExist  = $db->getOneRecord($query);
    if($mobileExist == 'null' || $mobileExist == '' || $mobileExist == 'false'){
            $tabble_name = "users_cars";
            $insert_array['car_number']              = $car_number;
            $insert_array['car_type']                = $car_type;
            $insert_array['car_name']                = $car_name;
            $insert_array['user_id']                 = $user_id;
            $insert_array['car_model']               = $car_model;
            $insert_array['car_registration_date']   = $car_registration_date;
            $insert_array['car_seats']               = $car_seats;
            $insert_array['ac']                      = $ac;
            $insert_array['status']                  = '1';
            $insert_array['country']                 = $country;
            $insert_array['car_type_detail']         = $car_type_detail;
                if(!empty($_FILES))
                {
             foreach ($_FILES as $key => $value) {
                  $tempPath = $_FILES[$key]['tmp_name'];
                  $unid_characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
                  $random_unid_length = 10;
                  $random_unid = '';
                  for ($i = 0; $i < $random_unid_length; $i++) {
                  $random_unid .= $unid_characters[mt_rand(0, strlen($unid_characters) - 1)];
                  }
                  $temp_type = $_FILES[$key]['type'];
                  $type = array();
                  $type = explode("/", $temp_type);
                  $file_type = $type[1];
                  $pathname1 = 'car' . "_" . $random_unid . "." . $file_type;
                  $pathname = strtolower($pathname1);
                  $uploadPath = "../../assets/images/car_images/";
                  $move = @move_uploaded_file($tempPath, $uploadPath . $pathname);
                  $insert_array['car_image']               = $pathname;
                   
                }
                }
                else
                {
                    $insert_array['car_image'] = "";
                }
      
            $column_names = array(
                    'car_number'             ,
                    'car_type'               ,
                    'car_name'               ,
                    'car_image'              ,
                    'user_id'                ,
                    'car_model'              ,
                    'car_registration_date'  ,
                    'car_seats'              ,
                    'ac'                     ,
                    'status'                 ,
                    'country'                ,
                    'car_type_detail'
                    );
                $result = $db->insertIntoTable($insert_array, $column_names, $tabble_name);
                $result2  = $db->getOneRecord("SELECT * FROM users_cars WHERE user_id = '$user_id'");
                if($result != null){
                    $response["status"]     = 1;
                    $response["car_details"]    = $result2;
                    $response["message"]    = "Your Car Details Inserted Successfully";
                    
                }else{
                    $response["status"]     = 0;
                    $response["message"]    = "Something Wrong";
                   
                }
            

        }else{
               foreach ($_FILES as $key => $value) {

                  $tempPath = $_FILES[$key]['tmp_name'];
                  $unid_characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
                  $random_unid_length = 10;
                  $random_unid = '';
                  for ($i = 0; $i < $random_unid_length; $i++) {
                  $random_unid .= $unid_characters[mt_rand(0, strlen($unid_characters) - 1)];
                  }
                  $temp_type = $_FILES[$key]['type'];
                  $type = array();
                  $type = explode("/", $temp_type);
                  $file_type = $type[1];
                  $pathname1 = 'car' . "_" . $random_unid . "." . $file_type;
                  $pathname = strtolower($pathname1);
                  $uploadPath = "../../assets/images/car_images/";
                  $move = @move_uploaded_file($tempPath, $uploadPath . $pathname);
                 
                }
                if( $tempPath!=null)
                {
                    $query = "UPDATE users_cars set car_number = '$car_number',car_type = '$car_type',car_type_detail='$car_type_detail',car_name = '$car_name' ,car_image = '$pathname', car_model = '$car_model',car_registration_date = '$car_registration_date',car_seats = '$car_seats',ac = '$ac' ,status = '$status' ,country = '$country'  where user_id = '$user_id' ";
       
                }
                else
                {
                    $query = "UPDATE users_cars set car_number = '$car_number',car_type = '$car_type',car_name = '$car_name',car_type_detail='$car_type_detail' , car_model = '$car_model',car_registration_date = '$car_registration_date',car_seats = '$car_seats',ac = '$ac' ,status = '$status' ,country = '$country'  where user_id = '$user_id' ";
                }
       // $query = "UPDATE users_cars set car_number = '$car_number',car_type = '$car_type',car_name = '$car_name' ,car_image = '$pathname', car_model = '$car_model',car_registration_date = '$car_registration_date',car_seats = '$car_seats',ac = '$ac' ,status = '$status' ,country = '$country'  where user_id = '$user_id' ";
        $result = $db->updateData($query);
        $result2  = $db->getOneRecord("SELECT * FROM users_cars WHERE user_id = '$user_id'");
            $response["status"]     = 2;
            $response["car_details"]    = $result2;
            $response["message"]    = "Your Car Details is updated Successfully";
        }
        echoResponse(200, $response);

});

//offer user id all book ride user
$app->post('/offerUserRideAllUsers' , function()use ($app) {
    $db = new DbHandler();
    $session                 = $db->getSession();
    $r                       = $app->request->post();
    $id           = $r['offer_ride_id'];

    $query = "select rides.ride_id,rides.ride_offer_user_id,rides.confirmRideOtp_status,rides.ride_user_name,rides.ride_book_seat,rides.offer_ride_id,rides.bookedride_status,rides.user_contactnumber,rides.pickup_date_time,offer_ride.boarding_address,offer_ride.destination_address,offer_ride.ride_start_time FROM rides INNER join offer_ride on offer_ride.ride_id=rides.offer_ride_id where offer_ride. ride_id='$id' and rides.bookedride_status!=2 and rides.bookedride_status!=3 ";
   
    $offer_user_data  = $db->getAllRecord($query);

  
      if($offer_user_data != null){
              
               $response["status"]     = 1;
               $response["message"]    = "Your Ride All Users List ";
               $response["book_history"] = $offer_user_data;
            }else{          
                $response["status"]     = 0;
                $response["message"]    = "Something Wrong";
            }
  
    echoResponse(200, $response);

});

//verify user ride
$app->post('/verifyUserRide', function()use ($app) {
    $db = new DbHandler();
    $session        = $db->getSession();
    $r              = $app->request->post();
    $ride_id        = $r['ride_id'];
   
 
    
   
    $confirmationRide_otp = $r['confirmationRide_otp'];
  

    $userRideVerify  = $db->getOneRecord("SELECT confirmationRide_otp as otp FROM rides WHERE ride_id = '$ride_id'");
    $otp = $userRideVerify['otp'];
   
    if($userRideVerify != ''){
     
        if( $confirmationRide_otp==$otp ){
          
            $query = "UPDATE rides set confirmRideOtp_status = '1' , bookedride_status=4 where ride_id = '$ride_id' ";
            
            $verifyUpdate = $db->updateData($query);
           
            if($verifyUpdate==1){
            
                                 $table_name = "transaction";
                                $insert_array['transaction_ride_id']     =   $r['ride_id'];
                                $insert_array['transaction_user_id']     =    $r['user_id'];
                                $insert_array['transaction_status']      =           1;
                            
                          
                                $column_names = array(
                                        'transaction_ride_id'                  ,
                                        'transaction_user_id'         ,
                                        'transaction_status'              
                                       
                                        );
                               $insertion_id = $db->insertIntoTable($insert_array, $column_names, $table_name);
                                
                                                if($insertion_id>0)
                                                {
                    
                                                $response["status"]     = 1;
                                                $response["message"]    = "Ride Verification Successfully";
                                                }
                                                else
                                                {
                                                    $response["status"]     = 0;
                                                    $response["message"]    = "Something Wrong";   
                                                }
                                    
            }
       } else{
            $response["status"]     = 0;
            $response["message"]    = "Wrong Otp";
        }
    }else{
            $response["status"]     = 2;
            $response["message"]    = "Something Wrong";
    }
    echoResponse(200, $response);
});

//cancel  book rides
$app->post('/cancelBookRide', function()use ($app) {
    $db = new DbHandler();
    $session        = $db->getSession();
    $r              = $app->request->post();
   
    $ride_id        = $r['ride_id'];

   
    
   
    $cancel_booked_ride_reason  = $r['cancel_booked_ride_reason'];
    ;

     $user_mobileno  = $r['user_mobileno'];
    $user_email     = $r['user_email'];
    $user_name      = $r['user_name'];
    
    $cancelOfferRide  = $db->getOneRecord("SELECT * FROM rides WHERE ride_id = '$ride_id'");
   
    
    
    
    $offer_ride_id =$cancelOfferRide['offer_ride_id'];
  
  
  
    $booked_seats = $cancelOfferRide['ride_book_seat'];
   
   
    $user_name = $cancelOfferRide['ride_user_name'];
    $approval_status = $cancelOfferRide['bookedride_status'];
   
    
      if($approval_status==1)
     {
        
            $OfferRideData = $db->getOneRecord("SELECT * FROM offer_ride WHERE ride_id = $offer_ride_id");
            $available_seats = $OfferRideData['available_seat'];
            
            $updated_seats   = $available_seats+$booked_seats;
           
           
              $query = "UPDATE offer_ride set available_seat = $updated_seats where ride_id = '$offer_ride_id' ";
            $seats_updation = $db->updateData($query);
            if($seats_updation==1)
            {
              $response['status'] = 1; //seats updation
               
            }
            else
            {
                 $response['status'] = 0; //seats updation failed error
               
                 
            }
     }
      $query     = "UPDATE rides set bookedride_status = '3' , cancel_reason_by_booked_user = '$cancel_booked_ride_reason' where ride_id = '$ride_id' ";
            $result22 = $db->updateData($query);

        //driver data
    $driver_user_id   = $cancelOfferRide['ride_offer_user_id'];
   
    $booked_user_name  = $cancelOfferRide['ride_user_name'];
    $driverData = $db->getOneRecord("select user_fcm_id from zozocar_user where user_id = '$driver_user_id' ");
    
   
   
    if(!empty($driverData)) {
    $driver_device_id  = $driverData['user_fcm_id'];
                if($driver_device_id!="") {
                    
                    $image = $driverData['user_profile'];

                       //push notification 
                    //$response = '';
                    $title    =  'Cancelled';
                    $image    =  '';
                    $message  =  ucfirst($booked_user_name).   ' Has Cancelled Your Ride..';
                     $res     = $db->getPush($title,$message);
                  $regids   =  str_replace(' ', '', $driverData['user_fcm_id']);
                
                  $response['fcm_response'] =   $db->pustnotisend($regids, $res);
                    
                    
                     //end
                }
                else
                {
                    
                }
     
    }  
    else
    {
       
    }
 

    // $offer_ride_id =$cancelOfferRide['offer_ride_id'];
  
  
  
   
    if($cancelOfferRide != ''){
       
            
            
            $OfferRideData = $db->getOneRecord("SELECT * FROM offer_ride WHERE ride_id = $offer_ride_id");
            $offer_ride_user_id = $OfferRideData[user_id];

            $from_address = $OfferRideData[boarding_address];
            $to_address   = $OfferRideData[destination_address];
            $start_date   = $OfferRideData[ride_start_time];
            $offer_ride_user_info = $db->getOneRecord("SELECT user_mobileno,user_email FROM zozocar_user WHERE  user_id = '$offer_ride_user_id'");
            $offer_user_mobile = $offer_ride_user_info[user_mobileno];
            $offer_user_email  = $offer_ride_user_info[user_email];
            $api_key = '45D7C7C4C4E7CC';
            $contacts = $offer_user_mobile;
            $from = 'ZOZOCA';
            $sms_text = urlencode("$user_name cancelled for $from_address - $to_address $start_date.Visit the site to find out more");
            $api_url = "http://opendnd.smsmedia.org/app/smsapi/index.php?key=".$api_key."&campaign=7331&routeid=100308&type=text&contacts=".$contacts."&senderid=".$from."&msg=".$sms_text;
            $cancel_result = file_get_contents( $api_url);
            $content        = "Thanks For Booked A Ride from  '.$from_address.'  To 
             '.$to_address. '  on '.$start_date.' <br> Sorry ! Your booking request has  been disapproved by driver. We are looking forward to connecting for
             a  long-term association with you.";
             $message ='
        <body style="background: #fafafa">
          <table style="background: #fff; box-shadow: 1px -110px 11px 0px #e6e6e6;font-family:sans-serif;" align="center" width="600" cellspacing=0 cellpadding=0 border=0;>
  <tbody>
    <tr>
      <td><img style="max-width:120px; padding:8px;" src="https://www.zozocars.com/assets/email_images/logo.png" alt=""/></td>
    </tr>
    <tr>
      <td colspan="2"><img src="https://www.zozocars.com/assets/email_images/mail-banner.jpg" width="100%" alt=""/></td>
    </tr>
    <tr>
      <td colspan="2" style="font-size: 16px;font-weight: 600;padding-left: 10px;color: #14212b;padding-top: 40px;">Dear '.$user_name.'; ,</td>
    </tr>
    <tr>
      <td colspan="2" style="font-size: 13px;color: #666;margin-top: 10px;padding: 0px 10px;padding-top: 12px;">Greetings from ZOZOCAR!<br>
        <br>
         '.$content.'; 

        </td>
    </tr>
    <tr>
    <tr>
    <tr>
      <td colspan="2" style="font-size: 13px;color: #666;margin-top: 10px;padding: 0px 10px;padding-top: 22px;">We are looking forward to connecting for a long-term association with you.<br>
        <ul style="list-style: none;padding: 0px;">
          <li> Warm Regards,</li>
          <li> Team ZOZOCAR</li>
          <li> <a href="mailto">zozocar82@gmail.com</a></li>
        </ul></td>
    </tr>
    <tr>
      <td colspan="2"><ul style="list-style: none;text-align: center;">
          <li style="display: inline-block; padding: 0px 3px"><a href="javascript:void(0)" target="_blank"><img src="https://www.zozocars.com/assets/email_images/facebook.png" width="30"  alt=""/></a></li>
          <li style="display: inline-block; padding: 0px 3px"><a href="javascript:void(0)" target="_blank"> <img src="https://www.zozocars.com/assets/email_images/twitter.png" width="30" alt=""/></a></li>
          <li style="display: inline-block; padding: 0px 3px"><a href="#"><img src="https://www.zozocars.com/assets/email_images/instagram.png" width="30"  alt=""/></a></li>
          <li style="display: inline-block; padding: 0px 3px"><a href="javascript:void(0)" target="_blank"><img src="https://www.zozocars.com/assets/email_images/linkedin.png" width="30" alt=""/></a></li>
        </ul>
      </td>
    </tr>
  </tbody>
</table>
</body>'; 

                   require("../../PHPMailer-master/src/PHPMailer.php");
                   require("../../PHPMailer-master/src/SMTP.php");
                   require("../../PHPMailer-master/src/Exception.php");
                   $mail = new PHPMailer\PHPMailer\PHPMailer();
                   $mail->IsSMTP();

                   $mail->SMTPOptions = array(
                           'ssl' => array(
                               'verify_peer' => false,
                               'verify_peer_name' => false,
                               'allow_self_signed' => true
                           )
                       ); 
                   $mail->CharSet="UTF-8";
                   $mail->Host = "zozocars.com";
                   $mail->SMTPDebug = 0;
                   $mail->Port = 465 ; 

                   $mail->SMTPSecure = 'ssl';
                   $mail->SMTPAuth = TRUE;

                   $mail->IsHTML(true);

                   $mail->Username = "hello@zozocars.com";
                   $mail->Password = "!Q2w3e4r5t";

                   $mail->SetFrom("hello@zozocars.com", "ZOZO CAR");
                   $mail->AddAddress($offer_user_email);
                   $mail->Subject = "Cancel Book";
                   $mail->Body = $message;

                   $resultMail = $mail->Send();
                   
             if($cancel_result != null && $resultMail != null){
                $response["status"]     = 1;
                $response["message"]    = "Ride cancel notification send on your mobile and email";
            }else{          
                $response["status"]     = 0;
                $response["message"]    = "Something went wrong";
            }

            // $response["status"]     = 2;
            // $response["message"]    = "Ride is cancel";
     
    }else{
            $response["status"]     = 3;
            $response["message"]    = "Something went wrong";
    }
    echoResponse(200, $response);
});

//cancel offer ride
$app->post('/cancelOfferRide', function()use ($app) {
    $db = new DbHandler();
    $session        = $db->getSession();
    $r              = $app->request->post();
    $ride_id        = $r['ride_id'];
     $cancel_offered_ride_reason  = $r['cancel_offered_ride_reason'];
     
    $cancelOfferRide  = $db->getOneRecord("SELECT * FROM offer_ride WHERE ride_id = '$ride_id'");
    $offer_ride_id = $cancelOfferRide['ride_id'];
    $from_address  = $cancelOfferRide['boarding_address'];
    $to_address    = $cancelOfferRide['destination_address'];
    $start_time    = $cancelOfferRide['ride_start_time'];
    $user_id      = $cancelOfferRide['user_id'];
   
    $user_info  = $db->getOneRecord("SELECT user_name FROM zozocar_user WHERE user_id = '$user_id'");
    $user_name = $user_info[user_name];
   
   
    if($cancelOfferRide != ''){
         $exist_ride_id  = $db->getAllRecord("SELECT * FROM rides WHERE offer_ride_id = '$offer_ride_id'");
        
         if($exist_ride_id != '')
       {
           
            foreach($exist_ride_id as $key=>$value) {
               $contact_number_array[]=$value['user_contactnumber'];
               
           }
            $testdata = implode(',',$contact_number_array);
            $api_key = '45D7C7C4C4E7CC';
            $contacts = $testdata;
            $from = 'ZOZOCA';
            $sms_text = urlencode("$user_name cancelled for $from_address - $to_address $start_date.Visit the site to find out more");
            $api_url = "http://opendnd.smsmedia.org/app/smsapi/index.php?key=".$api_key."&campaign=7331&routeid=100308&type=text&contacts=".$contacts."&senderid=".$from."&msg=".$sms_text;
            $cancel_result = file_get_contents( $api_url);
            $query = "UPDATE offer_ride set ride_status = '0'  and offered_ride_cancel_reason='$cancel_offered_ride_reason' where ride_id = '$ride_id' ";
            $result22 = $db->updateData($query);
            
            

            $response["status"]     = 1;
            $response["message"]    = "Your offered ride has been cancelled";
             
          }else
          {
             
            $response["status"]     = 2;
            $response["message"]    = "Something went wrong";
          }
           
     
    }else{
            $response["status"]     = 2;
            $response["message"]    = "Something went wrong";
    }
    echoResponse(200, $response);
});

//user car details
$app->post('/userCarDetails', function()use ($app) {
    $db = new DbHandler();
    $session                    = $db->getSession();
    $r                          = $app->request->post();
    $user_id                    = $r['user_id'];
   
    $query = "SELECT 
                * FROM `users_cars` where user_id =$user_id";
   
    $userCarDetails  = $db->getOneRecord($query);
    if($userCarDetails != null){
 
                $response["status"]     = 1;
                $response["message"]    = "Your Car Details ";
                $response["car_details"] = $userCarDetails;
            }else{          
                $response["status"]     = 0;
                $response["message"]    = "Something went wrong";
            }
    
    echoResponse(200, $response);
});

//email verification
$app->post('/sendEmailOtp', function()use ($app) {
    $db = new DbHandler();
    $session        = $db->getSession();
    $r              = $app->request->post();
    $user_email     = $r['user_email'];
    $user_mobileno  = $r['user_mobileno'];
    $rand           = rand(10000,99999);
    $user_name      = $r['user_name'];
    $content        = "Please verify your email over Zozocar to enjoy ride sharing. Your email verification OTP is " .$rand;
    $query = "UPDATE zozocar_user set user_email_otp = '$rand' where user_mobileno = '$user_mobileno' ";
    
    $result22 = $db->updateData($query);
     if($result22 != null){
       $message ='
        <body style="background: #fafafa">
          <table style="background: #fff; box-shadow: 1px -110px 11px 0px #e6e6e6;font-family:sans-serif;" align="center" width="600" cellspacing=0 cellpadding=0 border=0;>
  <tbody>
    <tr>
      <td><img style="max-width:120px; padding:8px;" src="https://www.zozocars.com/assets/email_images/logo.png" alt=""/></td>
    </tr>
    <tr>
      <td colspan="2"><img src="https://www.zozocars.com/assets/email_images/mail-banner.jpg" width="100%" alt=""/></td>
    </tr>
    <tr>
      <td colspan="2" style="font-size: 16px;font-weight: 600;padding-left: 10px;color: #14212b;padding-top: 40px;">Dear '.$user_name.'; ,</td>
    </tr>
    <tr>
      <td colspan="2" style="font-size: 13px;color: #666;margin-top: 10px;padding: 0px 10px;padding-top: 12px;">Greetings from ZOZOCAR!<br>
        <br>
         '.$content.'; 

        </td>
    </tr>
    <tr>
    <tr>
    <tr>
      <td colspan="2" style="font-size: 13px;color: #666;margin-top: 10px;padding: 0px 10px;padding-top: 22px;">We are looking forward to connecting for a long-term association with you.<br>
        <ul style="list-style: none;padding: 0px;">
          <li> Warm Regards,</li>
          <li> Team ZOZOCAR</li>
          <li> <a href="mailto">zozocar82@gmail.com</a></li>
        </ul></td>
    </tr>
    <tr>
      <td colspan="2"><ul style="list-style: none;text-align: center;">
          <li style="display: inline-block; padding: 0px 3px"><a href="javascript:void(0)" target="_blank"><img src="https://www.zozocars.com/assets/email_images/facebook.png" width="30"  alt=""/></a></li>
          <li style="display: inline-block; padding: 0px 3px"><a href="javascript:void(0)" target="_blank"> <img src="https://www.zozocars.com/assets/email_images/twitter.png" width="30" alt=""/></a></li>
          <li style="display: inline-block; padding: 0px 3px"><a href="#"><img src="https://www.zozocars.com/assets/email_images/instagram.png" width="30"  alt=""/></a></li>
          <li style="display: inline-block; padding: 0px 3px"><a href="javascript:void(0)" target="_blank"><img src="https://www.zozocars.com/assets/email_images/linkedin.png" width="30" alt=""/></a></li>
        </ul>
      </td>
    </tr>
  </tbody>
</table>
</body>'; 

                   require("../../PHPMailer-master/src/PHPMailer.php");
                   require("../../PHPMailer-master/src/SMTP.php");
                   require("../../PHPMailer-master/src/Exception.php");
                   $mail = new PHPMailer\PHPMailer\PHPMailer();
                   $mail->IsSMTP();

                   $mail->SMTPOptions = array(
                           'ssl' => array(
                               'verify_peer' => false,
                               'verify_peer_name' => false,
                               'allow_self_signed' => true
                           )
                       ); 
                   $mail->CharSet="UTF-8";
                   $mail->Host = "zozocars.com";
                   $mail->SMTPDebug = 0;
                   $mail->Port = 465 ; 

                   $mail->SMTPSecure = 'ssl';
                   $mail->SMTPAuth = TRUE;

                   $mail->IsHTML(true);

                   $mail->Username = "hello@zozocars.com";
                   $mail->Password = "!Q2w3e4r5t";

                   $mail->SetFrom("hello@zozocars.com", "ZOZO CAR");
                   $mail->AddAddress($user_email);
                   $mail->Subject = "Email Verification";
                   $mail->Body = $message;

                   $resultMail = $mail->Send();
                   
                    if($resultMail != null){
                $response["status"]     = 1;
                $response["message"]    = "OTP Sent Successfully";
            }else{
                $response["status"]     = 0;
                $response["message"]    = "Something Wrong Failed";
            }
     }else{
            $response["status"]     = 0;
            $response["message"]    = "Email Not Exist ......!!!!!";
        }
  
   
    echoResponse(200, $response);
});

//verify mail otp
$app->post('/verifyMailOtp', function()use ($app) {
    $db = new DbHandler();
    $session        = $db->getSession();
    $r              = $app->request->post();
    $user_email     = $r['user_email'];
    $user_mobileno  = $r['user_mobileno'];
    $user_email_otp = $r['user_email_otp'];

    $verifyMailOtp  = $db->getOneRecord("SELECT user_email_otp as otp FROM zozocar_user WHERE user_mobileno = '$user_mobileno'");
    
    if($verifyMailOtp != ''){
        if($verifyMailOtp['otp'] == $user_email_otp){

            $query = "UPDATE zozocar_user set email_verified = '1' where user_mobileno = '$user_mobileno' ";
            $result22 = $db->updateData($query);

            $response["status"]     = 1;
            $response["message"]    = "Email Verification Successfully";
        }else{
            $response["status"]     = 0;
            $response["message"]    = "Wrong Otp";
        }
    }else{
            $response["status"]     = 2;
            $response["message"]    = "Something Wrong";
    }
    echoResponse(200, $response);
});


//document verification
$app->post('/documentVerification', function()use ($app) {
    $db = new DbHandler();
    $session    = $db->getSession();
    $r          = $app->request->post();
    $user_mobileno = $r['user_mobileno'];
    $user_document  = $r['user_document'];

    foreach ($_FILES as $key => $value) {

                  $tempPath = $_FILES[$key]['tmp_name'];
                  $unid_characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
                  $random_unid_length = 10;
                  $random_unid = '';
                  for ($i = 0; $i < $random_unid_length; $i++) {
                  $random_unid .= $unid_characters[mt_rand(0, strlen($unid_characters) - 1)];
                  }
                  $temp_type = $_FILES[$key]['type'];
                  $type = array();
                  $type = explode("/", $temp_type);
                  $file_type = $type[1];
                  $pathname1 = 'user_doc' . "_" . $random_unid . "." . $file_type;
                  $pathname = strtolower($pathname1);
                  $uploadPath = "../../assets/images/user_image/";
                  $move = @move_uploaded_file($tempPath, $uploadPath . $pathname);
                  $result2 = "UPDATE zozocar_user set user_document = '".$pathname."',govt_id_verified = '1' where user_mobileno = '$user_mobileno' ";
                  $result = $db->updateData($result2);
                   
                }

             if($result2 != null){
                $response["status"]     = 1;
                $response["message"]    = "User Document updated Successfully";
                $response["image_name"] = $pathname;
            }else{          
                $response["status"]     = 0;
                $response["message"]    = "Something Wrong";
            }
  
        echoResponse(200, $response);
  
  });
  
 //user ride approve
$app->post('/bookRideApprove', function()use ($app) {
    $db = new DbHandler();
    $session        = $db->getSession();
    $r              = $app->request->post();
    $ride_id        = $r['ride_id'];
   
    $approveRideData  = $db->getOneRecord("SELECT  * FROM rides WHERE ride_id = '$ride_id'");
    if(!empty($approveRideData)){
       
        $offer_ride_id = $approveRideData['offer_ride_id'] ;
        $offer_user_id  =  $approveRideData['ride_offer_user_id'] ;
        
        
    //      $driverData = $db->getOneRecord("SELECT  * FROM zozocar_user WHERE user_id = '$offer_user_id'");
    //      if(!empty($driverData))
    //      {
    //          $driverName = $driverData['user_name'];
    //      }
    //      else
    //      {
    //           $driverName="";
    //      }
        
    //     //fcmNotificationApproveRide
      
   
    // $booked_user_id   = $approveRideData['ride_accept_user_id'];
   
    // $booked_user_name  = $approveRideData['ride_user_name'];
    // $bookedUserData   = $db->getOneRecord("select user_name,user_fcm_id from zozocar_user where user_id = '$booked_user_id' ");
    //  if(!empty($bookedUserData)) {
    // $bookeduser_device_id  = $bookedUserData['user_fcm_id'];
    //             if($bookeduser_device_id!="") {
    //                  //push notification 
    //                 $response = '';
    //                 $title    =  'Approved';
    //                 $image    =  '';
    //                 $message  =  ucfirst($driverName).   ' Has Approved Your Ride..';
    //                  $res     = $db->getPush($title,$message);
    //              // $regids   =  str_replace(' ', '', $bookedUserData['user_fcm_id']);
    //               $regids   =   $bookedUserData['user_fcm_id'];
                
    //           //  echo $regId ='fUeZ79DLPfQ:APA91bEXdNAfxvNZ96X3ihLWTcjvSLkSX1wUggZ1UT2dSusghiG6uC9sT99yGZNkj3B0lyOQh8NJ6FDBxqhEgQ-erz-krjZxBczSeE78UL3f_Aj3uwPuP-kTk2BZvgOPG1iCA8pC2Csc';
    //              $response = $db->pustnotisend($regids, $res);
                   
    //                  //end
    //             }
    //             else
    //             {
    //                 // die("2");
    //             }
     
    // }  
    // else
    // {
    // //   die("3");
    // }
       //end
       
     $offerRideData = $db->getOneRecord("SELECT  * FROM offer_ride WHERE ride_id = '$offer_ride_id'");
        
        if(!empty($offerRideData))
        {
            $offered_seats  = $offerRideData['available_seat'];
            $pickup_address = $offerRideData['boarding_address'];
            $drop_address   =$offerRideData['destination_address'];
          
            $ride_date_time = new DateTime($offerRideData['ride_start_time']);
            $ride_start_date_time =  $ride_date_time->format('d-M-Y H:i');
                    if($offered_seats>0)
                    {
                         $query                  = "UPDATE rides set bookedride_status = '1' where ride_id = '$ride_id' ";
                        $approvalStatus_updation = $db->updateData($query);
                        if($approvalStatus_updation==1)
                        {
                                            $ride_type = $offerRideData['ride_type'];
                                            if($ride_type==2)
                                                {
                                                     $new_available_seat = 0;
                                                }
                                            else
                                            {
                                                        $book_seat                    =     $approveRideData['ride_book_seat'];
                                 
                                                         $available_seat              =     $offerRideData['available_seat'];
                                
                                                         $update_seat                 =     $available_seat-$book_seat;
                                
                                                                 if($update_seat>0)
                                                                 {
                                                                    $new_available_seat   = $update_seat;
                                                                 }
                                                                 else
                                                                 {
                                                                    $new_available_seat   = 0;
                                                                 }
                                            }
                                             $query_seatsUpdation = "UPDATE offer_ride set available_seat = $new_available_seat where ride_id = $offer_ride_id ";
                                            $seatUpdation_result  = $db->updateData($query_seatsUpdation);
                                            if($seatUpdation_result==1)
                                            {
                                                 $response["status"]     = 1;
                                                 $response["message"]    = "Your Ride is Approved Successfully";
                                            }
                                            else
                                            {
                                                $response["status"]     = 0;
                                                $response["message"]    = "Something Wrong";
                                            }
                        }
                        else
                        {
                                                $response["status"]     = 0;
                                                $response["message"]    = "Something Wrong";
                        }
                    }
                    else
                    {
                                                $response["status"]     = 0;
                                                $response["message"]    = "Something Wrong";
                    }
        }
         else
                    {
                                                $response["status"]     = 0;
                                                $response["message"]    = "Something Wrong";
                    }
                    
                    
                    
                     
         $driverData = $db->getOneRecord("SELECT  * FROM zozocar_user WHERE user_id = '$offer_user_id'");
         if(!empty($driverData))
         {
             $driverName = $driverData['user_name'];
         }
         else
         {
              $driverName="";
         }
        
        //fcmNotificationApproveRide
      
   
    $booked_user_id   = $approveRideData['ride_accept_user_id'];
   
    $booked_user_name  = $approveRideData['ride_user_name'];
    $bookedUserData   = $db->getOneRecord("select user_name,user_fcm_id from zozocar_user where user_id = '$booked_user_id' ");
     if(!empty($bookedUserData)) {
    $bookeduser_device_id  = $bookedUserData['user_fcm_id'];
                if($bookeduser_device_id!="") {
                     //push notification 
                    $response = '';
                    $title    =  'Approved';
                    $image    =  '';
                    $message  =  ucfirst($driverName).   ' Has Approved Your Ride..'.'From : '.$pickup_address .'  To : '.$drop_address .' Date: '.$ride_start_date_time;
                     $res     = $db->getPush($title,$message);
                 // $regids   =  str_replace(' ', '', $bookedUserData['user_fcm_id']);
                  $regids   =   $bookedUserData['user_fcm_id'];
                
               //  echo $regId ='fUeZ79DLPfQ:APA91bEXdNAfxvNZ96X3ihLWTcjvSLkSX1wUggZ1UT2dSusghiG6uC9sT99yGZNkj3B0lyOQh8NJ6FDBxqhEgQ-erz-krjZxBczSeE78UL3f_Aj3uwPuP-kTk2BZvgOPG1iCA8pC2Csc';
                 $response = $db->pustnotisend($regids, $res);
                   
                     //end
                }
                else
                {
                    // die("2");
                }
     
    }  
    else
    {
    //   die("3");
    }
      
        
        }else{
            $response["status"]     = 0;
            $response["message"]    = "Something Wrong";
    }
    echoResponse(200, $response);
});

// model details
$app->post('/modelDetails', function()use ($app) {
    $db = new DbHandler();
    $session        = $db->getSession();
    $r              = $app->request->post();
   
    $modelData  = $db->getAllRecord("SELECT  * FROM car_type ");
     if($modelData != null){
 
                $response["status"]     = 1;
                $response["message"]    = "Your Car Details ";
                $response["modelData"] = $modelData;
            }else{          
                $response["status"]     = 0;
                $response["message"]    = "Something Wrong";
            }
             echoResponse(200, $response);
});
// modelPrice details
$app->post('/carTypePrice', function()use ($app) {
    $db = new DbHandler();
    $session        = $db->getSession();
    $r              = $app->request->post();
  
   
    $carTypePrice  = $db->getAllRecord("SELECT  * FROM car_price  ");
     if($carTypePrice != null){
 
                $response["status"]     = 1;
                $response["message"]    = "Price Details ";
                $response["carTypePrice"] = $carTypePrice;
            }else{          
                $response["status"]     = 0;
                $response["message"]    = "Something Wrong";
            }
             echoResponse(200, $response);
});

//referal user code
$app->post('/userReferalCode', function()use ($app) {
    $db = new DbHandler();
    $session                    = $db->getSession();
    $r                          = $app->request->post();
    $user_mobileno              = $r['user_mobileno'];
  
   $userReferalCode  = $db->getOneRecord("SELECT referal_user_code FROM `zozocar_user` where user_mobileno = '$user_mobileno'");
   
    if($userReferalCode != null){
 
                $response["status"]     = 1;
                $response["message"]    = "Your Car Details ";
                $response["referal_code"] = $userReferalCode['referal_user_code'];
            }else{          
                $response["status"]     = 0;
                $response["message"]    = "Something Wrong";
            }
    
    echoResponse(200, $response);
});

//fetch user profile
$app->post('/userProfile', function()use ($app) {
    $db = new DbHandler();
    $session        = $db->getSession();
    $r              = $app->request->post();
    $user_mobileno  = $r['user_mobileno'];
   
    $query = "SELECT * FROM zozocar_user WHERE  user_mobileno = '$user_mobileno'";
    $user_profile_data  = $db->getOneRecord($query);
    unset($user_profile_data[user_password],$user_profile_data[user_mobile_otp],$user_profile_data[user_email_otp]);
    if($user_profile_data != null){
                
                $response["status"]     = 1;
                $response["message"]    = "User inforamation";
                $response["user_preferences"] = $user_profile_data;
            }else{          
                $response["status"]     = 0;
                $response["message"]    = "Something Wrong";
            }
    
    echoResponse(200, $response);
});

//reference code
$app->post('/referalCode', function()use ($app) {
    $db = new DbHandler();
    $session  = $db->getSession();
    $r        = $app->request->post();
    $other_user_referal_code  = $r['other_user_referal_code'];
    $user_id                  = $r['user_id'];
    $otherReferalCode  = $db->getOneRecord("SELECT * FROM `zozocar_user` where referal_user_code = '$other_user_referal_code'");
    if($otherReferalCode != '')
    {
       $user_referal_code_data = $otherReferalCode['referal_user_code'];
       $referal_code_user_id   = $otherReferalCode['user_id'];
            $tabble_name = "referal";
            $insert_array['referal_userid']     = $referal_code_user_id;
            $insert_array['refered_user_id']    = $user_id;
            $insert_array['referal_user_code']  = $other_user_referal_code;
            $insert_array['refer_validation_status']  = '1';
            $insert_array['created_date_time']        = date("Y-m-d" . " " . "h:i:s");
      
            $column_names = array(
                    'referal_userid'                  ,
                    'refered_user_id'         ,
                    'referal_user_code'              ,
                    'refer_validation_status'       ,
                    'created_date_time'
                    );
            $result = $db->insertIntoTable($insert_array, $column_names, $tabble_name);
            if($result != null){
                    $response["status"]     = 1;
                    $response["user_id"]    = $result;
                    $response["message"]    = "Referal code information inserted";
            }else{
                   $response["status"]     = 0;
                   $response["message"]    = "Something Wrong";
    }
           
       
    }else{
       $response["status"]     = 0;
       $response["message"]    = "Your Referal Code is Wrong";
    }
     echoResponse(200, $response);
   
    
});

//share referal code
$app->post('/shareReferalCode', function()use ($app) {
    $db = new DbHandler();
    $session  = $db->getSession();
    $r        = $app->request->post();
    $user_mobileno  = $r['user_mobileno'];
    $referal_code   = $r['referal_code'];
    $api_key = '45D7C7C4C4E7CC';
    $contacts = $user_mobileno;
    $from = 'ZOZOCA';
    $sms_text = urlencode("Hi, please use this referal code :  $referal_code   while signing up on ZOZOCAR. Here is our app link https://play.google.com/store/apps/details?id=com.app.zozocar");
    $api_url = "http://opendnd.smsmedia.org/app/smsapi/index.php?key=".$api_key."&campaign=7331&routeid=100308&type=text&contacts=".$contacts."&senderid=".$from."&msg=".$sms_text;
    $send_referal_code = file_get_contents( $api_url);
     if($send_referal_code != null){
                $response["status"]     = 1;
                $response["message"]    = "Referal Code Send Successfully";
            }else{          
                $response["status"]     = 0;
                $response["message"]    = "Something Wrong";
            }
  
    echoResponse(200, $response);
});
$app->post('/appupdate', function()use ($app) {
    $db = new DbHandler();
   
    $r              = $app->request->post();
  
    $app_version  = $db->getOneRecord("SELECT * from app_version");
   
    if($app_version != ''){
     $response["status"]     = 1;
           
            $response["app_code"]=$app_version['version_code'];
     
    }else{
            $response["status"]     = 2;
            $response["message"]    = "Something Wrong";
    }
    echoResponse(200, $response);
});

//earn money from referal code
$app->post('/referalLevel', function()use ($app) {
$db = new DbHandler();
    $session  = $db->getSession();
    $r        = $app->request->post();
    $user_id  = $r['user_id'];
    $ride_id  = $r['ride_id'];
    $ride_distance_data  = $db->getOneRecord("select distance from offer_ride where ride_id= '$ride_id'");
    $distance = $ride_distance_data['distance'];
    $ride_level_distribution  = $db->getAllRecord("select * from level_distribution ");
  
    for($i=0;$i<=3;$i++)
    {
    $query  = $db->getOneRecord("select * from referal where refered_user_id= '$user_id' and refer_validation_status=1");
    if($query != '')
    {
        $user_id = $query['referal_userid'];
        $amount = $ride_level_distribution[$i]['level_amount'];
        $total_earning = $distance*$amount;
       
        $tabble_name = "earnings";
            $insert_array['earning_user_id']     = $user_id;
            $insert_array['earning_amount']      = $total_earning;
            $insert_array['createdDateTime']     = date("Y-m-d" . " " . "h:i:s");
      
            $column_names = array(
                    'earning_user_id'                  ,
                    'earning_amount'                ,
                    'createdDateTime'              
                    
                    );
            $result = $db->insertIntoTable($insert_array, $column_names, $tabble_name);
            
            if($result != null){
                    $response["status"]     = 1;
                    $response["message"]    = "Your total Earning is inserted";
            }else{
                   $response["status"]     = 0;
                   $response["message"]    = "Something Wrong";
          }
         
    }
    }
     echoResponse(200, $response);
    

});
$app->post('/getcarManufacturers', function()use ($app) {
    $db = new DbHandler();
   
    $r              = $app->request->post();
  
  
    $manufacturer_list  = $db->getAllRecord("SELECT *from manufacturername where status=1 ");
   
    if($manufacturer_list != ''){
     $response["status"]     = 1;
           
            $response["manufacturer_list"]=$manufacturer_list;
     
    }else{
            $response["status"]     = 2;
            $response["message"]    = "Something Wrong";
    }
    echoResponse(200, $response);
});

$app->post('/getcarModels', function()use ($app) {
    $db = new DbHandler();
   
    $r              = $app->request->post();
     $manufacturer_id = isset($r['manufacturer_id']) ? ( $r['manufacturer_id'] !='' ? $r['manufacturer_id'] :'26') : '26';
     
    
    $model_list  = $db->getAllRecord("SELECT *FROM modelname WHERE manufacturer_name_id = '$manufacturer_id' and modelNameStatus=1 ");
   
    if($model_list != ''){
     $response["status"]     = 1;
           
            $response["model_list"]=$model_list;
     
    }else{
            $response["status"]     = 2;
            $response["message"]    = "Something Wrong";
    }
    echoResponse(200, $response);
});

$app->post('/getcarTypes', function()use ($app) {
    $db = new DbHandler();
   
    $r              = $app->request->post();
    
  
    $car_types_list  = $db->getAllRecord("SELECT *from carType  WHERE carTypeStatus=1 ");
   
    if($car_types_list != ''){
     $response["status"]     = 1;
           
            $response["car_types_list"]=$car_types_list;
     
    }else{
            $response["status"]     = 2;
            $response["message"]    = "Something Wrong";
    }
    echoResponse(200, $response);
});
$app->post('/bookRideDisapprove', function()use ($app) {
    $db = new DbHandler();
    $session        = $db->getSession();
  
    $r              = $app->request->post();
      $ride_id        = $r['ride_id'];
   
   
    
     $query                  = "UPDATE rides set bookedride_status = '2' where ride_id = '$ride_id' ";
 $disapprovalStatus_updation = $db->updateData($query);
 if($disapprovalStatus_updation==1)
 {
     $response['status'] = 1;
     $response['message'] ="Disapproval Success";
  
          $ride_data  = $db->getOneRecord("select offer_ride_id,ride_offer_user_id,ride_accept_user_id,ride_user_name from rides where ride_id= '$ride_id'");
           
          if(!empty($ride_data))
          {
              $offer_ride_id = $ride_data['offer_ride_id'];
            $offer_ride_data  = $db->getOneRecord("select *from offer_ride where ride_id= '$offer_ride_id'");
                            if(!empty($offer_ride_data))
                            {
                                $pickup_address = $offer_ride_data['boarding_address'];
                                $drop_address    = $offer_ride_data['destination_address'];
                                  $ride_date_time = new DateTime($offerRideData['ride_start_time']);
                            $ride_start_date_time =  $ride_date_time->format('d-M-Y H:i');
                            }
                            else
                            {
                                $pickup_addresss="";
                                 $drop_address ="";
                                 $ride_start_date_time="";
                                
                            }
                                $driver_id = $ride_data['ride_offer_user_id'];
                                  $driverData  = $db->getOneRecord("select user_name from zozocar_user where user_id = '$driver_id'");
                                   
                                  if(!empty($driverData))
                                  {
                                      
                                        $driver_name =  $driverData['user_name'];
                                        $booked_user_id    =  $ride_data['ride_accept_user_id'];
                                         $booked_user_data = $db->getOneRecord("select user_fcm_id from zozocar_user where user_id = '$booked_user_id'");
                                         if(!empty($booked_user_data))
                                         {
                                             $user_fcm_id = $booked_user_data['user_fcm_id'];
                                            
                                         }
                                         else
                                         {
                                             
                                         }
                                  }
                                  else
                                  {
                                      $driver_name = "";
                                  }
                      if($user_fcm_id!="")
                      {
                             $response = '';
                                $title    =  'Ride Disapproved';
                                $image    =  '';
                                $message  =  ucfirst($driver_name).   ' Has Disapproved Your Ride..'.'From : '.$pickup_address .'  To : '.$drop_address .' Date: '.$ride_start_date_time;
                                 $res     = $db->getPush($title,$message);
                          
                              $regids   =   $user_fcm_id;
                            
                        
                             $response = $db->pustnotisend($regids, $res);
                            
                   
                      }
                      else
                      {
                           
                      }
                    
                    
              
          }
          else
          {
              
          }




        }
     
     
else
 {
     $response['status'] = 0;
     $response['message'] ="Disapproval failed";
 }
   echoResponse(200, $response);
});

// registration id for notification
$app->post('/addUserFcmId', function()use ($app) {
    $db = new DbHandler();
    $session        = $db->getSession();
    $r              = $app->request->post();
    $user_id        =  $r['user_id'];
    $response_user_fcm_id    =  $r['user_fcm_id'];
    $user_fcm_id = trim($response_user_fcm_id);
   
   
   if($user_id!="")
   {
        $query               = "UPDATE zozocar_user set user_fcm_id = '$user_fcm_id' where user_id = '$user_id' ";
        $fcmIdUpdationResult = $db->updateData($query);
        if($fcmIdUpdationResult==1)
        {
             $response["status"]     = 1;
            $response["message"]     = "Firebase Cloud Messaging Id Stored";
        }
        else
        {
             $response["status"]        = 0;
           $response["message"]         = "Firebase Cloud Messaging Id Failed";
        }
   }
   else
   {
            $response["status"]         = 0;
           $response["message"]         = "Firebase Cloud Messaging Id Failed";
   }
   
    echoResponse(200, $response);
});
//users location

$app->post('/usersLocation', function()use ($app) {
    $db = new DbHandler();
    $session        =           $db->getSession();
    $r              =        $app->request->post();
    $user_id        =           $r['user_id'];
   
    $user_current_latitude    =  $r['user_current_latitude'];
    $user_current_longitude   = $r['user_current_longitude'];
    $user_location_status     = 1;
    $updated_date_time        =   $r['updated_date_time'];
   
    //check entry exists or not
    $userLocationDataExists    = $db->getOneRecord("select *from users_location where user_id='$user_id' and user_location_status=1");
    if(!empty($userLocationDataExists))  {
         $query                = "UPDATE users_location set user_current_latitude = '$user_current_latitude',user_current_longitude = '$user_current_longitude',
         updated_date_time = '$updated_date_time' where user_id = '$user_id' ";
        $userLocationUpdation  = $db->updateData($query);
        if($userLocationUpdation==1)
        {
            $response["status"]     = 1;
            $response["message"]     = "User Location Updation Success";
        }
        else
        {
             $response["status"]     = 0;
            $response["message"]     = "User Location Failed";
        }
        
    }
    else {
     $table_name = "users_location";
            $insert_array['user_id']                    =   $user_id;
           
            $insert_array['user_current_latitude']     =   $user_current_latitude;
            $insert_array['user_current_longitude']    =   $user_current_longitude;
            $insert_array['user_location_status']      =    $user_location_status;
            $insert_array['updated_date_time']         =      $updated_date_time;
          
            $column_names = array(
                    'user_id'                  ,
                   
                    'user_current_latitude'              ,
                    'user_current_longitude'         ,
                    'user_location_status'           ,
                    'updated_date_time'
                    );
                $result = $db->insertIntoTable($insert_array, $column_names, $table_name);
                if($result>0)
                {
                     $response["status"]        = 1;
                    $response["message"]         = "Data Inserted";
                }
                else
                {
                     $response["status"]       = 0;
                 $response["message"]         = "Data Insertion Failed";
                }
    }
    echoResponse(200, $response);
});

$app->post('/getCarOwnerCurrentLocation', function()use ($app) {
    $db = new DbHandler();
    $session        =           $db->getSession();
    $r              =        $app->request->post();
    $user_id        =           $r['car_owner_id'];
   
      $userLocationDataExists    = $db->getOneRecord("select *from users_location where user_id='$user_id' and user_location_status=1");
      if(!empty($userLocationDataExists))
      {
            $response['car_owner_location_data'] =  $userLocationDataExists;
            $response['status']  = 1;
        
          
      }
      else
      {
          $response['status'] = 0;
          $response['message'] = 'User Current Location Doesnot Exists';
      }
      echoResponse(200, $response);
    
    
});


$app->post('/riderLocation', function()use ($app) {
    $db = new DbHandler();
    $session        =           $db->getSession();
    $r              =        $app->request->post();
    $offer_ride_id        =           $r['offer_ride_id'];
   
      $riderLocationDataExists    = $db->getAllRecord("select rides.ride_accept_user_id,rides.ride_user_name ,users_location.user_current_latitude,  users_location.user_current_longitude  from rides inner join users_location on rides.ride_accept_user_id=users_location.user_id where rides.offer_ride_id ='$offer_ride_id' and rides.bookedride_status=1");
      if(!empty($riderLocationDataExists))
      {
            $response['rider_location_data'] =  $riderLocationDataExists;
            $response['status']  = 1;
        
          
      }
      else
      {
          $response['status'] = 0;
          $response['message'] = 'User Current Location Doesnot Exists';
      }
      echoResponse(200, $response);
    
    
});







?>