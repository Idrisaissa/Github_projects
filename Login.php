<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="fontawesome-free-5.14.0-web/css/all.css">	
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
	<title>Login</title>
<style>
	body{
		background: url("Images/background3.jpg");
		background-repeat: no-repeat;
		background-attachment: 1000%;
		background-size: 100%

	}
</style>
</head>
<body >
<div class="row">
	<div class="col-lg-5 m-auto">
		<div class="card mt-5 bg-dark">
		
		   <div class="card-title text-center mt-3">
				<img src="Images/login3.jpg" width="150px" height="150px">
		  </div>
		  <div class="card-body">
		  <form method="post" action="Home.php">
		  	<div class="input-group mb-3">
		  		<div class="input-group-prepend">
		  			<span class="input-group-text">
		  				<i class="fas fa-user fa-2x"></i>
		  			</span>

		  		</div>
		  		<input type="text" name="" class="form-control py-4" placeholder="User name">
		  	</div>
		  	<div class="input-group mb-3">
		  		<div class="input-group-prepend">
		  			<span class="input-group-text">
		  				<i class="fas fa-lock fa-2x"></i>
		  			</span>

		  		</div>
		  		<input type="text" name="" class="form-control py-4" placeholder="Password">
		  	</div>
		  	<button class="btn btn-primary">Login Now</button>
		  	 <p class="float-right text-white"><input type="checkbox" name="">Remember Me</p>
		  </form>
		  	
		  </div>
		</div>
		
	</div>
</div>


</body>
</html>