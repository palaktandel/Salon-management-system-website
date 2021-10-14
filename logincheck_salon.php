<?php
include("db_connect.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
 $username=mysqli_real_escape_string($con,$_POST['username']);
 $password=mysqli_real_escape_string($con,$_POST['password']);

 $result = mysqli_query($con, "SELECT * FROM signup_table");
 $c_rows = mysqli_num_rows($result);
 if ($c_rows != $username) {
  header("location: index5.php?remark_login=failed");
 }
 $sql="SELECT user_id FROM signup_table WHERE username='$username' and password='$password'";
 $result=mysqli_query($con, $sql);
 $row=mysqli_fetch_array($result);
 $active=$row['active'];
 $count=mysqli_num_rows($result);
 if($count==1) {
  $_SESSION['login_user'] = $username;
  header("location: welcome_salon.php");
 }
}
?>