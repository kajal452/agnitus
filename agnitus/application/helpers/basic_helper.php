<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('basic_helper'))
{

        function insert_data($table,$data)
        {
            $ci=& get_instance();
            $ci->load->database();
            $ci->db->insert($table,$data);
            $result = $ci->db->insert_id();
            return $result;
        }
        function getAlldata($table)
        {
            $ci=& get_instance();
            $ci->load->database();
            $query = $ci->db->get($table);
            return $query->result();
        }

        function getAlldataById($table,$id)
        {
            $ci=& get_instance();
            $ci->load->database();
            $query = $ci->db->get_where($table, $id); 
            print_r($query);exit;
            return $query->result();
        }
        

        function updaterow($data,$table,$id)
        {
            $ci=& get_instance();
            $ci->load->database();
            $ci->db->where($id);
            $ci->db->update($table,$data);
            $last_query = $ci->db->last_query();
            // print_r($last_query);exit;
            return true;
        }

        function isVarExists($table,$var){
        $query = $ci->db->select('*')->where($var)->get($table)->num_rows();
        return $query;
        }

        function passwordHash($pass){
                $options = [
                    'cost' => 12,
                ];

                $password = md5($pass);
                return $password;
        }

        function uploadFile($id,$name,$folder_name){

            $type = $_FILES['file']['type'];
            $ci=& get_instance();
            $real_path = realpath(APPPATH.'../upload/'.$folder_name.'/');
            $config['upload_path'] = $real_path;
            $config['allowed_types'] = '*';
            $config['overwrite'] = true;
            $config['max_size'] = 6000;
            $config['file_name'] = replace_string(' ', '-', strtolower($name)) . '-' . time().$id;
            
            $ci->upload->initialize($config);
            if($type == 'image/gif'|| $type == 'image/jpeg' || $type == 'image/pjpeg' || $type == 'image/png' || $type == 'image/x-png' || $type == 'application/pdf'){
                if (!$ci->upload->do_upload('file')) {
                    return 'false';
                }else{
                    $resume = array('upload_data' => $ci->upload->data());
                    $upload_file_name = $resume['upload_data']['file_name'];
                    return $upload_file_name;
                }
            }else{
                return 'false';
            }

        }

        function replace_string($replace,$with,$string) {
            $ci=& get_instance();
           $string = str_replace($replace, $with, $string);
            return $string;
            
        }

        function encode_data($id)
        {   $ci=& get_instance();
             return $ci->encryption->encrypt($id);
        }

        function decode_data($id)
        {    
            $ci=& get_instance();
             return $ci->encryption->decrypt($id);
        }

}
