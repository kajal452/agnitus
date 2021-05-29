<?php

class DbHandler {

    private $conn;
    

    function __construct() {
        require_once 'dbConnect.php';
        // opening db connection
        $db = new dbConnect();
        $this->conn = $db->connect();
    }
    /**
     * Fetching single record
     */
    public function getOneRecord($query) {
      //print_r($query);
        $r = $this->conn->query($query.' LIMIT 1') or die($this->conn->error.__LINE__);
        
        $result = $r->fetch(PDO::FETCH_ASSOC);
    // print_r($result);exit;
        return $result;    
    }
    
    public function getAllRecord($query) {
      //print_r($query);
        $r = $this->conn->query($query) or die($this->conn->error.__LINE__);
        
        $result = $r->fetchAll(PDO::FETCH_ASSOC);
    // print_r($result);exit;
        return $result;    
    }
    
    public function getOneUserData($query) {
      // print_r($query);exit;
        $r = $this->conn->query($query.' LIMIT 1') or die($this->conn->error.__LINE__);
        $result = $r->fetch(PDO::FETCH_ASSOC);
    // print_r($result);exit;
        return $result;    
    }
    
    public function getReplace($query) {
      // print_r($query);exit;
        $result = $this->conn->query($query.' LIMIT 1') or die($this->conn->error.__LINE__);
       
        return $result;    
    }
    public function updateIntoTable($obj, $table_name, $condition) {
        $c = (array) $obj;
        foreach ($c as $key => $value) {
            $line .= $key."='".$value."',";     
        }
        $query = trim($line, ',');
        //$query = rtrim($line, ',');
        $query .= " WHERE ".$condition;
        $fullQuery = "UPDATE ". $table_name ." SET ".trim($query);
        // print_r($fullQuery);exit;
        $result = $this->conn->query($fullQuery) or die($this->conn->error . __LINE__);
        return $result;
    }


    public function insertIntoTable($obj, $column_names, $table_name) {
        $c = (array) $obj;
        $keys = array_keys($c);
      // print_r($keys);exit;
        $columns = '';
        $values = '';
        foreach($column_names as $desired_key){ // Check the obj received. If blank insert blank into the array.
           // print_r($desired_key);exit;
           if(!in_array($desired_key, $keys)) {
                $$desired_key = '';
            }else{
                $$desired_key = $c[$desired_key];
                //print_r($$desired_key);exit;
            }
            $columns = $columns.$desired_key.',';
            $values = $values."'".$$desired_key."',";
        }
       // print_r($values);
       // exit;
        
        $query = "INSERT INTO ".$table_name."(".trim($columns,',').") VALUES(".trim($values,',').")";
       // print_r($query);exit;
        $r = $this->conn->query($query) or die($this->conn->error.__LINE__);
        if ($r) {
         //   $new_row_id = $this->conn->insert_id;         //work with mysqli only
               $new_row_id = $this->conn->lastInsertId();       //work with PDO only
            return $new_row_id;
            } else {
            return NULL;
        }
    }
    
public function getAllRideForSearch($data){
    $boarding_latitude    = $data['boarding_latitude'];  
    $boarding_longitude   = $data['boarding_longitude'];  
    $destination_latitude = $data['destination_latitude']; 
    $destination_longitude= $data['destination_longitude'];
    $user_ride_date       = $data['user_ride_date'];       
    $distance             = $data['range']; 
    $user_id              = $data['user_id'];

  
    $query = "SELECT tbl.*,zozocar_user.user_name as user_name,
                            zozocar_user.user_profile as user_profile,
                          users_cars.car_name as car_name ,
                          users_cars.Chattiness as Chattiness,
                          users_cars.Smoking   as Smoking ,
                          users_cars.Music     as Music,
                          users_cars.Pets      as Pets,
                          users_cars.car_image  as car_image,
        round( (6371 * acos( cos(radians('$boarding_latitude') ) * cos( radians( tbl.boarding_latitude )
        ) * cos( radians( tbl.boarding_longitude ) -
        radians('$boarding_longitude') ) + sin( radians('$boarding_latitude') ) * sin( radians( tbl.boarding_latitude ) ) ) ),2) AS boarding_distance, round( (6371 * acos( cos( radians('$destination_latitude') ) * cos( radians( tbl.destination_latitude ) ) * cos( radians( tbl.destination_longitude ) - radians('$destination_longitude') ) + sin(
        radians('$destination_latitude') ) * sin( radians( tbl.destination_latitude ) ) ) ),2) AS destination_distance FROM `offer_ride` AS tbl
        INNER JOIN zozocar_user ON tbl.user_id = zozocar_user.user_id 
        INNER JOIN users_cars ON tbl.user_id = users_cars.user_id
          WHERE DATE(tbl.ride_start_time) like DATE('$user_ride_date') AND tbl.user_id != '$user_id'
          AND round( (6371 * acos( cos(
        radians('$boarding_latitude') ) * cos( radians( tbl.boarding_latitude )
        ) * cos( radians( tbl.boarding_longitude ) -
        radians('$boarding_longitude') ) + sin( radians('$boarding_latitude') ) * sin( radians( tbl.boarding_latitude ) ) ) ),2) <= $distance AND round(
        (6371 * acos( cos( radians('$destination_latitude') ) * cos( radians( tbl.destination_latitude ) ) * cos( radians( tbl.destination_longitude
        ) - radians('$destination_longitude') ) + sin(
        radians('$destination_latitude') ) * sin( radians( tbl.destination_latitude ) ) ) ),2) <= $distance";
       
    $result_query = $this->conn->query($query) or die($this->conn->error.__LINE__);
       
   
    $result = $result_query ->fetchAll(PDO::FETCH_OBJ);  
    return $result;
    

}

public function getSession(){ 
    if (!isset($_SESSION)) {
        session_start();
    }
  //  print_r($_SESSION['uid']);exit;
    $sess = array();
    if(isset($_SESSION['uid']))
    {

        $sess["uid"] = $_SESSION['uid'];
        $sess["name"] = $_SESSION['name'];
        $sess["email"] = $_SESSION['email'];
        $sess["mobile"] = $_SESSION['mobile'];
        $sess["module"] = $_SESSION['module'];
        $sess["user_role"] = $_SESSION['user_role'];
        $sess["user_role_id"] = $_SESSION['user_role_id'];
        $sess["unique_code"] = $_SESSION['unique_code'];
        $sess["orgLogo"] = $_SESSION['orgLogo'];
     
    }
    else
    {
        $sess["uid"] = '';
        $sess["name"] = 'Guest';
        $sess["email"] = '';
        $sess["mobile"] = '';
        $sess["module"] = '';
        $sess["user_role"] = '';
        $sess["user_role_id"] = '';
        $sess["unique_code"] = '';
        $sess["orgLogo"] = '';
       
    }
    return $sess;
}
public function destroySession(){
    if (!isset($_SESSION)) {
    session_start();
    }
    if(isSet($_SESSION['uid']))
    {
        unset($_SESSION['uid']);
        unset($_SESSION['name']);
        unset($_SESSION['email']);
        unset($_SESSION['module']);
        unset($_SESSION['user_role_id']);
        unset($_SESSION['unique_code']);
               $info='info';
        if(isSet($_COOKIE[$info]))
        {
            setcookie ($info, '', time() - $cookie_time);
        }
        $msg="Logged Out Successfully...";
    }
    else
    {
        $msg = "Not logged in...";
    }
    return $msg;
}
 
public function deleteData($query) {                                                 
        
        $query_update = $query;
        $result_update = $this->conn->query($query_update) or die($this->conn->error.__LINE__);
        //print_r($query_state_list);exit;
      
        return $result_update;         
    }
public function updateData($query) {                                                 
        
        $query_update = $query;
        $result_update = $this->conn->query($query_update) or die($this->conn->error.__LINE__);
        // print_r($result_update);exit;
      
        return $result_update;         
    }
    
    
    public function pustnotisend($to, $message) {
        $fields = array(
            'to' => $to,
            'data' => $message,
        );
        return $this->sendPushNotification($fields);
    }
 
