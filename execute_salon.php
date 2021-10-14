<?php 
session_start();
include('db_connect.php');

$username=$_POST['username'];
$password = $_POST['password'];

$result = mysqli_query($con, "SELECT * FROM signup_table WHERE username='$username' and email = '$email' and password='$password' ");
$num_rows = mysqli_num_rows($result);

if ($num_rows) {
 header("location: index5.php?remarks=failed"); 
}else {
 $name=$_POST['name'];
 $age=$_POST['age'];
 $phone=$_POST['phone'];
 $email = $_POST['email'];
 $username=$_POST['username'];
 $password=$_POST['password'];

 if(mysqli_query($con,"INSERT INTO signup_table(name, age, phone, email, username, password) VALUES('$name', '$age','$phone', ,'$email', '$username', '$password')"))
 { 
 header("location: index5.php?remarks=success");
 }else{
  $e=mysqli_error($con);
 header("location: index5.php?remarks=error&value=$e");  
 }
}
?>