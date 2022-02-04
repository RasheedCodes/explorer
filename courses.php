<?php session_start();
		include_once ("dbconnect.php");
		include_once("coursespro.php");

     $user = $_SESSION['user'];

     $fetch = "SELECT * FROM signup WHERE email = '$user' LIMIT 1";
     $qfetch = mysqli_query($conn, $fetch);

     $fetcha = mysqli_fetch_array($qfetch);

     ?>


<?php include_once("authentic.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>course registration</title>
</head>
<body>
<p style="text-align: right; color: #ccc;"><a href="logout.php" style="padding: 5px; background-color: #f90; color: #fff; text-decoration: none; border-radius: 3px;">Logout</a></p>
<h2 style="font-size: 50px; text-align: center; background-color: #f60; color: #fff; border-radius: 5px;">Login Successful
<br/>
Welcome <?php echo $fetcha['fname']." ".$fetcha['sname']; ?></h2>

<h2> FILL EACH AND SUBMIT</h2>
<!-- <a href="courses.php">img -->
	<form method="post" action="#"> 
		<select name="cname">

		 <option value="">...Select Course Name...</option>
         <option value="GENERAL STUDIES">GENERAL STUDIES</option>
         <option value="VISUAL PROGRAMMING">VISUAL PROGRAMMING</option>
        </select>&nbsp;&nbsp;
        <select name="ccode">
		 <option value="">...Select Course Code...</option>
         <option value="GST313">GST313</option>
         <option value="IMT309">IMT309</option>
        </select>&nbsp;&nbsp;
        <select name="cunit">	
		 <option value="">...Select Unit...</option>
         <option value="3">3</option>
         <option value="2">2</option>
        </select>&nbsp;&nbsp;
        <input type="submit" name="regcourse" value="submit course"/>


		</form>

	
 	<hr>
 	
 	Username: <?php echo $_SESSION["user"]; ?><br/>
 	Password: <?php echo $_SESSION["pass"]; ?></p>
</body>
</html>