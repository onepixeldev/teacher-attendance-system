<?php
	session_start();
	require('config.php');
	$idAdmin = $_SESSION['username'];
	$fullname = "SELECT * FROM admin WHERE username='$idAdmin'";
	//$email = "SELECT * FROM admin WHERE username='$_SESSION[\"username\"]'";
	$result = mysqli_query($link, $fullname);
	$fn = mysqli_fetch_assoc($result);
	//echo $fn['fullname'];
	
	
	
	if(!isset($_SESSION["username"])){
	header("Location: index.php");
	exit(); 
	}
?>