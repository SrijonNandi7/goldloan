<html>
      <head>
            <title>Loan Details</title>
            <link rel="stylesheet" type="text/css" href="style.css">

      </head>

      <body><center>

            <div class="topnav">
                  <a href="#">About</a>
                  <div class="topnav-right">
                        <a href="logout.php" class="active">Logout</a>
                  </div>              
            </div>

            <h1>LOAN DETAILS:</h1>

            <div class="container">
                  <form action="" method="POST">
                        <table style=" width:90%; margin: auto; text-align: center; table-layout: fixed;">
                              <tr style="padding:20px; color: white; border-collapse: collapse; border: 1px solid #080808; font-size:15px; backgrond: black;">
                                    <th style="padding:10px; background-color: black; color: white;"> CUSTOMER ID </th>
                                    <th style="padding:10px; background-color: black; color: white;"> CUSTOMER NAME </th>
                                    <th style="padding:10px; background-color: black; color: white;"> DATE OF BIRTH </th>
                                    <th style="padding:10px; background-color: black; color: white;"> OCCUPATION </th>
                                    <th style="padding:10px; background-color: black; color: white;"> ADDRESS </th>
                                    <th style="padding:10px; background-color: black; color: white;"> ORNAMENT </th>
                                    <th style="padding:10px; background-color: black; color: white;"> WEIGHT </th>
                                    <th style="padding:10px; background-color: black; color: white;"> AADHAR </th>
                                    <th style="padding:10px; background-color: black; color: white;"> PAN </th>
                              </tr><br><br>
                  </form>

                  <?php
                        $con=mysqli_connect('localhost','root');
                        $db=mysqli_select_db($con, 'goldloan');

                        $query="select * from loandetails";
                        $query_run=mysqli_query($con, $query);

                        while ($row=mysqli_fetch_array($query_run)){
                              ?>
                              <tr style="padding:20px; color: white; border: 2px solid #080808; font-size:18px;">
                                    <td style="padding:20px; text-align: center; color: black; border: 2px solid #080808; font-size:18px; background: #ffffff;"><?php echo $row['id']?> </td>
                                    <td style="padding:20px; text-align: center; color: black; border: 2px solid #080808; font-size:18px; background: #ffffff;"><?php echo $row['name']?> </td>
                                    <td style="padding:20px; text-align: center; color: black; border: 2px solid #080808; font-size:18px; background: #ffffff;"><?php echo $row['dob']?> </td>
                                    <td style="padding:20px; text-align: center; color: black; border: 2px solid #080808; font-size:18px; background: #ffffff;"><?php echo $row['occupation']?> </td>
                                    <td style="padding:20px; text-align: center; color: black; border: 2px solid #080808; font-size:18px; background: #ffffff;"><?php echo $row['address']?> </td>
                                    <td style="padding:20px; text-align: center; color: black; border: 2px solid #080808; font-size:18px; background: #ffffff;"><?php echo $row['ornament']?> </td>
                                    <td style="padding:20px; text-align: center; color: black; border: 2px solid #080808; font-size:18px; background: #ffffff;"><?php echo $row['weight']?> </td>
                                    <td style="padding:20px; text-align: center; color: black; border: 2px solid #080808; font-size:18px; background: #ffffff;"><?php echo $row['aadhar']?> </td>
                                    <td style="padding:20px; text-align: center; color: black; border: 2px solid #080808; font-size:18px; background: #ffffff;"><?php echo $row['pan']?> </td>
                                    
                              <?php
                        }
                  ?></table>

            </div>
            </center>
      </body>
</html>