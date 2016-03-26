<?php
session_start();
$server = "localhost";
$usern = "root";
$pass = "";
$db = "newform";

// connect to the database
$mysqli = new mysqli($server, $usern, $pass, $db);

//show errors (remove this line if on a live site)
mysqli_report(MYSQLI_REPORT_ERROR);

if(isset($_POST['submit']))
{
$username = trim($_POST['username']);
$password = trim($_POST['password']);
$query = "SELECT Username, psswd FROM good WHERE Username='$username' 
AND psswd='$password'";

$result = mysqli_query($mysqli,$query)or die(mysqli_error());
$num_row = mysqli_num_rows($result);
//$row=mysqli_fetch_array($result);
if( $num_row ==1 )
     {
 //$_SESSION['userid']=$row['userid'];
 //header("Location:home.php");
   echo 'hi there';
 //exit;
 include "home.php";
  }
  else
     {
 echo 'oops  can not do it';
  }
 }
?>