    // Sending message to a topic by topic name
    public function sendToTopic($to, $message) {
        $fields = array(
            'to' => '/topics/' . $to,
            'data' => $message,
        );
        return $this->sendPushNotification($fields);
    }
 
    // sending push message to multiple users by firebase registration ids
    public function sendMultiple($registration_id, $message) {
        $fields = array(
            'to' => $registration_id,
            'data' => $message,
        );
        
 
        return $this->sendPushNotification($fields);
    }
 
    // function makes curl request to firebase servers
    private function sendPushNotification($fields) 
    {
        $url = 'https://fcm.googleapis.com/fcm/send';
        $key = 'AIzaSyCrLL1DpVRyrlR7-fSkJGYGAoNV4s063KM';
        $headers = array(
            'Authorization: key=' .$key,
            'Content-Type: application/json'
        );
        // Open connection
        $ch = curl_init();
 
        // Set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
        // Disabling SSL Certificate support temporarly
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
 
        curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($fields));
 
        // Execute post
        $result = curl_exec($ch);
        if ($result === FALSE) {
            die('Curl failed: ' . curl_error($ch));
        }
 
        // Close connection
        curl_close($ch);
 
        return $result;
    }
    public function setTitle($title) {
        $this->title = $title;
    }
 
    public function setMessage($message) {
        $this->message = $message;
    }
 
    public function setImage($imageUrl) {
        $this->image = $imageUrl;
    }
 
    public function setPayload($data) {
        $this->data = $data;
    }
 
    public function setIsBackground($is_background) {
        $this->is_background = $is_background;
    }
 
  
    public function getPush($title,$message) {
         $payload['team'] = India;
        $payload['score'] = '5.6';
        
        $res = array();
        $res['data']['title'] = $title;
        $res['data']['is_background'] = false;
         $res['data']['message'] = $message;
         $res['data']['image'] = '';
         $res['data']['payload'] = $payload;
      
        $d=strtotime("+5 hours 30 minutes");
         $res['data']['timestamp'] = date('Y-m-d G:i:s',$d);
         return $res;
    }
    
    
    
    
     
    
    
    
    
    
    




    


}

?>
