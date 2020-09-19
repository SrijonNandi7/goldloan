<?php
      $con=mysqli_connect('localhost','root');
      mysqli_select_db($con,'goldloan');

      $id=$_POST['id'];
      $name=$_POST['name'];
      $dob=$_POST['dob'];
      $occupation=$_POST['occupation'];
      $address=$_POST['address'];
      $ornament=$_POST['ornament'];
      $weight=$_POST['weight'];
      $aadhar=$_POST['aadhar'];
      $pan=$_POST['pan'];

      $query="insert into loandetails (id, name, dob, occupation, address, ornament, weight, aadhar, pan)
      values('$id','$name','$dob','$occupation','$address', '$ornament', '$weight', '$aadhar', '$pan')";

      echo "$query";
      mysqli_query($con, $query);

?>