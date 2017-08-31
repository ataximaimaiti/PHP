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
            <li><a href="#">Home Page</a>
            <li><a href="Project1.php">project 1</a>
            <li><a href="project2.php">project 2</a>
            <li><a href="project3.php">project 3</a>
        </ul>
        <select name='project' type='select'>
            <option value="none">- Select -</option>
   <option value="project1">Agrilogic</option>

    <option value="project2">Project2</option>

    <option value="project3">Project3</option>

   
        </select>
       <select name='test' type='select'>
            <option value="none">- Select -</option>
            <option value="project1">Project1</option>

             <option value="project2">Project2</option>

             <option value="project3">Project3</option>

   
        </select>
        </div>
        <div class="main">
        <h2>Home</h2>
         
        <form >
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="Search" value="Filter"><br><br>
         </form >
            <h2 align="center">Automation Test Result</h2>
		<table border="1px" width="100%">
                    <tr>
                    
                    <th>Name</th>
                    <th>Host</th>
                    <th>Test run Time</th>
                    <th>Status</th>
                    <th>Browser</th>
                  
                </tr>
                
                <?php
                $conn = mysqli_connect("localhost", "root","") or die(mysql_error()); //Connect to server
		mysqli_select_db($conn,"results") or die("Cannot connect to database"); //connect to database
                 if (isset($_POST['Search'])) {

                $search_term = mysql_real_escape_string($_POST['valueToSearch']);
                $query = mysqli_query($conn,"Select testname, host,date,status,browser, from results where testname like '%".$search_term."%'"); // SQL Query
                 }
                 else{
                      $query = mysqli_query($conn,"Select testname, host,date,status,browser, from results");
                 }
				
				
				while($row = mysqli_fetch_array($query))
				{
					Print "<tr>";
						Print '<td align="center">'. $row['testname'] . "</td>";
						Print '<td align="center">'. $row['host'] . "</td>";
						Print '<td align="center">'. $row['date']."</td>";
						Print '<td align="center">'. $row['status']. "</td>";
                                                Print '<td align="center">'. $row['browser']. "</td>";
					Print "</tr>";
				}
                 
			?>
                </table>
                    
        </div>
        <div class="image">
            <img src="">
        
    </body>
</html>
