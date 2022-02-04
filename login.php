<?php session_start(); 
include_once ("dbconnect.php");  

        ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
 <h2 style="font-size: 50px; text-align: center; background-color: #f60; color: #fff; border-radius: 5px;">LOGIN...</h2>
 <hr>
			 <center>
			 	<form action="#" method="post">
			 	<input type="text" name="user" placeholder="Type Username"><br/><br/>
			 	<input type="password" name="pass" placeholder="Type New Password"><br/>
			 	<input type="submit" name="login" value="submit"><br>

			 	<hr>
			 <p style="text-align: left; color: #ccc;"><a href="signup.php" style="padding: 5px; background-color: #f90; color: #fff; text-decoration: none; border-radius: 3px;">signup</a></p>
			 </form>
			</center>

			 <?php
			 	if(isset($_POST["login"])){
			 		$user = $_POST["user"];
			 		$pass = $_POST["pass"];


			 		$pass2 = md5($pass);
			 		$checkuser = "SELECT * FROM signup WHERE email = '$user' AND password = '$pass2' LIMIT 1";
			 		$qcheck = mysqli_query($conn, $checkuser);
			 		$rows = mysqli_num_rows($qcheck);
			 		

			 			if($user == "" && $pass == ""){
			 				echo "please fill in all requirements";
			 			}
			 			else{
			 				if($rows > 0){
			 				
			 				$_SESSION["user"] = $user;
							$_SESSION["pass"] = $pass;

			 			header("Location: courses.php");
			 			}
			 			else{
			 			echo "<p style='color:#f00;'>Invalid login parameters</p>";
			 			}
			 		}
			 	}

			 ?>
</body>
</html>