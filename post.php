<?php 
session_start();
	include "dbs.php";
	if(isset($_POST["submit"]))
	{
	$body= $_POST["status"];
	$user = $_POST["user"];
	$sql = "INSERT INTO posts(Username,Post) VALUES ('$user', '$body')";
	$result = mysql_query($sql, $link);
	if(mysql_query( $sql,$link)){
    echo "Records added successfully.";

} else{
    echo "ERROR: Could not able to execute $sql. " . mysql_error($link);
}
    	include "home.php";
	mysql_close($link);
	
	}
?>
