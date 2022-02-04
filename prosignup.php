<?php 
	if(isset($_POST["send"])){
		$fname = $_POST["fname"];
		$sname = $_POST["sname"];
		$email = $_POST["email"];
		$phone = $_POST["phone"];
		if(isset($_POST["gender"])){
			$gender = $_POST["gender"];
		}
		$pass = $_POST["pass"];
		$cpass = $_POST["cpass"];
		# this line of code check for already existed user in the database
		$user = "SELECT * FROM signup WHERE fname = '$fname' AND email = '$email'";
		$quser = mysqli_query($conn, $user);
		$numrow = mysqli_num_rows($quser);
		if($numrow > 1){
			echo "User with the same credential already exist in the Database";
		}

		#this lines of code create validation of an empty input
		elseif($fname == "" || $sname == "" || $email == "" || $gender == "" || $pass == "" || $cpass == ""){
			echo "Please fill all required fields";
		}

		#validation for password mismatched
		elseif(!($pass == $cpass)){
			echo "Password mismatched";
		}
		else{
			#password encryption
			$epass = md5($pass);
			
			#Mysqli statement that control insertion of values to the database
			$sendval = "INSERT INTO signup (fname,sname,email,phone,gender,password) VALUES('$fname','$sname','$email','$phone','$gender','$epass')";
			
			#queries the statate i.e to process the statement in the phpmyadmin1
			$qsend = mysqli_query($conn, $sendval);
			
			#controls user feedback
			if($qsend){
				echo "registration successeful";
			}
			else{
				echo "Database is currently on upgrade, Plese visit back later!";
			}

		}




	}







?>