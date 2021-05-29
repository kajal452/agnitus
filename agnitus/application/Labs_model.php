<?php 

class Labs_model extends CI_Model 
{

	public function __construct() {
		$this->load->database();
	}


    public function get_all_records() 
    {
        $SQL = "SELECT 
                        admin_user_id           ,
                        admin_user_name         ,
                        admin_user_email        ,
                        admin_user_contact      ,
                        admin_user_address      ,
                        admin_user_information  ,
                        admin_user_description  ,
                        admin_user_active       ,
                        image_name 
                    FROM tbl_admin_user 
                        LEFT JOIN tbl_images ON (admin_user_id = image_owner_id AND image_type = 'lab')
                        WHERE admin_user_role = 7";
		$query = $this->db->query($SQL);
		return $query->result();
    }
    public function get_lab_information($id) {
        
        $SQL = "SELECT 
                        *
                        FROM tbl_admin_user 
                        LEFT JOIN tbl_images ON (admin_user_id = image_owner_id AND image_type = 'lab')
                        WHERE admin_user_id = '$id' AND admin_user_role = 7";


        $query = $this->db->query($SQL);

        return $query->result();
    }

    public function get_all_records_for_dashboard() {
        
        $SQL = "SELECT 
                        admin_user_id           ,
                        admin_user_name         ,
                        admin_user_email        ,
                        admin_user_contact      ,
                        admin_user_address      ,
                        SUBSTRING(admin_user_information,1,70) as admin_user_information,
                        SUBSTRING(admin_user_description,1,70) as admin_user_description,
                        admin_user_active       ,
                        image_name 
                    FROM tbl_admin_user 
                        LEFT JOIN tbl_images ON (admin_user_id = image_owner_id AND image_type = 'doctor')
                        WHERE admin_user_role = 7 and admin_user_active = 1";


        $query = $this->db->query($SQL);

        return $query->result();
    }



    public function get_all_active_labs() {
        
        $SQL = "SELECT 	admin_user_id		,
                        admin_user_name     ,
                        service_type     ,
                        opening_time     ,
        				closing_time     ,
                        admin_user_email    ,
                        admin_user_contact  ,
                        admin_user_address  ,
                        SUBSTRING(admin_user_information,1,70) as admin_user_information,
                        SUBSTRING(admin_user_description,1,70) as admin_user_description,
                        admin_user_active   ,
                        image_name 
                    FROM tbl_admin_user 
                        LEFT JOIN tbl_images ON (admin_user_id = image_owner_id AND image_type = 'lab')
                        WHERE admin_user_role = 7 and admin_user_active = 1";


        $query = $this->db->query($SQL);

        return $query->result();
    }
    public function get_all_active_filter_labs($latitude,$longitude) {
        
        $SQL = "SELECT 
                            admin_user_id       ,
                            admin_user_name     ,
                            admin_user_email    ,
                            admin_user_contact  ,
                            admin_user_address  ,
                            admin_user_active   ,
                            SUBSTRING(admin_user_information,1,70) as admin_user_information,
                            SUBSTRING(admin_user_description,1,70) as admin_user_description,
                            image_name          ,
                            ( 6371  * acos( cos( radians('$latitude') ) * cos( radians( admin_user_latitude ) ) * cos( radians( admin_user_longitude ) - radians('$longitude') ) + sin( radians('$latitude') ) * sin( radians( admin_user_latitude ) ) ) ) AS distance
                        FROM tbl_admin_user 
                        LEFT JOIN tbl_images ON (admin_user_id = image_owner_id AND image_type = 'doctor')
                        WHERE 
                            admin_user_role = 7     and 
                            admin_user_active = 1   
                        
                        ORDER BY distance ASC";


        $query = $this->db->query($SQL);

        return $query->result();
    }



    


     public function get_all_active_filter_labs_limit($latitude,$longitude,$start,$limit) {
        
        $SQL = "SELECT 
                            admin_user_id       ,
                            admin_user_name     ,
                            admin_user_email    ,
                            admin_user_contact  ,
                            admin_user_address  ,
                            service_type        ,
                            opening_time        ,
                            closing_time        ,
                            admin_user_active   ,
                            SUBSTRING(admin_user_information,1,70) as admin_user_information,
                            SUBSTRING(admin_user_description,1,70) as admin_user_description,
                            image_name          ,
                            ( 6371  * acos( cos( radians('$latitude') ) * cos( radians( admin_user_latitude ) ) * cos( radians( admin_user_longitude ) - radians('$longitude') ) + sin( radians('$latitude') ) * sin( radians( admin_user_latitude ) ) ) ) AS distance
                        FROM tbl_admin_user 
                        LEFT JOIN tbl_images ON (admin_user_id = image_owner_id AND image_type = 'doctor')
                        WHERE 
                            admin_user_role = 7     and 
                            admin_user_active = 1   
                        
                        ORDER BY distance ASC LIMIT ".$start.", ".$limit."";


        $query = $this->db->query($SQL);

        return $query->result();
    }



     public function get_all_active_labs_limit($start,$limit) {
        
        $SQL = "SELECT  admin_user_id       ,
                        admin_user_name     ,
                        admin_user_email    ,
                        admin_user_contact  ,
                        service_type      ,
                        opening_time        ,
                        closing_time        ,
                        admin_user_address  ,
                        SUBSTRING(admin_user_information,1,70) as admin_user_information,
                        SUBSTRING(admin_user_description,1,70) as admin_user_description,
                        admin_user_active   ,
                        image_name 
                    FROM tbl_admin_user 
                        LEFT JOIN tbl_images ON (admin_user_id = image_owner_id AND image_type = 'lab')
                        WHERE admin_user_role = 7 and admin_user_active = 1 LIMIT ".$start.", ".$limit."";


        $query = $this->db->query($SQL);

        return $query->result();
    }

}