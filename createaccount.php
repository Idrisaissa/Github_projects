<?php

include("insertintoaccount.php");



?>




<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="fontawesome-free-5.14.0-web/css/all.css">	
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
	<title>Create account</title>
	<style>
	body{
		background: url("Images/background3.jpg");
		background-repeat: no-repeat;
		background-attachment: 1000%;
		background-size: 100%

	}
</style>
</head>
<body>
	<div class="row">
		<div class="col-lg-8 m-auto" >
			<div class="card mt-5 bg-dark">
				<div class="card-title mt-3 text-center text-white " ><h3>Create account</h3></div>
				<div class="card-body">
				<form method="post" action="">
					<div class="row">
						<div class="col">
						<label for="Fname" class="text-white">First Name</label>
						<input type="text" name="Fname" placeholder="Enter Your First Name" class="form-control" required>
						</div>
						<div class="col">
						<label for="Lname" class="text-white">Last Name</label>
						<input type="text" name="Lname" placeholder="Enter Your Last Name" class="form-control" required>
						</div>
					</div>	
					<div class="row">
						<div class="col">
						<label for="pswd" class="text-white">Password</label>
						<input type="text" name="Password" placeholder="Enter Your First Password" class="form-control" required>
						</div>
						<div class="col">
						<label for="Email" class="text-white">Email</label>
						<input type="text" name="Email" placeholder="Enter Your Email" class="form-control" required>
						</div>
						
					</div>
					
					<div class="row">
						<div class="col">
						<label for="Gender" class="text-white">Gender</label>
						<select class="form-control" name="Gender" Placeholder="Select Your Gender">
							<option value="null">Select your gender</option>
							<option>Male</option>
							<option>Female</option>
						</select>
							
						</div>
						<div class="col">
							<label for="Role" class="text-white">Role</label>
						<select class="form-control" name="Role" Placeholder="Select Your Role">
							<option value="null">Select your Role</option>
							<option>Admin</option>
							<option>Customer</option>
						</select>
							
						</div>
					</div>
					<br><div class="row">
						<div class="col">
						<button class="btn btn-primary btn-centre form-control" type="submit" name="Submit">Submit</button>	
						</div>
					</div>	
						
					
				</form>>
					
				</div>
					
				</div>

				
			
			
		</div>
    </div>
</body>
</html>