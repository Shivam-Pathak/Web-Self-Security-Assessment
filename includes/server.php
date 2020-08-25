<?php
session_start();

//initialising variable
$username = "";
$email = "";
$errors = array();
$conn = mysqli_connect("localhost", "root", "", "webcrawler") or die("could not connect to Database");	//connect to DataBase

//Register users
if(isset($_POST['reg_user'])){
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
	$password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);
	//Ensure that the fields are filled properly
	if(empty($username)){ 
		array_push($errors,"Username is required");	
	}
	if(empty($email)){ 
		array_push($errors,"Email is required");	
	}
	if(empty($password_1)){ 
		array_push($errors,"Password is required");	
	}
	if($password_1 != $password_2){
		array_push($errors,"The password do not match");
		}
	//If there are no erroes then save user to database
	if(count($errors) == 0){
		$user_check_query ="SELECT * FROM user WHERE username = '$username' or email = '$email' LIMIT 1";
		$result = mysqli_query($conn,$user_check_query);
		$user = mysqli_fetch_assoc($result);
		if($user){ // if user exist 
			if($user['username'] === $username){
				array_push($errors, "Username already exist");
			}
			if($user['email'] === $email){
				array_push($errors, "The Email Id has a already registered Username");
			} 
		}
	// Register the user if no error
	if(count($errors) == 0){
		$password = md5($password_1);
		$sql = "INSERT INTO user (username,email,password) 
						VALUES ('$username','$email','$password')";
		mysqli_query($conn,$sql);
		$_SESSION['username'] = $username;
		$_SESSION['success'] = "you are now logged in";
		header('location: dashboard.php');
		}
	}
}
//login user
if(isset($_POST['login'])){
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	if(empty($username)){
		array_push($errors, "Username is required");
	}
	if(empty($password)){
		array_push($errors, "Password is required");
	}
	if(count($errors) == 0){
		$password = md5($password);
		$query = "SELECT * FROM user WHERE username = '$username' AND password = '$password' ";
		$result = mysqli_query($conn,$query);
		if(mysqli_num_rows($result) == 1){	
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "Logged in Successfully";
			header('location: dashboard.php');
			}else{
				array_push($errors, "Wrong Username / Password Combination Please try Again.");
			}
		}
	}

//logout
 if(isset($_GET['logout'])){
 	session_destroy();
 	unset($_SESSION['username']);
 	header('location: login.php');
 }
 ?> 