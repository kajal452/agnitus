<?php 

class Login_model extends CI_Model 
{

		public function __construct()
		{
        	parent::__construct();
        	$this->load->database();
		}




		function fetchrowlogin($info,$table){

		    $this->db->select('*');
		    $this->db->where($info);
		    $this->db->from($table);
		    $query = $this->db->get();
		    if($query->num_rows() > 0){
		    $row = $query->row_array();
		        return $row;
		    }
		}



}?>