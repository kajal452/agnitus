<?php 

class Product_model extends CI_Model 
{

    public function __construct() {
        $this->load->database();
    }


    public function get_all_records() {
        
        $SQL = "SELECT 
                        *
                    FROM agnitus_products 
                         ORDER BY product_name ASC" ;
         


        $query = $this->db->query($SQL);

        return $query->result();
    }


}