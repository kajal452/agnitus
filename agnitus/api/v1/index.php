<?php
error_reporting(0);
require_once 'dbHandler.php';
require_once 'passwordHash.php';
require '.././libs/Slim/Slim.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

// User id from db - Global Variable
$user_id = NULL;

require_once 'authentication.php';
require_once 'disapproveNotification.php';

/**
 * Verifying required params posted or not
 */
function verifyRequiredParams($required_fields,$request_params) {
    $error = false;
    $error_fields = "";
    foreach ($required_fields as $field) {
        if (!isset($request_params->$field) || strlen(trim($request_params->$field)) <= 0) {
            $error = true;

            if($field == 'client_name' || $field == 'pod_client_id' || $field == 'order_client_id'){
                $field = 'Client Name';
            }
            if($field == 'client_type' || $field == 'order_client_type'){
                $field = 'Client Type';
            }
            if($field == 'client_email'){
                $field = 'Email';
            }
            if($field == 'client_contact'){
                $field = 'Contact';
            }
            if($field == 'client_address'){
                $field = 'Address';
            }
            if($field == 'client_state_id'){
                $field = 'State';
            }
            if($field == 'client_city_id'){
                $field = 'City';
            }
            // if($field == 'client_join_date'){
            //     $field = 'Join Date';
            // }
            if($field == 'client_pincode'){
                $field = 'Pincode';
            }

            if($field == 'supplier_name' || $field == 'pod_supplier_id' || $field == 'order_supplier_id'){
                $field = 'Supplier Name';
            }
            if($field == 'supplier_type' || $field == 'order_supplier_type'){
                $field = 'Supplier Type';
            }
            if($field == 'supplier_email'){
                $field = 'Email';
            }
            if($field == 'supplier_contact'){
                $field = 'Contact';
            }
            if($field == 'supplier_address'){
                $field = 'Address';
            }
            if($field == 'supplier_state_id'){
                $field = 'State';
            }
            if($field == 'supplier_city_id'){
                $field = 'City';
            }
            // if($field == 'supplier_join_date'){
            //     $field = 'Join Date';
            // }
            if($field == 'supplier_pincode'){
                $field = 'Pincode';
            }




            if($field == 'employee_name' || $field == 'employee_id'){
                $field = 'Name';
            }

            if($field == 'employee_name' || $field == 'employee_id'){
                $field = 'Name';
            }
            if($field == 'employee_contact'){
                $field = 'Contact';
            }
            if($field == 'employee_address'){
                $field = 'Address';
            }
            if($field == 'employee_state_id'){
                $field = 'State';
            }
            if($field == 'employee_city_id'){
                $field = 'City';
            }
            if($field == 'employee_pincode'){
                $field = 'Pincode';
            }
            if($field == 'employee_join_date'){
                $field = 'Join Date';
            }




            if($field == 'driver_name' || $field == 'driver_id' || $field == 'order_driver_id'){
                $field = 'Driver Name';
            }
            if($field == 'driver_type'){
                $field = 'Type';
            }
            if($field == 'driver_email'){
                $field = 'Email';
            }
            if($field == 'driver_contact'){
                $field = 'Contact';
            }
            if($field == 'driver_address'){
                $field = 'Address';
            }
            if($field == 'driver_state_id'){
                $field = 'State';
            }
            if($field == 'driver_city_id'){
                $field = 'City';
            }
            if($field == 'driver_join_date'){
                $field = 'Join Date';
            }
            if($field == 'driver_pincode'){
                $field = 'Pincode';
            }
            if($field == 'driver_license_no'){
                $field = 'License Number';
            }
            if($field == 'driver_license_expiry_date'){
                $field = 'License Expiry Date';
            }
            if($field == 'driver_license_issue_date'){
                $field = 'License Issue Date';
            }


            if($field == 'vehicle_number' || $field == 'pod_vehicle_number' || $field == 'order_vehicle_id'){
                $field = 'Vehicle Number';
            }
            if($field == 'vehicle_owner_name'){
                $field = 'Owner Name';
            }
            if($field == 'vehicle_rc_number'){
                $field = 'RC Number';
            }
            if($field == 'vehicle_chassis_number'){
                $field = 'Chassis Number';
            }
            if($field == 'vehicle_capacity'){
                $field = 'Vehicle Capacity';
            }
            if($field == 'vehicle_type' || $field == 'order_vehicle_type'){
                $field = 'Vehicle Type';
            }
            if($field == 'vehicle_insurance_type'){
                $field = 'Vehicle Insurence Type';
            }
            if($field == 'vehicle_insurance_number'){
                $field = 'Vehicle Insurence Type';
            }


            if($field == 'pod_send_date'){
                $field = 'POD Send Date';
            }
            if($field == 'pod_recieving_date'){
                $field = 'POD Receiving Date';
            }
            if($field == 'pod_number' || $field == 'order_pod_id'){
                $field = 'POD Number';
            }



            if($field == 'order_loading_source'){
                $field = 'Loading Source';
            }
            if($field == 'order_loading_date'){
                $field = 'Loading Date';
            }
            if($field == 'order_unloading_source'){
                $field = 'Unloading Source';
            }
            if($field == 'order_unloading_date'){
                $field = 'Unloading Date';
            }
            if($field == 'order_charge_client_price'){
                $field = 'Charge Client Price';
            }
            if($field == 'order_advance_client_price'){
                $field = 'Advance Client Price';
            }
            if($field == 'order_balance_client_price'){
                $field = 'Balance Client Price';
            }
            if($field == 'order_charge_supplier_price'){
                $field = 'Charge Supplier Price';
            }
            if($field == 'order_advance_supplier_price'){
                $field = 'Advance Supplier Price';
            }
            if($field == 'order_balance_supplier_price'){
                $field = 'Balance Supplier Price';
            }
            $error_fields .= $field . ', ';
        }
    }

    if ($error) {
        // Required field(s) are missing or empty
        // echo error json and stop the app
        $response = array();
        $app = \Slim\Slim::getInstance();
        $response["status"] = "error";
        $response["message"] = 'Required field(s) ' . substr($error_fields, 0, -2) . ' is missing or empty';
        echoResponse(200, $response);
        $app->stop();
    }
}


