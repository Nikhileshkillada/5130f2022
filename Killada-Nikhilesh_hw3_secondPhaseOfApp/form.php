<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "temp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['save'])){
  $f_name= $_POST['fullname'];
  $l_name= $_POST['currentlocation'];
  $n_name= $_POST['nativeplace'];
  $fa_name= $_POST['favouriteplace'];
  $y_name= $_POST['Yourhobbies'];
  $p_birth= $_POST['PlaceofBirth'];
  $e_name= $_POST['email'];
  $ph_num= $_POST['phone'];
  $me_ssage= $_POST['message1'];
  $insert_que ="INSERT INTO form (full_name,location_name,nativeplace,favouriteplace,yourhobbies,placeofbirth,email,phone,message1)
  VALUES ('$f_name','$l_name','$n_name','$fa_name','$y_name','$p_birth','$e_name','$ph_num','$me_ssage')";
  if ($conn->query($insert_que) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $insert_que . "<br>" . $conn->error;
  }
}

?>



<html>
<title>Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>

<form method="POST" class="w3-container w3-card-4 w3-light w3-text-black w3-margin">
<h2 class="w3-center">fill in the form</h2>
 
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border full_name" name="fullname" type="text" placeholder="Full name" id="full_name">
    </div>
</div>
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border location_name" name="currentlocation" type="text" placeholder="Current Location" id="location_name">
    </div>
</div>
<div class="w3-row w3-section">
    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-location-arrow"></i></div>
      <div class="w3-rest">
        <input class="w3-input w3-border nativeplace" name="nativeplace" type="text" placeholder="Native Place">
      </div>
  </div>
  <div class="w3-row w3-section">
    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-location-arrow"></i></div>
      <div class="w3-rest">
        <input class="w3-input w3-border favouriteplace" name="favouriteplace" type="text" placeholder="Favourite Place">
      </div>
  </div>
</div>
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-music"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border Yourhobbies" name="Yourhobbies" type="text" placeholder="Your Hobbies">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-location-arrow"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border PlaceofBirth" name="PlaceofBirth" type="text" placeholder="Place of Birth">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border email" name="email" type="email" placeholder="Your Email">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border phone" name="phone" type="number" placeholder="Your contact number">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border message1" name="message1" type="text" placeholder="Message">
    </div>
</div>

<p class="w3-center">
<button class="w3-button w3-section w3-blue w3-ripple" name="save" id="save" type="submit"> Send </button>
</p>
</form>

</body>
</html> 

