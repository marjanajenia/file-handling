<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
	<h1>Registration Form</h1>
	<?php 

		$FirstName = $LastName = "";
		#$FirstNameErr = $LastNameErr = "";

		if($_SERVER['REQUEST_METHOD'] == "POST") {

			if(empty($_POST['fname'])) {
				echo"Please fill up the firstname";
				echo "<br>";
			}
			else {
				$FirstName = $_POST['fname'];
			}

			if(empty($_POST['lname'])) {
				 echo "Please fill up the lastname";
				 echo "<br>";
			}
			else {

				$lastName = $_POST['lname'];
				
			}

			if(empty($_POST['gender'])) {
				 echo "Please fill up the gender";
				 echo "<br>";
			}
			else {

				$lastName = $_POST['gender'];
				
			}

			if(empty($_POST['email'])) {
				 echo "Please fill up the email";
				 echo "<br>";
			}
			else {

				$lastName = $_POST['lname'];
				
			}

			

			
		}
	?>

</body>
</html>