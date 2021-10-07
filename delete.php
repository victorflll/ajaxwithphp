<?php
	include "connection.php";
	$email = $_POST['email'];
	$sql = "DELETE FROM `user` WHERE `email` = '$email'";
	mysqli_query($connect, $sql) or die(error());
	$response = array("success" => true);
	echo json_encode($response);
?>