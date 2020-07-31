<?php

class Login extends CI_Controller{

    public function LoginUser(){
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if($this->form_validation->run()==FALSE){
            $this->load->view('Login');
        } else {
            $this->load->model('Model_user');
            $result = $this->Model_user->LoginUser();

            if($result != false){
                $user_data = array (
                    'user_id'=>$result->id,
                    'username'=>$result->username,
                    'email'=>$result->email,
                    'loggedin'=>TRUE
                );
                $this->session->set_userdata($user_data);
                redirect('Home/Dashboard');

            }else{
                $this->session->set_flashdata('errmsg','Wrong Email or Password');
                redirect('Home/Login');
            }
        }

    }
}