<?php
include_once("php/db_connect.php");
session_start();

## logout Section
if (empty($_SESSION['adminID'])) {
}
else{
}

if (isset($_POST['bloodSearch'])) {
    $blood = $_POST["sector"];
    $district = $_POST["donate_zila"];
    $sql ="select * from admin where BloodGroup='".$blood."' and Address='".$district."';";
 }

else{
    $sql ="select * from admin ;";
}

## Details Section

    $result = mysqli_query($link,$sql);
    
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BLOOD BANK</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/fontawesome.min.css">

        <link rel="stylesheet" type="text/css" href="css/search_blood.css">
		<link rel="stylesheet" type="text/css" href="css/search.css">
        <title>Blood Bank</title>
	</head>
	<body>
		
<div class="about-section">
    <div>
    <a class="navbar-brand" href="index.php"><img src="imgs/logo.png" alt="#" /></a>
  
        <?php if (empty($_SESSION['adminID'])) {  ?>
            <a class="serchlog" href="SignIn.php">Log In/Sign Up</a>
        <?php } else{ ?>
            <a class="serchlog" href="logout.php">Logout</a>
        <?php } ?>


    </div>
    <h1 > Blood Search</h1>
</div>

<div class="search_blood" id="search_blood">
    <div class="global-container1">
        <div class="search_form">
            <div class="card-body">

                <form class="" action="" method="POST">

                    <div class="main-box">

                        <div class="form-group">
                            <label>Blood Group</label>
                            <select  type="blood" name="sector" class="form-control form-control-sm" id="inputMail1" >
                                
                                <option>O+</option>
                                <option>O-</option>
                                <option>A+</option>
                                <option>A-</option>
                                <option>B+</option>
                                <option>B-</option>
                                <option>AB+</option>
                                <option>AB-</option>
                            </select>
                        </div>

                        <div class="form-group">               
                            <label>Location</label>
                            <select type="district" name="donate_zila" class="form-control form-control-sm" id="district" >
                                
                                <option value="Dhaka">Dhaka</option>
                                <option value="Faridpur ">Faridpur  </option>
                                <option value="Gazipur">Gazipur</option>
                                <option value="Gopalganj">Gopalganj </option>
                                <option value="Kishoreganj">Kishoreganj</option>
                                <option value="Madaripur ">Madaripur  </option>
                                <option value="Manikganj ">Manikganj </option>
                                <option value="Munshiganj">Munshiganj</option>
                                <option value="Narayanganj ">Narayanganj </option>
                                <option value="Narsingdi">Narsingdi</option>
                                <option value="Rajbari">Rajbari </option>
                                <option value="Shariatpur">Shariatpur </option>
                                <option value="Tangail">Tangail </option>
                                <option value="Chattogram">Chattogram</option>
                                <option value="Bandarban">Bandarban </option>
                                <option value="Brahmanbaria">Brahmanbaria </option>
                                <option value="Chandpur">Chandpur </option>
                                <option value="Cox’s Bazar">Cox’s Bazar </option>
                                <option value="Cumilla">Cumilla</option>
                                <option value="Feni">Feni </option>
                                <option value="Khagrachhari">Khagrachhari</option>
                                <option value="Lakshmipur">Lakshmipur </option>
                                <option value="Noakhali">Noakhali</option>
                                <option value="Rangamati">Rangamati </option>
                                <option value="Rangpur">Rangpur</option>
                                <option value="Dinajpur">Dinajpur</option>
                                <option value="Thakurgaon">Thakurgaon</option>
                                <option value="Panchagarh">Panchagarh</option>
                                <option value="Nilphamari ">Nilphamari </option>
                                <option value="Lalmonirhat">Lalmonirhat </option>
                                <option value="Kurigram">Kurigram</option>
                                <option value="Gaibandha">Gaibandha</option>
                                <option value="Barisha">Barisha</option>
                                <option value="Barguna">Barguna </option>
                                <option value="Bhola">Bhola </option>
                                <option value="Jhalokati">Jhalokati</option>
                                <option value="Patuakhali ">Patuakhali  </option>
                                <option value="Pirojpur">Pirojpur </option>
                                <option value="Khulna">Khulna</option>
                                <option value="Bagerhat">Bagerhat </option>
                                <option value="Chuadanga">Chuadanga </option>
                                <option value="Jashore">Jashore </option>
                                <option value="Jhenaidah">Jhenaidah </option>
                                <option value="Kushtia">Kushtia </option>
                                <option value="Magura">Magura </option>
                                <option value="Meherpur">Meherpur </option>
                                <option value="Narail">Narail</option>
                                <option value="Satkhira">Satkhira </option>
                                <option value="Mymensingh">Mymensingh           *   * </option>
                                <option value="Jamalpur">Jamalpur</option>
                                <option value="Netrokona">Netrokona </option>
                                <option value="Sherpur">Sherpur</option>
                                <option value="Rajshahi ">Rajshahi         *    *  </option>
                                <option value="Bogura">Bogura </option>
                                <option value="Joypurhat">Joypurhat </option>
                                <option value="Naogaon">Naogaon </option>
                                <option value="Natore">Natore</option>
                                <option value="Chapainawabganj">Chapainawabganj </option>
                                <option value="Pabna">Pabna</option>
                                <option value="Sirajganj">Sirajganj</option>
                                
                                <option value="Sylhet">Sylhet           *   * </option>
                                <option value="Sunamganj">Sunamganj </option>
                                <option value="Moulvibazar">Moulvibazar</option>
                                <option value="Habiganj">Habiganj </option>
                                
                                
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block" name="bloodSearch">Search</button>

                    </div>

                </form>
                
            </div>

        </div>

    </div>
</div>

<?php
if (empty($_SESSION['adminID'])) {
?>

    <div class="row">
        <?php
            while ($data1=mysqli_fetch_assoc($result)) {
                $datee = date('d M Y' , strtotime($data1['Brithday']));
                echo "
                <div class='column'>
                <div class='card'>
                <div class='container'>
                    <h2 >{$data1['FirstName']} {$data1['LastName']}</h2>
                    <p>Gender: {$data1['Gender']}</p>
                    <p>Blood Type: {$data1['BloodGroup']}</p>              
                    <p>District: {$data1['Address']}</p>
                    <p>Nationality: {$data1['Nationality']}</p>
                    <p><button class='button'>Previous Donation: {$data1['PreviousDonation']} Times</button></p>
                </div>
                </div>
                </div>";
            }
        ?>
    </div>

<?php
}else{
?>

    <div class="row">
        <?php
        while ($data1=mysqli_fetch_assoc($result)) {
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

<?php } ?>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>