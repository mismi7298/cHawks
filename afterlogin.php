<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>CodePen - Login Form</title>

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
	top: -10px;
	left: -10px;
	right: -10px;
	bottom: -10px;
	width: auto;
	height: auto;
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
	height: auto;
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
	z-index: 1;
	opacity: 0.7;
}

.header{
	position: absolute;
	top: calc(40% - 35px);
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

.login{
	position: absolute;
	top: calc(30% - 75px);
	left: calc(50% - 50px);
	height: 150px;
	width: 350px;
	padding: 10px;
	z-index: 2;
}

.login input[type=text]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #000;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
}

.login input[type=password]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #000;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
	margin-top: 10px;
}

.login input[type=submit]{
	width: 260px;
	height: 35px;
	background: #fff;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: #a18d6c;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;
}

.login input[type=submit]:hover{
	opacity: 0.8;
}

.login input[type=submit]:active{
	opacity: 0.6;
}
.login input[type=button]{
	width: 260px;
	height: 35px;
	background: #FF00F0;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: #000;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;
}

.login input[type=button]:hover{
	opacity: 0.8;
}

.login input[type=button]:active{
	opacity: 0.6;
}
.login input[type=text]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=password]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=submit]:focus{
	outline: none;
}
.login input[type=button]:focus{
	outline: none;
}

::-webkit-input-placeholder{
   color: rgba(255,255,255,0.6);
}

::-moz-input-placeholder{
   color: rgba(255,255,255,0.6);
}
</style>

    <script src="js/prefixfree.min.js"></script>

</head>

<body>

  <div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div style="color: #D2691E"><span1> <b>E-WALLET </b> <br> </span1> <span> <b> <i> WAALE</i> </b> </span> </div>
		</div>
		<br>
		<div class="login">
			<p style="color: #0000FF"><b><font size="5">SUBSCRIPTION TYPE</font></b></p><br>
			<label style="color: #000"><input type="radio" name="radio" checked=""><i></i><font size="3">$5 MONTHLY</font></label><br> 
			<label style="color: #000"><input type="radio" name="radio" checked=""><i></i><font size="3">$55 YEARLY</font></label> ><br><br><br>
			<p style="color: #0000FF"><b><font size="5">TYPE OF E-WALLET</font></b></p><br>
			<label style="color: #000"><input type="radio" name="radio1"><i></i><font size="3">PAYTM</font></label><br>
			<label style="color: #000"><input type="radio" name="radio1"><i></i><font size="3">MOBIKWIK</font></label><br> 
			<label style="color: #000"><input type="radio" name="radio1"><i></i><font size="3">PHONE PE</font></label><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<input type="checkbox"  id="brand" value="">
			<label for="brand" style="color: #000"><span></span>I agree to the Terms & Conditions & Privacy Policy.</label>
			<a href="paymentgateway.php"> 			
			<input type="button" value="LOAD CASH"> </a><br>		

</body>

</html>