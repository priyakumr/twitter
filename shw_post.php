<html>
    <head>
      <meta charset="UTF-8">
      <title>database connections</title>
	  <style>
	  html{
		  background-color: lavender;
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
    background-color:DarkCyan;  
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

	  </style>
    </head>
    <body>
	<h1 style="font-family:verdana;align:center"> <i>TWITTER'S TWEET</i>
</h1>
<ul>
<li style="float: right"><a href="lognn.php">Log out</a></li>
</ul>

      <?php
      $usrnme = "root";
      $password = "";
      $host = "localhost";

      $link = @mysql_connect($host,$usrnme,$password)
          or die("Unable to connect");
  
      $selected = mysql_select_db("newform", $link)
        or die("Unable to connect");

      //execute the SQL query and return records
      $result = mysql_query("SELECT * FROM posts");
      ?>
      <table border="1" style= "background-color:grey; color:blue; margin: 0 auto;" >
        <tr>
          <th>USER NAME</th>
          <th>POSTS</th>
        </tr>
        <?php
          while( $row = mysql_fetch_assoc( $result ) )
		  {
            echo "<tr>";
			echo "<td>".$row['Username']."</td>";
			echo "<td>".$row['Post']."</td>";
			echo "</tr>";

          }
        ?>
    </table>
	<ul>
	<li style="float: right"><a href="home.php">Back</a></li>
	</ul>
     <?php mysql_close($link); ?>
    </body>
    </html>
