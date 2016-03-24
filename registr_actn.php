<?php 
	include "dbs.php";
	if(isset($_POST['submit']))
	{
	$email = $_POST['mail'];
	$pass = $_POST['pass'];
	$user = $_POST['user'];
	$name = $_POST['names'];
	$address=$_POST['addr'];
	$states=$_POST['states'];
	$pin = $_POST['pin'];
	$phone = $_POST['phone'];
	$sql = "INSERT INTO good(Name, Address,State,Pincode,email,Phone.no,Username,Password) VALUES ('$name', '$address', '$states', '$pin', '$email','$phone','$user','$pass');";
	$result = mysql_query($sql, $link);
	include "lognn.php";
	mysql_close($link);
	
	}
?>
