<?php include('connectionDB.php');?>
<?php
	if (isset($_POST['submit-btn'])) {
		$first_name = $_POST['firstName'];
		$last_name = $_POST['lastName'];
		$address = $_POST['homeAddress'];
		$email = $_POST['email'];
		$phone = $_POST['phoneNumber'];
		$nic = $_POST['idNumber'];

		$query = "INSERT INTO customerinfo(first_name,last_name,address,email,phone,nic)
					VALUES('{$first_name}','{$last_name}','{$address}','{$email}',{$phone},{$nic})";

		$result = mysqli_query($connection,$query);

		if ($result) {
			echo "record added";
		}else{
			echo "record added fail";
		}
	}
	

?>


<!DOCTYPE html>
<html>
<head>
	
	<!-- <title>insert_query</title> -->
</head>
<body>

</body>
</html>
<?php mysqli_close($connection); ?> 