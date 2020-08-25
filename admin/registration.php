<?php include('../includes/server.php') ?>  

<!DOCTYPE html>  
<html lang="en">
	<head>
		<title>Registeration</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../style/bootstrap.min.css">
		<link href="../style/floating-lables.css?v=<?php echo time();?>" rel="stylesheet">
  </head>
   <body>
	    <form action="registration.php" class="form-signin" method="post">

	    	<?php include('../includes/errors.php') ?> 

		  <div class="text-center mb-4">
		    <h1 class="h3 mb-3 font-weight-normal">Registration</h1>
		  </div>

		  <div class="form-label-group">
		  	<input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
		    <label for="inputName">Enter Username</label>
		  </div>

		  <div class="form-label-group">
		  	<input type="email" name="email" class="form-control" placeholder="Email address" required autofocus>
		    <label for="inputEmail">Email address</label>
		  </div>

		  <div class="form-label-group">
		    <input type="password" name="password_1" class="form-control" placeholder="Password" required>
		    <label for="inputPassword">Password</label>
		  </div>

		  <div class="form-label-group">
		    <input type="password" name="password_2" class="form-control" placeholder="Password" required>
		    <label for="inputPassword">Confirm Password</label>
		  </div>

		  <button class="btn btn-lg btn-primary btn-block" name="reg_user" type="submit">Sign in</button>
		  <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2019</p>
		</form>
	<script src="../js/jquery.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/scroll.js"></script>
	</body>
</html>