function verifyRequiredParamsLoop($required_fields,$request_params) {
    $error = false;
    $error_fields = "";
    // print_r($request_params);
    foreach ($required_fields as $field) {
        // print_r($field);
        if (!isset($request_params->$field) || strlen(trim($request_params->$field)) <= 0) {
            $error = true;
    
            if($field == 'fabric_expDate'){
                $field = 'Fabric ExpDate';
            }
            if($field == 'fabric_purchase_description' || $field == 'style_fabric_description'){
                $field = 'Description';
            }
            if($field == 'category_id' || $field == 'fabric_purchase_fabric_category_id'){
                $field = 'Category';
            }
            if($field == 'subProduct_id' || $field == 'fabric_purchase_fabric_product_id'){
                $field = 'Fabric Type';
            }
            if($field == 'style_content' || $field == 'fabric_purchase_fabric_content'){
                $field = 'Content';
            }
            if($field == 'style_type' || $field == 'fabric_purchase_fabric_style_type'){
                $field = 'Type';
            }
            if($field == 'style_average' || $field == 'fabric_purchase_average'){
                $field = 'Average';
            }
            if($field == 'fabric_fix_price' || $field == 'fabric_purchase_fix_price'){
                $field = 'Price';
            }
            if($field == 'fabric_gst' || $field == 'fabric_purchase_gst'){
                $field = 'G.S.T';
            }
            if($field == 'fabric_tax' || $field == 'fabric_purchase_tax'){
                $field = 'Tax';
            }
            if($field == 'fabric_exchange_rate' || $field == 'fabric_purchase_exchange_rate'){
                $field = 'Exchange Rate';
            }
            if($field == 'fabric_currency_id' || $field == 'fabric_purchase_currency_id'){
                $field = 'Currency';
            }
            if($field == 'style_cutable_width' || $field == 'fabric_purchase_cutable_width'){
                $field = 'Cutable Width';
            }
            if($field == 'totalPrice' || $field == 'fabric_purchase_total'){
                $field = 'Total';
            }
            if($field == 'fabric_totalPrice' || $field == 'fabric_purchase_fabric_total'){
                $field = 'Fabric Total';
            }
            if($field == 'style_fab_waste_percent' || $field == 'fabric_purchase_waste_percent'){
                $field = 'Fab Extra %';
            }
            if($field == 'merchant_expDate' || $field == 'fabric_purchase_merch_exp_date'){
                $field = 'Merchant Expdate';
            }
            if($field == 'style_fabric_color' || $field == 'fabric_purchase_fabric_color'){
                $field = 'Fabric Color';
            }
            if($field == 'style_gsm' || $field == 'fabric_purchase_fabric_gsm'){
                $field = 'G.S.M.';
            }
            if($field == 'style_width' || $field == 'fabric_purchase_fabric_width'){
                $field = 'Width';
            }
            if($field == 'style_unit' || $field == 'fabric_purchase_unit'){
                $field = 'Unit';
            }


            $error_fields .= $field . ', ';
        }
    }
    // print_r("hello");
    if ($error) {
        // Required field(s) are missing or empty
        // echo error json and stop the app
        $response = array();
        $app = \Slim\Slim::getInstance();
        $response["status"] = "loopError";
        $response["message"] = 'Required field(s) ' . substr($error_fields, 0, -2) . ' is missing or empty';
        echoResponse(200, $response);
        $app->stop();
    }
}



function echoResponse($status_code, $response) {   
    $app = \Slim\Slim::getInstance();
    // Http response code
    $app->status($status_code);

    // setting response content type to json
    $app->contentType('application/json');
    //print_r(json_encode($response));exit;

    echo json_encode($response);
}

function developerBucket($oldJobId='',$oldEmail='',$oldContact='',$oldCity='',$oldState=''){  //  print_r($oldCity)    ;exit;                     // for storing temp data
    $db = new DbHandler();
    $session = $db->getSession();
    $_SESSION['oldEmail'] = $oldEmail;
    $_SESSION['oldContact'] = $oldContact;
    $_SESSION['oldJobId'] = $oldJobId;
    $_SESSION['oldCity'] = $oldCity;
    $_SESSION['oldState'] = $oldState;
}

$app->run();
?>