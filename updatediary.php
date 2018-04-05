<?php
	session_start();
	
	include("connection.php");
	include("login.php");
	
	$query="UPDATE user SET diary='".mysqli_real_escape_string($link,$_POST['diary'])."' WHERE id='".$_SESSION['id']."' LIMIT 1";
	
	mysqli_query($link,$query);
	
	
?>
