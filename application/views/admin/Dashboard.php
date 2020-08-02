<h1> dashboard </h1>

<?php 

if (!($this->session->userdata('loggedin'))){
	redirect('Home/Login');
}

echo $this->session->userdata('username'); ?>  

<a href="<?php echo base_url('index.php/Login/LogoutUser');?>">Logout </a>
