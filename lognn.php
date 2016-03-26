<html>
<head>
<title>LOG IN</title>
<style>

div.container{
width: 900px;
height: 610px;
margin:45px auto;
font-family: 'Raleway', sans-serif;
}


html
{background-color:Grey;}
.one {
   float: left;
   border-style: groove;
   border: 5px solid silver;
    background-color:LightSlateGray;
    width: 350px;
    padding: 50px;
     margin: 80px 80px;
    font-style: normal;
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

.active {
    background-color: Olive;
}
</style>
</head>
<body>

<h1 style="font-family:verdana;align:center"> <i>TWITTER'S TWEET</i>
</h1>
<ul>
<li><a  href="registr.php"> Register </a> </li>
<li><a class="active"href="lognn.php"> Login</a> </li>
<li><a href="#">Account</a> </li>
<li><a href="#">Search</a></li>
</ul>
<div class="k">
<div class="container">

<div class="one" >
<h2> Login Form </h2>
<form id="form_id" method="post" action="log_act.php" name="myform">
<label>User Name :</label>
<input type="text" name="username" id="username"/>
<br/>
<br/>
<label>Password :</label>&nbsp&nbsp
<input type="password" name="password" id="password"/>
<br/>
<br/>
<br/>
<div align="center";>
<input type="submit"  value="Login" />
</div>

</div>
</div>
</div>
</form>
</body>
</html>
