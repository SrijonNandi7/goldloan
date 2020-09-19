<?php
      session_start();
      if (!isset($_SESSION['user'])){
            header('location: homepage.html');
      }
?>

<html>
      <head>
            <title>Employee Home</title>
            <link rel="stylesheet" type="text/css" href="Style.css">
      </head>

      <body>

            <div class="topnav">
                  <a href="addcustomer.html">Add Customer</a>
                  <a href="viewcustomers.php">View Customers</a>
                  <a href="viewloandetails.php">View Loan Details</a>
                  <div class="topnav-right">
                        <a href="logout.php" class="active">Logout</a>
                  </div>              
            </div>

            <div class="header">
                  <h1>Employee Home</h1>
            </div>
            <center>
            <table width="80%" style="background-image: url('https://static.vecteezy.com/system/resources/thumbnails/000/555/407/original/Abstract_background-0006.jpg'); 
                  background-attachment: fixed; 
                  background-size: cover; 
                  background-position: cover; padding: 20px; padding-left: 40px;">
                  <tbody><tr height="100px">
                  <td width="60%" style="color :#c5ecfd; font-size: 24px; word-spacing: 5px;">
                        
                  The duties of an employee include, but are not limited to:<br>
                  1. Adding customers to our database<br>
                  2. Accessing customer databases<br>
                  3. Accessing loan details of customers<br>
                      
                  
                  <td><img src="https://i.pinimg.com/originals/fe/f2/53/fef2535edacbd4eed1882fed3730af12.jpg" height="250px" width="90%" style="margin:10px;
                      box-shadow: 0px 0px 10px black;
                        border-radius:10px;" class="bb">
                  </td>
                  </tr>
              </tbody></table><br><br>
            </center>
            <br><br><br>
            

      </body>

      


</html>
      

