<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('login'))
{

         function UserLoginEmail($email)
        {
            $ci=& get_instance();
            $ci->load->database();
            $SQL    = "SELECT 
                                        *
                                    FROM generic_admin 
                                    WHERE 
                                        admin_email = '$email'   AND admin_active = 1 ";

            $query  = $ci->db->query($SQL);
           
            $result =  $query->result();
            return $result;
        }
        function AdminLogin($userid)
        {
            $ci=& get_instance();
            $ci->load->database();
            $SQL    = "SELECT 
                                *
                            FROM generic_admin 
                                    WHERE 
                                        admin_email = '$userid'   AND admin_active = 1 ";
            $query  = $ci->db->query($SQL);
            $result =  $query->result();
            return $result;
        }
       
        function ClientLogin($userid)
        {
            $ci=& get_instance();
            $ci->load->database();
            $SQL    = "SELECT 
                                *
                            FROM generic_clients 
                                    WHERE 
                                        client_email = '$userid'   AND client_active = 1 ";
            $query  = $ci->db->query($SQL);
            $result =  $query->result();
            return $result;
        }
       


        function user_email_exist($email)
        {
            $ci=& get_instance();
            $ci->load->database();
            $SQL    = "SELECT 
                                *
                            FROM generic_admin 
                                    WHERE 
                                        admin_email = '$email'   AND admin_active = 1 ";

            $query  = $ci->db->query($SQL);
            $result =  $query->result();
            return $result;
        }



        function admin_email_exist($email)
        {
            $ci=& get_instance();
            $ci->load->database();
            $SQL    = "SELECT 
                                *
                            FROM generic_admin 
                                    WHERE 
                                        admin_email = '$email'   AND admin_active = 1 ";

            $query  = $ci->db->query($SQL);
            $result =  $query->result();
            return $result;
        }

}