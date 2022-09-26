<?php
include_once("php/db_connect.php");
session_start();

//if (empty($_SESSION['adminID'])) {
	if (isset($_POST['signUpButton'])) {
		$F_name = $_POST['f_name'];
		$L_name = $_POST['l_name'];
		$Email = $_POST['email'];
		$Password = $_POST['password'];
		$C_password = $_POST['c_password'];
		$Weight = $_POST['weight'];
		
		$Previous_donation = $_POST['previousDonation'];
		$Nationality = $_POST['nationality'];
		$City = $_POST['city'];
		$Phone_n = $_POST['phone_n'];
		$Additional_phone_n = $_POST['additional_phone_n'];
		$Date = $_POST['date'];
		$newDate = date("Y-m-d", strtotime($Date));
		$Blood_type = $_POST['bloodType'];

		$Gender = isset($_POST["gender"]);
		if($Gender == 0)
		{
			$FGender = 'Male';
		}else if($Gender == 1)
		{
			$FGender = 'Female';
		}else{
			$FGender = 'Others';
		}

  		$sql = "INSERT INTO `admin` (`FirstName`, `LastName`, `Email`, `Password`, `Weight`, `Gender`, `Nationality`, `Address`, `PhoneNumber`,
		   `AdditionalPhoneNumber`, `Brithday`, `BloodGroup`, `PreviousDonation`)  VALUES ('".$F_name."', '".$L_name."', '".$Email."',
		    '".$Password."', '".$Weight."', '".$FGender."', '".$Nationality."', '".$City."', '".$Phone_n."', '".$Additional_phone_n."',
			 '".$newDate."', '".$Blood_type."', '".$Previous_donation."');";
		$result = mysqli_query($link,$sql);
	}
//}
//else {
//  header("location:home.php");
//}

?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<!-- <link rel="stylesheet" type="text/css" href="style_login.css"> -->
		<link rel="stylesheet" type="text/css" href="css/style_signup.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
		<!-- <link rel="stylesheet" type="text/css" href="blood/bootstrap.min.css"> -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
		<title>Blood Bank</title>
	</head>
	<body>
		<div class="global-container">
			<div class="card signup-form">
				<div class="card-body">
					<h1 class="card-title text-center">Sign Up</h1>
					<div class="card-text">
						<form class="" action="" method="POST">
							<div class="main-box">
								<div class="left-side" >
									<div class="form-group">
										<label for="inputName1">First Name</label>
										<input type="text" placeholder="First Name" name="f_name" class="form-control form-control-sm" id="inputMail1"  />
									</div>
									<div class="form-group">
										<label for="inputName1">Last Name</label>
										<input type="text" placeholder="Last Name" name="l_name" class="form-control form-control-sm" id="inputMail1"  />
									</div>
									<div class="form-group">
										<label for="inputMail1">Email Address *</label>
										<input type="email" placeholder="Enter Email" name="email" class="form-control form-control-sm" id="inputMail1"  />
									</div>
									<div class="form-group">
										<label for="inputPassword1">Password</label>
										<input type="password" placeholder="Enter Password" name="password" class="form-control form-control-sm" id="inputPassword1"  />
									</div>
									<div class="form-group">
										<label for="inputPassword1">Confirm Password</label>
										<input type="password" placeholder="Enter Confirm Password" name="c_password" class="form-control form-control-sm" id="inputPassword1"  />
									</div>

									<div class="form-group">
										<label for="inputName1">Weight</label>
										<input type="number" placeholder="Weight (KG)" name="weight" class="form-control form-control-sm" id="inputMail1" />
									</div>

									<div class="form-group">
										<label>Gender</label>
										<div>
											<input type="radio" name="gender" value="Male"> <big>Male</big>
											<input type="radio" name="gender" value="FeMale"><big>Female</big>
											<input type="radio" name="gender" value="others"><big>Others</big>
										</div>
									</div>
								</div>

								<div class="right-side">
									
									<div class="form-group">
										<label for="inputName1">No of Previous Donation</label>
										<input type="number" placeholder="No of Previous Donation" name="previousDonation" class="form-control form-control-sm" id="inputMail1" />
									</div>
									<div class="form-group">
										<label for="inputName1">Nationality</label>
										<input type="text" placeholder="Nationality" name="nationality" class="form-control form-control-sm" id="inputMail1"  />
									</div>
									<div class="form-group">
										<label for="inputName1">District,Upazila</label>
										<input type="text" placeholder="District,Upazila"class="form-control form-control-sm" id="inputMail1" name="city"  />
									</div>
									<div class="form-group">
										<label for="inputName1">Phone Number</label>
										<input type="tel" placeholder="Phone Number" name="phone_n" class="form-control form-control-sm" id="inputMail1" />
									</div>
									<div class="form-group">
										<label for="inputName1">Additional Phone Number</label>
										<input type="tel" placeholder="Additional Phone Number" name="additional_phone_n" class="form-control form-control-sm" id="inputMail1" />
									</div>
									<div class="form-group">
										<label for="inputName1">Date Of Birth</label>
										<input type="Date" name="date" class="form-control form-control-sm" id="inputMail1"  />
									</div>
									<!--Blood Group  -->
									<div >
										<div class="form-group">
											<label>Blood Group</label>
											
											<select  type="blood" name="bloodType" class="form-control form-control-sm" id="inputMail1" >
												
												<option >O+</option>
												<option>O-</option>
												<option>A+</option>
												<option>A-</option>
												<option>B+</option>
												<option>B-</option>
												<option>AB+</option>
												<option>AB-</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<button type="submit" class="btn btn-primary btn-block" name="signUpButton">Submit</button>
							
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>