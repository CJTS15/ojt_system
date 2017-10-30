<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');

    }
    
    function get_user($username, $pwd)
    {

        $this->db->where('username', $username);
        $this->db->where('password', $pwd);
        $query = $this->db->get('user');
        return $query->result();
     

        // if($query->num_rows() == 1){
        //     $user_res = $query->row();
        //     $enc_password = $user_res->password;
        //     $dec_password = $this->encryption->decrypt($enc_password);
        //     //echo (($user_res->password)); die();
           

        //     //echo 'here :'.$pwd.' / '.$enc_password.' - '.$dec_password; die();
            
        //     if($dec_password == $pwd){
        //         return $query->result();
                
        //     }else{
        //         return false;
        //     }
        // }
    }
    
    // get user
    function get_user_by_id($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('user');
        return $query->result();
    }
    
    // insert
    function insert_user($data)
    {
        return $this->db->insert('user', $data);
    }
}?>