<?php
include_once("php/db_connect.php");
session_start();
if (empty($_SESSION['adminID'])) {
    header("location:Admin_Login.php");
}
else{

    $sql ="select * from website_admin where ID='".$_SESSION['adminID']."';";
		$result = mysqli_query($link,$sql);

    $sql1 ="select * from admin;";
		$result1 = mysqli_query($link,$sql1);

    if (isset($_POST['logout'])){
        session_destroy();
        header("location:Admin_Login.php");
     }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/home.css">
        <title>Blood Bank</title>
	</head>
	<body>
		
<div class="about-section">
    <img src="person.png" alt="" height="100px">
    <?php
        if ($data= mysqli_fetch_assoc($result)) {
    ?>

    <h1> <?php echo $data['Name']; ?> </h1>
    <p><?php echo $data['Email']; ?> </p>

    <?php } ?>
  <form class="" action="" method="POST">
    <button type="submit" class="button1" name="logout">Logout</button>
  </form>
</div>


<div class="row">

    <?php
        while ($data1=mysqli_fetch_assoc($result1)) {
            $datee = date('d M Y' , strtotime($data1['Brithday']));
            echo "
            <div class='column'>
            <div class='card'>
              <div class='container'>
                <h2 >{$data1['FirstName']} {$data1['LastName']}</h2>
                <p class='title'>{$data1['Email']}</p>
                <p>Gender: {$data1['Gender']}</p>
                <p>Weight: {$data1['Weight']} Kg</p>  
                <p>Blood Type: {$data1['BloodGroup']}</p>              
                <p>Birth Date: {$datee}</p>
            
                <p>Nationality: {$data1['Nationality']}</p>
                <p>Address: {$data1['Address']}</p>
                <p>First Phone Number: {$data1['PhoneNumber']}</p>
                <p>Second Phone Number: {$data1['AdditionalPhoneNumber']}</p>
                <p><button class='button'>Previous Donation: {$data1['PreviousDonation']} Times</button></p>
              </div>
            </div>
            </div>";
        }
        ?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>