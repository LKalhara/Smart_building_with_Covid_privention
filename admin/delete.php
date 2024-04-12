<?php
$id = $_GET['i'];

$connection = mysqli_connect('localhost','Kalhara','lk123','covidsys');

mysqli_query($connection,"delete FROM customerinfo where id = '$id'");

header("location:customer-info.php")

?>