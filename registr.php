<HTML>
<HEAD>
<style>
img
{
width="45";
float: left;
}
h1
{
  width: 1325px;
    height: 90px;
    border: 2px solid black;
    text-align: center;
    padding-top: 30px;
    background-color:DarkCyan;  
}
ul{
list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}
li
{
float: left;
}
#a1
{
width: 1000px;
height:80px;
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
<TITLE> Registration </TITLE>
</HEAD>

<BODY bgcolor="Grey" text="black">
<img src="capture.png";">
<h1 style="font-family:verdana;"> <i>TWITTER'S TWEET</i>
</h1>
<ul>
<li><a class="active" href="registr.php"> Register </a> </li>
<li><a href="lognn.php"> Login</a> </li>
<li><a href="#">Account</a> </li>
<li><a href="#">Search</a></li>
</ul>
<br>
<br>
<form  align = "center"  action="registr_actn.php"  method="post">

<b> <label for="names">Full name:</label>  </b> &nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="names" size=20 ><br>
<br>
<b> <label for="addr">Address:</label> </b>	&nbsp&nbsp&nbsp&nbsp<input type="text" name="addr" size=20 ><br><br>
<b> <label for="states">State:</label>  </b> &nbsp&nbsp&nbsp&nbsp 
	&nbsp&nbsp<input type="text" name="states" size=20 >
<br><br>
<b> <label for="pin">Pincode:</label>  &nbsp&nbsp&nbsp&nbsp&nbsp</b><input type="text" name="pin" size=20 /> <br> <br>
<b><label for="mail"></label> email: </b> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="mail" size=20 ><br> <br> 
<b><label for="phone"></label>  Phone-no: </b>	&nbsp&nbsp<input type=text name="phone" size=20 ><br> <br>
<b><label for="user"></label>  Username:  </b>&nbsp&nbsp&nbsp<input type = "text" name="user" size=20  /> <br> <br>
<b><label for="pass"></label>  Password: </b> &nbsp&nbsp&nbsp&nbsp<input type = "password" name="pass" size=20 /> <br> <br>
<input type="submit" name="submit" value="REGISTER">
</form></BODY></HTML>
