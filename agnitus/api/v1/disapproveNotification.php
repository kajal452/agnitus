<?php

class DisapproveNotification {

    private $conn;
    

    function __construct() {
        require_once 'dbConnect.php';
        // opening db connection
        $db = new dbConnect();
     $this->conn = $db->connect();
    }

    
    public function hii($ride_id)
    {
          $db = new DbHandler();
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


}
?>