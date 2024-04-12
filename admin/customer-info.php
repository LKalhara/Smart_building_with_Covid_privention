<?php
$connection = mysqli_connect('localhost','Kalhara','lk123','covidsys');

$s = mysqli_query($connection,"SELECT * FROM customerinfo"); 
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="customer-info.css">
	<title>Customer Entry Info</title>
</head>
<body>
	<nav style="background: black; margin-top: 0px; margin-left: 0px; padding: 6px;"><a href="C:\xampp\htdocs\tutorial\home.php"><span style="font-family: fantasy; font-size: 30px; font-weight: 8px; color: blue;padding: 6px;">ICBT </span ><span style="font-family: fantasy; font-size: 30px; font-weight: 8px; color: red;">CAMPUS</span></a></nav>
<form class="table-container">	
 <table border="1" align="center">
		<tr>
			<th>ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Address</th>
			<th>NIC Number</th>
			<th>Phone Number</th>
			<th>Email Address</th>
			<th>Entry Date/Time</th>
			<th>Option</th>
		</tr>
	
<?php
	//fetching data using array
while ($r = mysqli_fetch_array($s)) 
{
?>
		<tr>
			<td><?php echo $r['id'];  ?></td>
			<td><?php echo $r['first_name'];  ?></td>
			<td><?php echo $r['last_name'];  ?></td>
			<td><?php echo $r['address'];  ?></td>
			<td><?php echo $r['nic'];  ?></td>
			<td><?php echo $r['phone'];  ?></td>
			<td><?php echo $r['email'];  ?></td>
			<td><?php echo $r['createdAt'];  ?></td>
			<th><a href="delete.php?i=<?php echo $r['id']; ?>"> Delete</a></th>
		</tr>

<?php		
}
?>
</table>
</form>

</body>
</html>