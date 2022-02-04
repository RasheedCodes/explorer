<?php
		#these are variables for the database connection
		$dbhost = "localhost";
		$dbuser = "root";
		$dbpass = "";
		$dbdata = "amschools";

		#Mysqli database connection string
		$conn = mysqli_connect("$dbhost","$dbuser","$dbpass","$dbdata");
		
		#Mysqli database connection feedback
		if(mysqli_connect_error()){
			echo "database connection failed";
		}
		else{
			
		}



?>