<?php session_start();
		include_once ("dbconnect.php");

     $user = $_SESSION['user'];

     $fetch = "SELECT * FROM signup WHERE email = '$user' LIMIT 1";
     $qfetch = mysqli_query($conn, $fetch);

     $fetcha = mysqli_fetch_array($qfetch);

     ?>


<?php include_once("authentic.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>User Account</title>
</head>
<body>
<p style="text-align: right; color: #ccc;"><a href="logout.php" style="padding: 5px; background-color: #f90; color: #fff; text-decoration: none; border-radius: 3px;">Logout</a></p>
<h2 style="font-size: 50px; text-align: center; background-color: #f60; color: #fff; border-radius: 5px;">Login Successful
<br/>
Welcome <?php echo $fetcha['fname']." ".$fetcha['sname']; ?></h2>

		
 	<hr>
 	
 	Username: <?php echo $_SESSION["user"]; ?><br/>
 	Password: <?php echo $_SESSION["pass"]; ?></p>
</body>
</html>