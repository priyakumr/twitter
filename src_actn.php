<?php
$con = @mysql_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
@mysql_select_db("newform", $con);

$result = mysql_query("select * from good where Username='$_POST[user]'");
while($rowv = mysql_fetch_array($result))
 {
  $name = $rowv['Name'];
  $addr = $rowv['Address'];
  $state = $rowv['State'];
  $pin = $rowv['Pincode'];
  $email = $rowv['email'];
  $phone = $rowv['Phone'];
}
mysql_close($con);

?>
<html>
<head>
<title>SEARCH PAGE</title>
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
{	font-style:italic;
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
.active {
    background-color: Olive;
}

</style>
</head>
<body>

<h1 style="font-family:verdana;font-style:italic;align:center"> <i>TWITTER'S TWEET</i>
</h1>
<ul>
<li><a  href="registr.php"> Register </a> </li>
<li><a href="lognn.php"> Login</a> </li>
<li><a href="#">Account</a> </li>
<li><a class="active" href="src.php">Search</a></li>
</ul>
<h2 style="font-style:bold;font-family:verdana;text-align:center"> WELCOME TO TWITTER'S TWEET</h2>
<br/>
<br/>
<br/>
<div align="center">
<h2> USER INFORMATION </h2>
<body>
<div class="on" >
<form >
 
  <table  style="color:black;background-color:DarkCyan;;border-style:groove; height:150px;width:350px" >
        <tr>
           
            <td style="font-family:black">&nbsp;</td>
        </tr>
        <tr>
            <td >NAME:</td>
            <td >
                <input id="Text1" type="text" value='<?php echo  $name; ?>'/></td>
        </tr>
        <tr>
            <td >ADDRESS</td>
            <td >
                <input id="Text2" type="text" value='<?php echo  $addr; ?>'/></td>
        </tr>
        <tr>
             <td >STATE</td>
            <td >
                <input id="Text3" type="text" value='<?php echo   $state; ?>' /></td>
        </tr>
        <tr>
             <td >PINCODE</td>
            <td >
                <input id="Text4" type="text" value='<?php echo   $pin; ?>' /></td>
        </tr>
        <tr>
            <td >EMAIL_ID</td>
            <td>
                <input id="Text5" type="text" value='<?php echo  $email; ?>' /></td>
        </tr>
        <tr>
           <td >PHONE NO:</td>
            <td>
                <input id="Text6" type="text" value='<?php echo  $phone; ?>' ></td>
        </tr>
        
        <tr>
            <td></td>
        </tr>
    </table>
</form>
</div>
</div>
<p style="text-align:center"> PLEASE <a href="src.php"> CLICK HERE </a>TO GO BACK!!</p>
<footer>
<p style="text-align:center;width:1325px;
    height: 23px;
    border: 1px solid black;
    text-align: center;
    padding-top: 4px;
    background-color:DarkCyan">QUOTES OF THE DAY :  "Always pray to have eyes that see the best in people, a heart that forgives the worst, a mind that forgets the bad, and a soul that never loses faith in God...."</p> 
</footer>
</body>
</html>

