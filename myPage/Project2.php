<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
      <head>
        <title>My Website</title>
        <link rel="stylesheet" type="text/css" 
              href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" ></script>
           

    </head>
    <body>
        <div class="nav">
           
        <ul id="menu1">
            <li><a href="#">Home</a>
            <li><a href="#">About</a>
            <li><a href="#">Contact</a>
        </ul>
       
          <ul id="menu2">
            <li><a href="#">Sign Up</a>
            <li><a href="#">Log In</a>
            <li><a href="#">Help</a>
        </ul>
        </div>
        <div class="jumbotron">
        <h1>Test Automation Result</h1>
       <ul id="menu3">
           <li><a href="index.php">Home Page</a>
            <li><a href="Project1.php">project 1</a>
            <li><a href="#">project 2</a>
            <li><a href="project3.php">project 3</a>
        </ul>
         <ul id="menu4">
        <h2>Project 2</h2>
        <form >
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="Search" value="Filter"><br><br>
         </form >
          </ul>
        </div>
        <div class="main">
         
        
            <h2 align="center">Automation Test Result</h2>
		<table border="1px" width="100%">
                    <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Test run Time</th>
                    <th>Result</th>
                </tr>
                <?php
				$conn = mysqli_connect("localhost", "root","") or die(mysql_error()); //Connect to server
				mysqli_select_db($conn,"test") or die("Cannot connect to database"); //connect to database
				$query = mysqli_query($conn,"Select * from test"); // SQL Query
				while($row = mysqli_fetch_array($query))
				{
					Print "<tr>";
						Print '<td align="center">'. $row['test_id'] . "</td>";
						Print '<td align="center">'. $row['test_name'] . "</td>";
						Print '<td align="center">'. $row['test_runtime']."</td>";
						Print '<td align="center">'. $row['result']. "</td>";
					Print "</tr>";
				}
			?>
        </div>
        <div class="image">
            <img src="">
        
    </body>
</html>
