<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	
	public function __construct(){
        parent::__construct();

	}

	public function index()
	{
		$data['main_content'] = 'front/main/index';
		$this->load->view('template',$data);
	}

	public function test_email()
	{
		$config = array();
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'mail.rentpe.com';
		$config['smtp_user'] = 'ng@rentpe.com';
		$config['smtp_pass'] = '!Q2w3e4r5t';
		$config['smtp_port'] = '25';
		$config['mailtype'] = 'html';
		$this->load->library('email',$config);
		$this->email->initialize($config);
		$this->email->set_newline("\r\n");
		$this->email->set_mailtype("html");
 		$this->email->from('mail.rentpe.com','ng@rentpe.com');
 		$this->email->to('bhagwan.pratap@netleafinfosoft.com');
 		$this->email->subject('Subject');
     
 		$mail_data['subject'] = 'Email Subject';
 		$mail_data['description'] = "Email body contents..Here you can use HTML tables to format your data..And use \n to print date in a new line";
		$message = $this->load->view('rmail', $mail_data, true);
		$this->email->message($message);
 		$response = $this->email->send();
		$r = $this->email->send(FALSE);
		if (!$r)
		$response = $this->email->print_debugger();
 		echo '<pre>';
 		print_r($response);
 		die();
	} 



	 public function sendMobileOtp($mobile_otp='',$mobile_number='')
     {
			$mobile_otp='99999';
			$mobile_number='9009986522';
           	$request              = "";
            $param['method']      = "sendMessage";
            $param['format']      = "JSON";
            $param['send_to']     = $mobile_number;
            $param['msg']         = "Your OTP is : $mobile_otp Use the One Time Password to verify your identity on RokdaBazaar.";
            $param['userid']      = "2000185762";
            $param['password']    = "oA6mXToaA";
            $param['v']           =  "1.1";
            $param['msg_type']    = "TEXT";
            $param['auth_scheme'] = "PLAIN";
            $param['auth_scheme'] = "PLAIN";

            foreach ($param as $key => $val) {
                $request .= $key . "=" . urlencode($val);
                $request .= "&";

            }
			$request = substr($request, 0, strlen($request) - 1);
            $url = "http://enterprise.smsgupshup.com/GatewayAPI/rest?" . $request;
            $ch  = curl_init($url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $curl_scraped_page = curl_exec($ch);
            $result            = json_decode($curl_scraped_page, true);
            curl_close($ch);
     }
    
}
