<?php include('../includes/server.php') ?> 

<!doctype html>
<html lang="en">
  <head>
    <title>Login</title>
	<link href="../style/bootstrap.min.css" rel="stylesheet">
    <link href="../style/floating-lables.css" rel="stylesheet">
  </head>
   <body>
	    <form action="login.php" class="form-signin" method="post">

	    	<?php include('../includes/errors.php') ?>

		  <div class="text-center mb-4">
		    <h1 class="h3 mb-3 font-weight-normal">Login</h1>
		  </div>

		  <div class="form-label-group">
		    <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
		    <label for="inputName">Username</label>
		  </div>

		  <div class="form-label-group">
		    <input type="password" name="password" class="form-control" placeholder="Password" required>
		    <label for="inputPassword">Password</label>
		  </div>

		  <div class="checkbox mb-3">
		    <label>
		      <input type="checkbox" value="remember-me"> Remember me
		    </label>
		  </div>

		  <button class="btn btn-lg btn-primary btn-block" name="login" type="submit">Login</button>
		  <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2019</p>
		</form>
	<script src="../js/jquery.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/scroll.js"></script>
	</body>
</html>
