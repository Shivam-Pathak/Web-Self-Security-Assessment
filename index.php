<?php 	include_once "includes/functions.php";	?>
<!DOCTYPE html>
<html>
<head>  
	<title>WSSA</title>
	<link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style/style.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" type="text/css" href="style/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">
 </head>
<body>
	<?php 	include_once "admin/navbar.php"; ?>
	<?php 	add_jumbotron(); ?>
	<?php 	include_once "admin/mid.php"; ?>
	<div class="blank-space"></div>
	<?php 	include_once "admin/team.php"; ?>
	<div class="blank-space"></div>
	<?php 	include_once "admin/contact.php"; ?>
	<div class="blank-space-half"></div>
	<?php 	include_once "admin/footer.php"; ?>
	<script src="https://kit.fontawesome.com/7ff8760b8e.js" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scrool.js"></script>
</body>
</html>