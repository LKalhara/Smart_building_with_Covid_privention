<?php

	session_start();

	$conn = mysqli_connect('localhost','Kalhara','lk123','covidsys');

	mysqli_select_db($conn, 'covidsys');

	if (isset($_POST['submit-login-btn'])) {
		$user = $_POST['user_name'];
		$passw = $_POST['password'];

		$que_user = "SELECT * FROM adminacc WHERE user_name ='$user' && pass ='$passw'";

		$result = mysqli_query($conn, $que_user);

		$num = mysqli_num_rows($result);

		if ($num == 1) {
			$_SESSION['userName'] = $user;
			header('location:admin-card.php');
		}else{
			header('location:admin.php');
		}
	}

	
	

?>

<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="adminpage.css">

	<title>Admin Page</title>
</head>
<body>
	<nav style="background: black; margin-top: 0px; margin-left: 0px; padding: 6px;"><span style="font-family: fantasy; font-size: 30px; font-weight: 8px; color: blue;padding: 6px;">ICBT </span ><span style="font-family: fantasy; font-size: 30px; font-weight: 8px; color: red;">CAMPUS</span>
		<!-- <button onclick="location.href='../home.php'">HOME</button> -->
		<a href="../home.php" style="text-decoration: none; margin-left: 1100px; color: white; font-family: monospace; letter-spacing: 2px; font-weight: 10px; ">HOME</a>
		
	</nav>
	
	<form class="login-container-box" action="" method="POST">
		<h3>Admin Login </h3>
		  <div class="mb-3">
		    <label for="exampleInputEmail1" class="form-label">User Name</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="user_name">
		  </div>
		  <div class="mb-3">
		    <label for="exampleInputPassword1" class="form-label">Password</label>
		    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
		  </div>
  
  		<button type="submit" class="btn btn-primary" name="submit-login-btn">Submit</button>
	</form>
	
</body>
</html>