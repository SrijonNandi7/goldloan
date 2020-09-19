<?php
      $con=mysqli_connect('localhost','root');
      mysqli_select_db($con,'goldloan');

      $id=$_POST['id'];
      $name=$_POST['name'];
      $dob=$_POST['dob'];
      $email=$_POST['email'];
      $password=$_POST['password'];
      $type="employee";

      $query="insert into users (id, name, dob, email, password, type)
      values('$id','$name','$dob','$email','$password', '$type')";

      echo "$query";
      mysqli_query($con, $query);

?>