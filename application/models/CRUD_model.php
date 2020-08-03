<?php 

class CRUD_model extends CI_Model {
	
	function dataList(){
		$hashil=$this->db->get('tms_user_master');
		return $hashil->result();
	}
	
	function insertData(){
		    
			$data = array (
           'fname' => $this->input->post('fname',TRUE),
           'lname' => $this->input->post('lname',TRUE),
           'password' => sha1($this->input->post('password',TRUE)),
		   'gender'=> $this->input->post('gender'),
		   'phone'=> $this->input->post('phone'),
		   'package'=> $this->input->post('package'),
		   'company'=> $this->input->post('company'),
		   'customer'=> $this->input->post('customer'),
		   'branch'=> $this->input->post('branch'),
		   'username'=> $this->input->post('username', TRUE),
		   'usergroup'=> $this->input->post('usergroup'),
       );
		
          $result=$this->db->insert('tms_user_master',$data);
		  return $result;

	}

   function updateData(){
			$Id        = $this->input->post('id');
	        $firstName     = $this->input->post('fname',TRUE);
            $lastName     = $this->input->post('lname',TRUE);
            $Password  = sha1($this->input->post('password',TRUE));
		    $Gender    = $this->input->post('gender');
		    $Phone     = $this->input->post('phone');
		   $Package    = $this->input->post('package');
		    $Company    = $this->input->post('company');
		   $Customer   = $this->input->post('customer');
		   $Branch     = $this->input->post('branch');
		   $Username   = $this->input->post('username', TRUE);
		   $Usergroup  = $this->input->post('usergroup');
		   
		   $this->db->set('fname',$firstName);
		   $this->db->set('lname',$lastName);
		   $this->db->set('password',$Password);
		   $this->db->set('gender',$Gender);
		   $this->db->set('phone',$Phone);
		   $this->db->set('package',$Package);
		   $this->db->set('company',$Company);
		   $this->db->set('customer',$Customer);
		   $this->db->set('branch',$Branch);
		   $this->db->set('username',$Username);
		   $this->db->set('usergroup',$Usergroup);
		   $this->db->where('id', $Id);
		   $result=$this->db->update('tms_user_master');
		   return $result;	

   }

  function deleteData(){
	    $id=$this->input->post('id');
		$this->db->where('id', $id);
		$result=$this->db->delete('tms_user_master');
		return $result;
  }   
}