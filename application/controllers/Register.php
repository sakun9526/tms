<?php 

class Register extends CI_Controller {

    public function RegisterUser(){
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('confirmpassword', 'Confirm Password', 'required|matches[password]');
       
        if ($this-> form_validation->run() == FALSE){
            $this->load->view('Register');
        } else {
            $this->load->model('Model_user');
            $response = $this->Model_user->insertUserdata();
            
            if($response){
                $this->session->set_flashdata('msg', 'Registerd Successfully');
                redirect('Home/Login');
            } else {
                $this->session->set_flashdata('msg','Something went wrong');
                redirect('Home/Register');
            }
        }
    
    }
}