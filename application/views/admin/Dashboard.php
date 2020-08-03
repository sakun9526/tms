<?php include 'partials/Header.php' ?>

<div class="container"> 
	<div class="row"> 
		<div class="col-md-12 mt-5"> 
			<h1 class="text-center"> TMS DASHBOARD </h1>
			<hr style="background-color:black; color:black; height:1px;">
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 mt-2">
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addUserModal">
			  New User
			</button>

			<!-- Modal -->
			<form action="" method="post" id="saveUserForm">
			<div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog  modal-lg">
				<div class="modal-content">
				  <div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">User Creation</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>
				  <div class="modal-body">
					<p>Showing user details for user creation or modification</p>
					<h6>Basic Information</h6>
					
					<div class="row">
					<div class="col-lg-6">
					<div class="form-group">
						<label>First Name</label>
						<input type="text" id="fname" class="form-control" autofocus>
					</div>
					
					<div class="form-group">
						<label>Last Name</label>
						<input type="text" id="lname" class="form-control">
					</div>

					<div class="form-group">
					<label for="exampleFormControlSelect1">Gender</label>
					<select class="form-control" id="gender">
					  <option value="" disabled selected>Select Gender</option>
					  <option value="male">Male</option>
					  <option value="female">Female</option>
					</select>
				   </div>
				   
				   <hr style="background-color:black; color:black; height:0.25px;">

					<div class="form-group">
						<label>Phone</label>
						<input type="number" id="phone" class="form-control">
					</div>

					<div class="form-group">
						<label>Email</label>
						<input type="email" id="email" class="form-control">
					</div>
					</div>
					 <div class="col-lg-6">
						<h6>User Information </h6>
						<div class="row">
							<div class="col">
							  <div class="form-group">
								<label>Package</label>
								<select class="form-control" id="package">
								  <option value="" disabled selected>Select Package</option>
								  <option value="tms">TMS</option>
								  <option value="cus">CUS</option>
								  <option value="sup">SUP</option>
								</select>
							  </div>
							</div>
							<div class="col">
							  <div class="form-group">
								<label>Company</label>
								<select class="form-control" id="company">
								  <option value="" disabled selected>Select Company</option>
								  <option value="brandix">Brandix</option>
								  <option value="hirdaramani">Hirdaramani</option>
								  <option value="george steuart">George Steuart</option>
								</select>
							  </div>

							</div>
					    </div>
						<div class="row">
							<div class="col">
							  <div class="form-group">
								<label>Customer</label>
								<select class="form-control" id="customer">
								  <option value="" disabled selected>Select Customer</option>
								  <option value="speedmark">Speedmark</option>
								  <option value="loginwin">Loginwin</option>
								  <option value="sozo">Sozo</option>
								  <option value="APL logistics">APL Logistics</option>
								  <option value="CWF international">CWF International</option>
								  <option value="silueta">Silueta</option>
								</select>
							  </div>
							</div>
							<div class="col">
							  <div class="form-group">
								<label>Branch</label>
								<select class="form-control" id="branch">
								  <option value="" disabled selected>Select Branch</option>
								  <option value="tcl">TCL</option>
								  <option value="maliban textiles">Maliban Textiles</option>
								  <option value="continental tea">Continental Tea</option>
								  <option value="uniliver ceylon">Unliver Ceylon</option>
								  <option value="hayleys advantis">Hayleys Advantis</option>
								  <option value="john keels logistics">John Keels Logistics</option>
								  <option value="S&T interiors">S&T Interiors</option>
								  <option value="citrine international">Citrine International</option>
								  <option value="loginwin">Loginwin</option>
								  <option value="FITS Express">FITS Express</option>
								</select>
							  </div>

							</div>
					    </div>
						
						<div class="form-group">
							<label>Username</label>
							<input type="text" id="username" class="form-control">
						</div>
						
						<div class="form-group">
							<label>Password</label>
							<input type="password" id="password" class="form-control">
						</div>	

						<div class="form-group">
							<label>Confirm Password</label>
							<input type="password" id="confirmpassword" class="form-control">
						</div>

						<div class="row">
							<div class="col-md-6">
								<label class="checkbox-inline">
								  <input type="checkbox" checked data-toggle="toggle"> Status
								</label>
							</div>
							
							<div class="col-md-6">
								 <div class="form-group">
								<label>User Group</label>
								<select class="form-control" id="usergroup">
								  <option value="" disabled selected>Select Usergroup</option>
								  <option value="admin">Admin</option>
								  <option value="operator">Operator</option>
								  <option value="user">User</option>
								</select>
							  </div>
							</div>
						</div>
				    </div>
				  </div>

				  </div>
				  
				  <div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Add</button>
				  </div>
				</div>
			  </div>
			</div>
		</form>
		
			<form action="" method="post" id="editUserForm">
			<div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog  modal-lg">
				<div class="modal-content">
				  <div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">User Creation</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>
				  <div class="modal-body">
					<p>Showing user details for user creation or modification</p>
					<h6>Basic Information</h6>
					
					<div class="row">
					<div class="col-lg-6">
					<div class="form-group">
						<label>First Name</label>
						<input type="text" id="editfname" class="form-control" autofocus>
					</div>
					
					<div class="form-group">
						<label>Last Name</label>
						<input type="text" id="editlname" class="form-control">
					</div>

					<div class="form-group">
					<label for="exampleFormControlSelect1">Gender</label>
					<select class="form-control" id="editgender">
					  <option value="" disabled selected>Select Gender</option>
					  <option value="male">Male</option>
					  <option value="female">Female</option>
					</select>
				   </div>
				   
				   <hr style="background-color:black; color:black; height:0.25px;">

					<div class="form-group">
						<label>Phone</label>
						<input type="number" id="editphone" class="form-control">
					</div>

					<div class="form-group">
						<label>Email</label>
						<input type="email" id="editemail" class="form-control">
					</div>
					</div>
					 <div class="col-lg-6">
						<h6>User Information </h6>
						<div class="row">
							<div class="col">
							  <div class="form-group">
								<label>Package</label>
								<select class="form-control" id="editpackage">
								  <option value="" disabled selected>Select Package</option>
								  <option value="tms">TMS</option>
								  <option value="cus">CUS</option>
								  <option value="sup">SUP</option>
								</select>
							  </div>
							</div>
							<div class="col">
							  <div class="form-group">
								<label>Company</label>
								<select class="form-control" id="editcompany">
								  <option value="" disabled selected>Select Company</option>
								  <option value="brandix">Brandix</option>
								  <option value="hirdaramani">Hirdaramani</option>
								  <option value="george steuart">George Steuart</option>
								</select>
							  </div>

							</div>
					    </div>
						<div class="row">
							<div class="col">
							  <div class="form-group">
								<label>Customer</label>
								<select class="form-control" id="editcustomer">
								  <option value="" disabled selected>Select Customer</option>
								  <option value="speedmark">Speedmark</option>
								  <option value="loginwin">Loginwin</option>
								  <option value="sozo">Sozo</option>
								  <option value="APL logistics">APL Logistics</option>
								  <option value="CWF international">CWF International</option>
								  <option value="silueta">Silueta</option>
								</select>
							  </div>
							</div>
							<div class="col">
							  <div class="form-group">
								<label>Branch</label>
								<select class="form-control" id="editbranch">
								  <option value="" disabled selected>Select Branch</option>
								  <option value="tcl">TCL</option>
								  <option value="maliban textiles">Maliban Textiles</option>
								  <option value="continental tea">Continental Tea</option>
								  <option value="uniliver ceylon">Unliver Ceylon</option>
								  <option value="hayleys advantis">Hayleys Advantis</option>
								  <option value="john keels logistics">John Keels Logistics</option>
								  <option value="S&T interiors">S&T Interiors</option>
								  <option value="citrine international">Citrine International</option>
								  <option value="loginwin">Loginwin</option>
								  <option value="FITS Express">FITS Express</option>
								</select>
							  </div>

							</div>
					    </div>
						
						<div class="form-group">
							<label>Username</label>
							<input type="text" id="editusername" class="form-control">
						</div>
						
						<div class="form-group">
							<label>Password</label>
							<input type="password" id="editpassword" class="form-control">
						</div>	

						<div class="form-group">
							<label>Confirm Password</label>
							<input type="password" id="editconfirmpassword" class="form-control">
						</div>

						<div class="row">
							<div class="col-md-6">
								<label class="checkbox-inline">
								  <input type="checkbox" checked data-toggle="toggle"> Status
								</label>
							</div>
							
							<div class="col-md-6">
								 <div class="form-group">
								<label>User Group</label>
								<select class="form-control" id="editusergroup">
								  <option value="" disabled selected>Select Usergroup</option>
								  <option value="admin">Admin</option>
								  <option value="operator">Operator</option>
								  <option value="user">User</option>
								</select>
							  </div>
							</div>
						</div>
				    </div>
				  </div>

				  </div>
				  
				  <div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary" id="add">Update</button>
				  </div>
				</div>
			  </div>
			</div>
		</form>
		
		<form id="deleteUserForm" method="post">
	<div class="modal fade" id="deleteUserModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="deleteModalLabel">Delete User</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			   <strong>Are you sure to delete this record?</strong>
		  </div>
		  <div class="modal-footer">
			<input type="hidden" name="deleteEmpId" id="deleteEmpId" class="form-control">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
			<button type="submit" class="btn btn-primary">Yes</button>
		  </div>
		</div>
	  </div>
	</div>
</form>

		
		    <div class="row">
				<div class="col-md-12 mt-3">
					<table class="table" id="userListing">
						<thead>
							<tr>
							  <th>First Name</th>
							  <th>Last Name</th>
							  <th>Email</th>
							  <th>User Group</th>
							  <th>Action</th>
							</tr>
						</thead>
						
						<tbody>
							<tbody id="listRecords">
						</tbody>
					</table>
				</div>
			
			</div>
		</div>
	</div>
</div>












<?php include 'partials/Footer.php'?>