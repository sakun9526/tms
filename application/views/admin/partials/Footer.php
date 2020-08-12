</body>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>

$(document).ready(function(){
	listData();
	var table = $('#userListing').dataTable({     
		"ordering": true,
		"order": [],
		"bAutoWidth": true,
		"bFilter":true,
		"bInfo": true,
		"bSortCellsTop":true,
		

		// "bPaginate": false,
		// "bInfo": false,
		// "bFilter": false,
		// "bLengthChange": false,
		// "pageLength": 5,

	}); 
	function listData(){
		$.ajax({
			type:'ajax',
			url:"<?php echo base_url('index.php/Dashboard/show')?>",
			async : false,
			dataType:'json',
			
			success : function(data){
				var html='';
				var i;
				
				for(i=0; i<data.length; i++){
					html += '<tr id="'+data[i].id+'">' +
                                    					'<td>'+data[i].fname+'</td>'+
														'<td>'+data[i].lname+'</td>'+
														'<td>'+data[i].email+'</td>'+
														'<td>'+data[i].usergroup+'</td>'+
							'<td style="text-align:center;">'+
								'<a href="javascript:void(0);" class="btn btn-info btn-sm editRecord" data-id="'+data[i].id+'" data-fname="'+data[i].fname+'" data-lname="'+data[i].lname+'" data-email="'+data[i].email+'" data-usergroup="'+data[i].usergroup+'">Edit</a>'+' '+
								'<a href="javascript:void(0);" class="btn btn-danger btn-sm deleteRecord" data-id="'+data[i].id+'">Delete</a>'+
							'</td>'+
							'</tr>';
				}
				
				$('#listRecords').html(html);
			}
		});
	}
	
		// save new user record
	$('#saveUserForm').submit('click',function(){
		var firstName = $('#fname').val();
		var lastName = $('#lname').val();
		var Gender = $('#gender').val();
		var Phone = $('#phone').val();
		var Email = $('#email').val();
		var Package = $('#package').val();
		var Company = $('#company').val();
		var Customer = $('#customer').val();
		var Branch = $('#branch').val();
		var Username = $('#username').val();
		var Password = $('#password').val();
		var Usergroup = $('#usergroup').val();
		
		$.ajax({
			type : "POST",
			url  : "<?php echo base_url('index.php/Dashboard/save')?>",
			dataType : "JSON",
			data : {
				fname:firstName, 
				lname:lastName, 
				gender:Gender, 
				phone:Phone,
				email:Email,
				package:Package,
				company:Company,
				customer:Customer,
				branch:Branch,
				username:Username,
				password:Password,
				usergroup:Usergroup
				
				},


			success: function(data){
				$('#fname').val("");
				$('#lname').val("");
				$('#gender').val("");
				$('#phone').val("");
				$('#email').val("");
				$('#package').val("");
				$('#company').val("");
				$('#customer').val("");
				$('#branch').val("");
				$('#username').val("");
				$('#password').val("");
				$('#usergroup').val("");
				
				
				$('#addUserModal').modal('hide');
				listData();
			}
		});
		return false;
	});
	// show edit modal form with user data
	$('#listRecords').on('click','.editRecord',function(){   
		$('#editUserModal').modal('show');
		$("#editId").val($(this).data('id'));
		$("#editfname").val($(this).data('fname'));
		$("#editlname").val($(this).data('lname'));
		$("#editgender").val($(this).data('gender'));
		$("#editphone").val($(this).data('phone'));
		$("#editemail").val($(this).data('email'));
		$("#editpackage").val($(this).data('package'));
		$("#editcompany").val($(this).data('company'));
		$("#editcustomer").val($(this).data('customer'));
		$("#editbranch").val($(this).data('branch'));
		$("#editusername").val($(this).data('username'));
		$("#editpassword").val($(this).data('password'));
		$("#editusergroup").val($(this).data('usergroup'));
		
	});
	// save edit record
	 $('#editUserForm').submit('click',function(){
	 	var editId = $('#editId').val();
		var firstName = $('#editfname').val();
		var lastName = $('#editlname').val();
		var Gender = $('#editgender').val();
		var Phone = $('#editphone').val();
		var Email = $('#editemail').val();
		var Package = $('#editpackage').val();
		var Company = $('#editcompany').val();
		var Customer = $('#editcustomer').val();
		var Branch = $('#editbranch').val();
		var Username = $('#editusername').val();
		var Password = $('#editpassword').val();
		var Usergroup = $('#editusergroup').val();
		
		$.ajax({
			type : "POST",
			url  : "<?php echo base_url('index.php/Dashboard/update')?>",
			dataType : "JSON",
			data : {
				id: editId,
				fname:firstName, 
				lname:lastName, 
				gender:Gender, 
				phone:Phone,
				email:Email,
				package:Package,
				company:Company,
				customer:Customer,
				branch:Branch,
				username:Username,
				password:Password,
				usergroup: Usergroup
				
				},
			success: function(data){
				$('#editId').val("");
				$('#editfname').val("");
				$('#editlname').val("");
				$('#editgender').val("");
				$('#editphone').val("");
				$('#editemail').val("");
				$('#editpackage').val("");
				$('#editcompany').val("");
				$('#editcustomer').val("");
				$('#editbranch').val("");
				$('#editusername').val("");
				$('#editpassword').val("");
				$('#editusergroup').val("");
				$('#editUserModal').modal('hide');
				listData();
			}
		});
		return false;
	});
	
	// show delete form
	$('#listRecords').on('click','.deleteRecord',function(){
		var Id = $(this).data('id');            
		$('#deleteUserModal').modal('show');

		// $('#deleteUserId').val(Id);
		deleteUser(Id);
		
	});
	// delete emp record

	function deleteUser(Id)
	{
		$('#deleteUserForm').on('submit',function(){
		// var empId = $('#deleteUserId').val();
		$.ajax({
			type : "POST",
			url  : "<?php echo base_url('index.php/Dashboard/delete')?>",
			dataType : "JSON",  
			data : {id:Id},
			success: function(data){
				$("#"+Id).remove();
				$('#deleteUserId').val("");
				$('#deleteUserModal').modal('hide');
				listData();
			}
		});
			return false;
		});	
	}
	 
});
	
	

</script>

</html>