<html>
      <head>
            <title>View Customers</title>
            <link rel="stylesheet" type="text/css" href="style.css">

      </head>

      <body><center>

            <div class="topnav">
                  <a href="#">About</a>
                  <div class="topnav-right">
                        <a href="logout.php" class="active">Logout</a>
                  </div>              
            </div>

            <h1>CUSTOMERS:</h1>

            <div class="container">
                  <form action="" method="POST">
                        <table style=" width:90%; margin: auto; text-align: center; table-layout: fixed;">
                              <tr style="padding:20px; color: white; border-collapse: collapse; border: 1px solid #080808; font-size:24px; backgrond: black;">
                                    <th style="padding:10px; background-color: black; color: white;"> ID </th>
                                    <th style="padding:10px; background-color: black; color: white;"> CUSTOMER NAME </th>
                                    <th style="padding:10px; background-color: black; color: white;"> DATE OF BIRTH </th>
                                    <th style="padding:10px; background-color: black; color: white;"> EMAIL ID </th>
                              </tr><br><br>
                  </form>

                  <?php
                        $con=mysqli_connect('localhost','root');
                        $db=mysqli_select_db($con, 'goldloan');

                        $query="select * from users where type='customer' ";   
                        $query_run=mysqli_query($con, $query);

                        while ($row=mysqli_fetch_array($query_run)){
                              ?>
                              <tr style="padding:20px; color: white; border: 2px solid #080808; font-size:18px;">
                                    <td style="padding:20px; text-align: center; color: black; border: 2px solid #080808; font-size:18px; background: #ffffff;"><?php echo $row['id']?> </td>
                                    <td style="padding:20px; text-align: center; color: black; border: 2px solid #080808; font-size:18px; background: #ffffff;"><?php echo $row['name']?> </td>
                                    <td style="padding:20px; text-align: center; color: black; border: 2px solid #080808; font-size:18px; background: #ffffff;"><?php echo $row['dob']?> </td>
                                    <td style="padding:20px; text-align: center; color: black; border: 2px solid #080808; font-size:18px; background: #ffffff;"><?php echo $row['email']?> </td>
                              <?php
                        }
                  ?></table>

            </div>
            </center>
      </body>
</html>