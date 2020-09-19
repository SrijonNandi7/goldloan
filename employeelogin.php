<?php
      session_start();
      $con=mysqli_connect('localhost','root');
      
      $db=mysqli_select_db($con, 'goldloan');

      if(isset($_POST['submit'])){
            $email=$_POST['email'];
            $password=$_POST['password'];

            $sql="select * from users where type='employee' and email='$email' and password='$password'";
            $query=mysqli_query($con, $sql);

            $row=mysqli_num_rows($query);
            if($row==1){
                  echo "Login Successful";
                  $_SESSION['user']=$email;
                  header('location: employeehome.php');
            }else{
                  echo "Login Failed";
                  header('location: employeelogin.html');
            }

      }
?>