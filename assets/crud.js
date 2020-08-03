
$(document).ready(function(){
	listData();
	var table = $('#userListing').dataTable({     
		"bPaginate": false,
		"bInfo": false,
		"bFilter": false,
		"bLengthChange": false,
		"pageLength": 5		
	}); 
	function listData(){
		$.ajax({
			type:'ajax',
			url:'Dahboard/index',
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
							'<td style="text-align:right;">'+
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
			url  : "Dashboard/save",
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
	// show edit modal form with emp data
	$('#listRecords').on('click','.editRecord',function(){
		$('#editUserModal').modal('show');
		$("#Id").val($(this).data('id'));
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
	 $('#edituserForm').on('submit',function(){
		var fname = $('#editfname').val();
		var lname = $('#editlname').val();
		var gender = $('#editgender').val();
		var phone = $('#editphone').val();
		var package = $('#editpackage').val();
		var company = $('#editcompany').val();
		var customer = $('#editcustomer').val();
		var branch = $('#editbranch').val();
		var username = $('#editusername').val();
		var password = $('#editpassword').val();
		var usergroup = $('#editusergroup').val();
		
		$.ajax({
			type : "POST",
			url  : "Dashboard/update",
			dataType : "JSON",
			data : {
				fname:fname, 
				lname:lname, 
				gender:gender, 
				phone:phone,
				email:email,
				package:package,
				company:company,
				customer:customer,
				branch:branch,
				username:username,
				password:password,
				usergroup:usergroup
				
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
				$('#editEmpModal').modal('hide');
				listData();
			}
		});
		return false;
	});
	
	// show delete form
	$('#listRecords').on('click','.deleteRecord',function(){
		var Id = $(this).data('id');            
		$('#deleteUserModal').modal('show');
		$('#deleteUserId').val(Id);
	});
	// delete emp record
	 $('#deleteUserForm').on('submit',function(){
		var empId = $('#deleteUserId').val();
		$.ajax({
			type : "POST",
			url  : "Dashboard/delete",
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
})
	
	
