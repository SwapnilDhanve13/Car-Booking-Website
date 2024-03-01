<?php
	$username = $_POST['usernamesignup'];
	$email = $_POST['emailsignup'];
	$password = $_POST['passwordsignup'];
	
	
	mysql_connect("localhost","root","") or die("Error :- ".mysql_error());
	
	mysql_select_db("supercarstreet")  or die("Error :- ".mysql_error());
	
	$query = "INSERT INTO `supercarstreet`.`member_master` (
			
			`username` ,
			`email` ,
			`password`
			)
			VALUES (
			'$username', '$email', '$password'); ";
			
	mysql_query($query) or die("Error :-".mysql_error());
	
	echo "<script> alert('Successfully Registered');window.location='index.html';</script>";

	
?>