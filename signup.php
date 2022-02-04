<?php include_once("dbconnect.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Please fill in your information to signup</h1>
<hr>
<form method="post" action="#">
	<input type="text" name="fname" placeholder="First Name"><br/>
	<input type="text" name="sname" placeholder="Surname Name"><br/>
	<input type="email" name="email" placeholder="Email Address"><br/>
	<input type="text" name="phone" placeholder="Phone Number"><br/>
	Male <input type="radio" name="gender" value="Male"> 
	Female <input type="radio" name="gender" value="Female"><br/>
	<input type="password" name="pass" placeholder="Password"><br/>
	<input type="password" name="cpass" placeholder="Confirm Password"><br/>
	<hr>
	<input type="submit" name="send" value="Complete Registration">

</form>
<p style="text-align: center; color: #ccc;"><a href="login.php" style="padding: 5px; background-color: #f90; color: #fff; text-decoration: none; border-radius: 3px;">home</a></p>
	<hr/>
	<!--this inport the php logical file to be processed on the page-->
	<?php include_once("prosignup.php"); ?>
</body>
</html>