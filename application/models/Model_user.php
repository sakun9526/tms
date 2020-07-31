<?php

class Model_user extends CI_Model {

    function insertUserdata(){
       $data = array (
           'username' => $this->input->post('username',TRUE),
           'email' => $this->input->post('email',TRUE),
           'password' => sha1($this->input->post('password',TRUE)),
       );

       return $this->db->insert('users',$data);
    }


    function LoginUser(){
        $username = $this->input->post('username');
        $password = sha1($this->input->post('password'));

        $this->db->where('username',$username);
        $this->db->where('password',$password);
        
        $respond = $this->db->get('users');
        
        if($respond->num_rows()==1){
            return $respond->row(0);
        
        }else {
           return false;
        }
    }
}