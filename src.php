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
<li><a href="lognn.php"> Login</a> </li>
<li><a class="active" href="src.php">Search</a></li>
</ul>
<h2 style="font-style:bold;font-family:verdana;text-align:center"> WELCOME TO TWITTER'S TWEET</h2>
<br/>
<br/>
<br/>
<div align="center">
<h2> USER INFORMATION </h2>
<form method="post" action="src_actn.php">
<label>User Name :</label>
<input type="text" name="user" id="username"/>
<br/>
<br/>
<div align="center";>
<input type="submit" name="submit"  value="Get info" />
</div>
</div>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
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