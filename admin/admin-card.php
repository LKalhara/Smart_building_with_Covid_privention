<?php
session_start();
if (!isset($_SESSION['userName'])) {
	header('location:admin.php');
}


?>
<!DOCTYPE html>
<html>
<head>
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="admin-card.css">
	<style>
		.card-container-form{
			border-radius: 10px;
		}
		.card{
			background: rgba(29, 29, 28, 0.8);
		}
		button{
			width: 230px; 
			border-radius: 10px; 
			background:rgba(69, 54, 61, 0.5) ;
		}
		h5{
			color: rgba(188, 186, 151, 0.8);
		}
		h6{
			color: rgba(237, 235, 216, 0.8);
		}

	</style>

	<title>Admin Option</title>
</head>
<body>
	<nav style="background: black; margin-top: 0px; margin-left: 0px; padding: 6px;"><span style="font-family: fantasy; font-size: 30px; font-weight: 8px; color: blue;padding: 6px;">ICBT </span ><span style="font-family: fantasy; font-size: 30px; font-weight: 8px; color: red;">CAMPUS</span>
		<!-- <button onclick="location.href='../home.php'">HOME</button> -->
		<button onclick="location.href='logout.php'" class="log-out">LOG OUT</button>
	</nav>

	<!-- <a class="log-out" href="logout.php">LOG OUT</a> -->
	<h1 style="color: white; font-family: monospace; background: rgba(18, 18, 17, 0.7) ; padding: 10px">Welcome <?php echo $_SESSION['userName']; ?></h1>

	<div class="card-container">
		<form class="card-container-form">
			<h4 style="font-family: monospace; ">Config your area as you wish</h4>
			<hr style="height: 5px;">

			<div class="card-block-one">

				<!-- Customer Entrance Infor -->
				<div class="card" style="width: 18rem; ">
				  <img src="pic/user_info.png" class="card-img-top" alt="..." style="height: 210px">
				  <div class="card-body">
				    <h5 class="card-title">Customer Entrance Infor</h5>
				    <button onclick="location.href='customer-info.php'" class="customer-info-click-btn" type="button" ><a href="customer-info.php"></a><h6 class="Infor-btn">INFOR</h6></button>
				  </div>
				</div>

				<!-- Main Gate -->
				<div class="card" style="width: 18rem;">
				  <img src="pic/main_gate.png" class="card-img-top" alt="...">
				  <div class="card-body">
				    <h5 class="card-title">Main Gate</h5>
				    <button class="main-gate-click-btn" type="button"><h6 class="main-gate-header"></h6></button>
				  </div>
				</div>

				<!-- Loby Lighting -->
				<div class="card" style="width: 18rem;">
				  <img src="pic/light.png" class="card-img-top" alt="..." style="height: 210px">
				  <div class="card-body">
				    <h5 class="card-title">Loby Lighting</h5>
				    <button class="loby-light-click-btn" type="button"><h6 class="loby-light-header"></h6></button>
				  </div>
				</div>
			</div>
				
			<div class="card-block-two">
					<!-- Celling Fans -->
				<div class="card" style="width: 18rem;">
				  <img src="pic/fan.png" class="card-img-top" alt="...">
				  <div class="card-body">
				    <h5 class="card-title">Celling Fans</h5>
				   <button class="celling-fan-click-btn" type="button" ><h6 class="celling-fan-header"></h6></button>
				  </div>
				</div>

				<!-- Air Condition -->
				<div class="card" style="width: 18rem;">
				  <img src="pic/AC.png" class="card-img-top" alt="...">
				  <div class="card-body">
				    <h5 class="card-title">Air Condition</h5>
				    <button  class="air-condition-click-btn" type="button"><h6 class="air-condition-header"></h6></button>
				  </div>
				</div>

				<!-- CCTV Cameras -->
				<div class="card" style="width: 18rem;">
				  <img src="pic/cctv.png" class="card-img-top" alt="..."style="height: 190px">
				  <div class="card-body">
				    <h5 class="card-title">CCTV Cameras</h5>
				    <button class="cctv-cameras-click-btn" type="button"><h6 class="cctv-cameras-header"></h6></button>
				  </div>

				</div>
			</div>
		</form>
	</div>
 
   
 <script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/7.14.1-0/firebase.js"></script>
  <script src="admin-card.js"></script> 
 
 
</body>
</html>