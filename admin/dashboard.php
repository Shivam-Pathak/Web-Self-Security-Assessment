<?php include('../includes/server.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashbord</title>
</head>
<body>
	<h1>This is Dashboard</h1>
	<?php 
	if (isset($_SESSION['success'])) : ?>
		<div>
			<h3>				
				<?php 
					echo $_SESSION['success'];
					unset($_SESSION['success']);
				?>
			</h3>
		</div>
	<?php endif ?>

		<?php if (isset($_SESSION['username'])) : ?>
			<h3>Welcome <strong><?php echo $_SESSION['username']; ?></strong></h3>
			<button><a href="dashboard.php?logout='1'">Logout</a></button>
		<?php endif ?>
</body>
</html>