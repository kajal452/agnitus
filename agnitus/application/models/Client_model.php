<?php 

class CLient_model extends CI_Model 
{

    public function __construct() {
        $this->load->database();
    }


    public function get_all_records() {
        
        $SQL = "SELECT 
                        *
                    FROM generic_clients 
                         ORDER BY client_name ASC" ;
         


        $query = $this->db->query($SQL);

        return $query->result();
    }


    public function get_country()
    {
            $SQL = "SELECT 
                        country_id ,
                        country_name
                    FROM generic_country";
            $query = $this->db->query($SQL);
            return $query->result();
    }



}