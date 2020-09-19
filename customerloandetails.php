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

                        <table class="tab">
                              <tr>
                                    <th> CUSTOMER ID </th>
                                    <th> CUSTOMER NAME </th>
                                    <th> DATE OF BIRTH </th>
                                    <th> OCCUPATION </th>
                                    <th> ADDRESS </th>
                                    <th> ORNAMENT </th>
                                    <th> WEIGHT </th>
                                    <th> AADHAR </th>
                                    <th> PAN </th>
                              </tr><br><br>

                  <?php
                        $con=mysqli_connect('localhost','root');
                        $db=mysqli_select_db($con, 'goldloan');

                        $id=$_POST['id'];

                        $query="select * from loandetails where id='$id' ";
                        $query_run=mysqli_query($con, $query);




                        $row=mysqli_num_rows($query);
                        
                              while ($row=mysqli_fetch_array($query_run)){
                              ?>
                                    <tr>
                                          <td><?php echo $row['id']?> </td>
                                          <td><?php echo $row['name']?> </td>
                                          <td><?php echo $row['dob']?> </td>
                                          <td><?php echo $row['occupation']?> </td>
                                          <td><?php echo $row['address']?> </td>
                                          <td><?php echo $row['ornament']?> </td>
                                          <td><?php echo $row['weight']?> </td>
                                          <td><?php echo $row['aadhar']?> </td>
                                          <td><?php echo $row['pan']?> </td>
                                    </table>
                                    <?php
                              }
                              
                  ?>

            </center>
      </body>
</html>