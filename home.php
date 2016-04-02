
<html>
<head>
<title>HOME PAGE</title>
<style>
html
{background-color:Grey;}
img{
	float:right;
	width="800px" ;
	height="800px" ;
	align="center" ;
	margin: 10px 200px;
}
ul{
list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}
h1
{
  width: 1325px;
    height: 90px;
    border: 2px solid black;
    text-align: center;
    padding-top: 30px;
    background-color:DarkCyan; /* light green */;  
}
li
{
float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}


li a:hover:not(.active) {
    background-color: Gainsboro;
}


</style>
</head>
<body>
<?php
$user = $_POST["username"];
?>

<h1 style="font-family:verdana;align:center"> <i>TWITTER'S TWEET</i>
</h1>
<ul>
<li style="float:right"><a href="lognn.php">Log out</a></li>
</ul>
<h4 style="font-style:italic;font-family:verdana"> HII <?php echo  $user; ?> <br/> WELCOME TO TWITTER'S TWEET</h4>
<img src="kr.jpg" >
<br/>
<br/><br/><br/>
<form method='post' action='post.php'>
<label>USER:</label>&nbsp&nbsp
<input type="text" name="user" value="<?php echo  $user; ?>">
<p>Your status:</p>
<input type="text" name="status" size=20 >
<input type="submit" name="submit" value="submit">
</form>

<br/><br/><br/>
<a href="shw_post.php"> SHOW POST</a>

<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

<footer>
<p style="text-align:center;width:1325px;
    height: 23px;
    border: 1px solid black;
    text-align: center;
    padding-top: 4px;
    background-color:DarkCyan">Always pray to have eyes that see the best in people, a heart that forgives the worst, a mind that forgets the bad, and a soul that never loses faith in God....</p> 
</footer>
</body>
</html>