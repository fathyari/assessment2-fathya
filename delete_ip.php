<?php 
	include '../config.php';

	$conn = new mysqli($host, $username, $password, $dbname);

	$id_ip = $_GET['id_ip'];
	$sql = "DELETE FROM `ip` WHERE id='$id_ip'";
	$result = $conn->query($sql); 
	echo "<script> alert('Data deleted.');</script>";
	echo "<script> location='read_ip.php'; </script>";
?>