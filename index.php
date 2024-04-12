

<?php
	//session_start();

	$firstName = $lastName = $homeAddress = $email = $phoneNumber= $textLength = $idNumber='';
	$errors = array('firstName' =>'' ,'lastName' =>'','homeAddress' =>'','email' =>'' ,'phoneNumber' => '','idNumber' => '');
	
	if (isset($_POST['submit-btn'])) {
		
		//First name check
		if (empty($_POST['firstName'])) {
			$errors['firstName'] = 'First name must be required <br/>';
		} else{
			$firstName = $_POST['firstName'];
			if (!preg_match('/^[a-zA-Z\s]+$/', $firstName)) {
				$errors['firstName'] = 'First Name must be letters and space only';
			}
		}

		//Last name check
		if (empty($_POST['lastName'])) {
			$errors['lastName'] = 'First name must be required <br/>';
		} else{
			$lastName = $_POST['lastName'];
			if (!preg_match('/^[a-zA-Z\s]+$/', $lastName)) {
				$errors['lastName'] = 'Last Name must be letters and space only';
			}
		}

		//Home Address check
		if (empty($_POST['homeAddress'])) {
			$errors['homeAddress'] = 'Home Address must be required <br/>';
		} 
		

		//E-mail address check
		// if (empty($_POST['email'])) {
		// 	$errors['email'] = 'Email Address must be required <br/>';
		// } else{
			// $email = $_POST['email'];
			// if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
			// 	$errors['email'] = 'Email must be a valid email address';
			// }
		//}

		//Phone number check
		if (empty($_POST['phoneNumber'])) {
			$errors['phoneNumber'] = 'A phone number must be required <br/>';
		} else{
			$phoneNumber = $_POST['phoneNumber'];
			$textLength = strlen($phoneNumber);
			echo $textLength;
			if (!(is_numeric($phoneNumber) && ($textLength === 10))) {
				$errors['phoneNumber'] = 'Number must be a valid phone number';
			}
		}
		//id number check
		if (empty($_POST['idNumber'])) {
			$errors['idNumber'] = 'NIC number must be required <br/>';
		} else{
			$idNumber = $_POST['idNumber'];
			$textLength = strlen($idNumber);
			echo $textLength;
			if (!(is_numeric($idNumber))) {
				$errors['idNumber'] = 'NIC number must be a valid NIC number';
			}
		}

		if (array_filter($errors)) {
			echo 'errors in the form';
		} else{
			include('insert_query.php');

			header('location: index3.html');


			}


	}// end POST
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>User Login</title>
	<link rel="stylesheet" type="text/css" href="indexpage.css">
	<style>
		label{
			color: white !important;
		}
	</style>
	<script>
		window.history.forward();
	</script>
</head>
	<?php include('header.php');  ?>

	<section class="container">
		<h5 id="tag">Please fillout your deatails here</h5>
		<form class="main-form" action="index.php" method="POST">
			<div class="infor">
				<div>
					<label>First Name</label>
					<input type="text" name="firstName" value="<?php echo $firstName ?>">
					<div class="red-text"><?php echo $errors['firstName'];  ?></div>
				</div>
				<div>
					<label>Last Name</label>
					<input type="text" name="lastName" value="<?php echo $lastName ?>">
					<div  class="red-text"><?php echo $errors['lastName'];  ?></div>
				</div>
				<div>
					<label>Home Address</label>
					<input type="text" name="homeAddress" value="<?php echo $homeAddress ?>">
					<div  class="red-text"><?php echo $errors['homeAddress'];  ?></div>
				</div>
				<div>
					<label>Phone Number</label>
					<input type="text" name="phoneNumber" value="<?php echo $phoneNumber ?>">
					<div  class="red-text"><?php echo $errors['phoneNumber'];  ?></div>
				</div>
				<div>
					<label>National Identity Card Number</label>
					<input type="text" name="idNumber" value="<?php echo $idNumber ?>">
					<div  class="red-text"><?php echo $errors['idNumber'];  ?></div>
				</div>
				<div>
					<label>E-mail address</label>
					<input type="text" name="email" value="<?php echo $email ?>">
					<div  class="red-text"><?php echo $errors['email'];  ?></div>
				</div>
				
			</div>
			<div >
				<input type="submit" name="submit-btn" value="submit" class="btn brand z-depth-0" id="submit">
			</div>	
		</form>
	</section>

	<?php include('footer.php');  ?>
</html>