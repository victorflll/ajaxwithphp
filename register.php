  
<?php
	include "connection.php";
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$sql = "INSERT INTO `user` (`name`, email, `password`) VALUES ('$name', '$email', '$password')";
	mysqli_query($connect, $sql) or die(error());
	$response = array("success" => true);
	echo json_encode($response);
?>