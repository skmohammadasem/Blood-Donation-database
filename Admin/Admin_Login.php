<?php
include_once("php/db_connect.php");
session_start();

if (empty($_SESSION['adminID'])) {
	if (isset($_POST['website_admin'])) {
		$sql ="select ID from website_admin where Email='".$_POST['Email']."' and Password='".$_POST['Password']."';";
		$result = mysqli_query($link,$sql);
		if ($data= mysqli_fetch_assoc($result)) {
			$_SESSION['adminID']=$data['ID'];
			header("location:Admin_home.php");
		}
		else{
			
		}
	}
}

else {
  header("location:Admin_home.php");
}

 ?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/style_login.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
		<title>Blood Bank</title>
	</head>
	<body>
		<div class="global-container">
			<div class="card login-form">
				<div class="card-body">
					<h1 class="card-title text-center">LogIn</h1>
					<div class="card-text">
						<form class="" action="" method="POST">
							<div class="form-group">
								<label for="inputMail1">Email Address</label>
								<input type="email" name="Email" placeholder="Enter Email" class="form-control form-control-sm" id="inputMail1"/>
							</div>
							<div class="form-group">
								<label for="inputPassword1">Password</label>
								<a href="#" style="float: right;font-size: 12px;">Forgot Password?</a>
								<input type="password" name="Password" placeholder="Enter Password"class="form-control form-control-sm" id="inputPassword1"/>
							</div>
							<button type="submit" class="btn btn-primary btn-block"  name="website_admin">Sign In</button>
						</form>
					</div>
					
				</div>
			</div>
		</body>
	</html>