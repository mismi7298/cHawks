<!-- Add icon library -->
<style> 
.buttonload {
    background-color: white; /* Green background */
    border: none; /* Remove borders */
    color: red; /* red text */
    padding: 12px 16px; /* Some padding */
    font-size: 40px /* Set a font size */
	
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Add font awesome icons to buttons (note that the fa-spin class rotates the icon) -->
<center>

<button class="buttonload">
  <i class="fa fa-spinner fa-spin"></i>Loading
</button>
<center>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<font size=10>
<?php
	require 'connection.php';
	$conn = Connect();
	$name = $conn->real_escape_string($_POST['name']);
	$email = $conn->real_escape_string($_POST['email']);
	$number = $conn->real_escape_string($_POST['number']);
	$gender = $conn->real_escape_string($_POST['gender']);
	$country = $conn->real_escape_string($_POST['country']);
	$dob = $conn->real_escape_string($_POST['dob']);
	$password = $conn->real_escape_string($_POST['password']);
	$confirmpassword = $conn->real_escape_string($_POST['confirmpassword']);
	$visa = $conn->real_escape_string($_POST['visa']);
	$img = $conn->real_escape_string($_POST['img']);
	$address = $conn->real_escape_string($_POST['address']);
	$query = "INSERT into userrecord (name,email,number,gender,country,dob,password,confirmpassword,visa,img,address) VALUES('".$name."','".$email."','".$number."','".$gender."','".$country."','".$dob."','".$password."','".$confirmpassword."','".$visa."','".$img."','".$address."')";
	$success =$conn->query($query);
	
	
	
	if(!$success){
		die("Couldn't enter data: ".$conn->error);
		
	}
	
	echo "<center>Thank You For Contacting Us <br></center>";
	header( "refresh:2;url=index.php" ); 
	
	$conn->close();

?>
</font>