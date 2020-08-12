<?php
if (!($this->session->userdata('loggedin'))){
	redirect('Home/Login');
}

?>


<html>

<head>
	<title> TMS </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
	
</head>

<body>
	 <!--navigation bar-->
	 <section id="nav-bar">
                <nav class="navbar navbar-expand-lg navbar-light ">
            
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                      <ul class="navbar-nav ml-auto">

					  <li class="nav-item dropdown">
						 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							  <?php echo $this->session->userdata('username'); ?>
						 </a>
						 <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							  <a class="dropdown-item" href="<?php echo base_url('index.php/Login/LogoutUser');?>">Logout</a>
							
							</div>
						 </li>
                      </ul>
                    </div>
                  </nav>
            </section>
