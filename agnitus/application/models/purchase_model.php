<?php 

class Purchase_model extends CI_Model 
{

    public function __construct() {
        $this->load->database();
    }


    public function get_all_records($id) {
        
        $SQL = "SELECT 
                        *
                    FROM agnitus_product_purchase 
                    LEFT JOIN agnitus_products on product_id = purchase_product_id
                    LEFT JOIN generic_clients  on client_id  = purchase_client_id     
                    WHERE client_id = '$id'
                    ORDER BY product_name ASC" ;
         


        $query = $this->db->query($SQL);

        return $query->result();
    }

    public function get_products()
    {
            $SQL = "SELECT 
                        product_id,
                        product_name
                    FROM agnitus_products
                    WHERE 
                            product_active = 1 ";
            $query = $this->db->query($SQL);
            return $query->result();
    }
    public function get_product_price($id)
    {
            $SQL = "SELECT 
                        product_price
                        
                    FROM agnitus_products
                    WHERE 
                            product_id = $id ";
            $query = $this->db->query($SQL);
            return $query->result();
    }





}