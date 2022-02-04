<!DOCTYPE html>
<html>
<head>
	<title>Looping practice</title>
</head>
<body>
<h2 style="font-size: 50px; text-align: center; background-color: #f60; color: #fff; border-radius: 5px;">Pizza Stores</h2>
<form method="post" action="#">
	<input type="text" name="numf" placeholder="type the quantity of fruits to display"><br/>
	<input type="submit" name="display" value="Display" />
	
</form>
		<?php 
				if(isset($_POST["display"])){

					$i = 1;
					$k = $_POST["numf"];

					while ($i <= $k) {
						echo "<img src='images/apple.jpg' style='width:15%; height:auto; border: 3px solid #f60; border-radius:15px; margin-left: 20px; margin-bottom:20px;'>";
						echo "<img src='images/nccflogo.png' style='width:15%; height:auto; border: 3px solid #f60; border-radius:15px; margin-left: 20px; margin-bottom:20px;'>";
						$i++;
					}					
				}



 		?>	
</body>
</html>