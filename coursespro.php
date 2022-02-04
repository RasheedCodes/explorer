<?php
include_once("dbconnect.php");
     if (isset($_POST['regcourse'])){
     	$user = $_SESSION['user'];
    $cname = $_POST['cname'];
    $ccode = $_POST['ccode'];
    $cunit = $_POST['cunit'];


         $maxcourse = "SELECT * FROM courses WHERE cmail = '$user'";
         $qcourse = mysqli_query($conn, $maxcourse);
         $numcourse = mysqli_num_rows($qcourse);
         if ($cname == "" || $ccode == "" || $cunit == "") {
         	echo "<p style='color:#00f';>please fill all required fields</p>";
         }
         if ($numcourse >=3){
             echo "<p style= 'color: #f00;'>sorry you've reach your reg limit</p>";
         }

         else{
         	$savecourse = " INSERT INTO courses (cmail, cname, ccode,cunit,cstatus) VALUES('$user' , '$cname', '$ccode', '$cunit', 'registered')";
         	$qcourse = mysqli_query($conn, $savecourse);
         	if ($qcourse){
         		echo "<p style = 'color:#00f;'> courses added successfully!</p>";
         		
         	}
         }
     }
     ?>