<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Signup Page</title>

    <style>
@import url(http://fonts.googleapis.com/css?family=Exo:100,200,400);
@import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);

body{
	margin: 0;
	padding: 0;
	background: #fff;
	color: #fff;
	font-family: Arial;
	font-size: 12px;
	
}

.body{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: 150%;
	background-image: url(http://hdwallpapersbuzz.com/wp-content/uploads/2017/02/incredible-india-wallpapers-free-download-images-37.jpg);
	background-size: cover;
	-webkit-filter: blur(2px);
	z-index: 0;
}

.grad{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: 150%;
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65)));  /* Chrome,Safari4+ */
	z-index: 1;
	opacity: 0.7;
}

.header{
	position: absolute;
	top: calc(50% - 35px);
	left: calc(50% - 255px);
	z-index: 2;
}

.header div{
	float: left;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 35px;
	font-weight: 200;
}

.header div span{
	color: #5379fa !important;
}
.header div span1 {
	color: #368131 !important;
}

.signup{
	position: absolute;
	top: calc(30% - 75px);
	left: calc(50% - 50px);
	height: 150px;
	width: 350px;
	padding: 10px;
	z-index: 2;
}

.signup input[type=text]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
}

.signup input[type=file]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
}
.signup input[type=password]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
	margin-top: 10px;
}

.signup input[type=button]{
	width: 260px;
	height: 35px;
	background: #fff;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: black ;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;
}

.signup input[type=textarea]{
	width: 260px;
	height: 35px;
	background: black;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: black ;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;
}
.signup input[type=submit]{
	width: 260px;
	height: 35px;
	background: #fff;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: black;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;
}
.signup input[type=button]:hover{
	opacity: 0.8;
}

.signup input[type=button]:active{
	opacity: 0.6;
}
.signup input[type=submit]:hover{
	opacity: 0.8;
}

.signup input[type=submit]:active{
	opacity: 0.6;
}
.signup input[type=text]:focus{
	outline: none;
	border: 1px solid white;
}

.signup input[type=file]:focus{
	outline: none;
	border: 1px solid white;
}

.signup input[type=password]:focus{
	outline: none;
	border: 1px solid white;
}

.signup input[type=button]:focus{
	outline: none;
}
.signup input[type=submit]:focus{
	outline: none;
}
::-webkit-input-placeholder{
   color: black;
}

::-moz-input-placeholder{
   color: black;
}

</style>

    <script src="js/prefixfree.min.js"></script>

</head>

<body>
<basefont color="white">
  <div class="body"></div>
		<div class="grad"></div>
		<div class="header">
		<div> <span1> <b>Indian </b> <br> </span1> <span> <b> <i> e-wallet </i> </b> </span></div>
		</div>
		<br>
		<div class="signup">
			<form action="thankyou.php" method="post">
				<input type="text" placeholder="Name" name="name" required> <br> <br>
				
				<input type="text" placeholder="email" name="email" required> <br> <br>
				
				<input type="text" placeholder="Mobile Number" name="number" required> <br> <br>
				
				<input type="text" placeholder="Gender" name="gender" required> <br> <br>
	
			    <input type="text" placeholder="Country" name="country" required> <br> <br>
				
				<input type="text" placeholder="Date of Birth (YYYY/MM/DD)" name="dob" required> <br> <br>
				
				<input type="password" placeholder="Password" name="password" required> <br> <br>
				
				<input type="password" placeholder="Confirm Password" name="confirmpassword" required> <br> <br>
				
				<input type="text" placeholder="VISA No." name="visa" required> <br> <br>
				
				<font color="black">Select Image of your VISA: <br>
				
				<input type="file" name="img" required><br><br>
				<div class="textarea">			
				<textarea rows="5" cols="32" placeholder="Enter your Complete Address" name="address"></textarea>
				</div>
				</font>
				 <input type="submit" value="Signup">  <br>
				
				<br>
				<br>
			</form>
		</div>

  <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
</basefont>
</body>

</html>