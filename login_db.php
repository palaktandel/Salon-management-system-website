<?php

    //connect to the server and select database
    $con = mysqli_connect("localhost", "root", "", "Salon project");
    

    $name = $_POST['name'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    //to prevent mysql injection
    $name = stripcslashes($name);
    $name = mysqli_real_escape_string( $con,$name);
    $age = stripcslashes($age);
    $age = mysqli_real_escape_string($con , $age);
    $phone = stripcslashes($phone);
    $phone = mysqli_real_escape_string($con, $phone);
    $email = stripcslashes($email);
    $email = mysqli_real_escape_string($con, $email);
    $password = stripcslashes($password);
    $password = mysqli_real_escape_string($con , $password);

    

    //query the database for user
    $result = mysqli_query($con , "SELECT * FROM salon_login WHERE name = '$name' and age = '$age' and phone = '$phone' and email = '$email' and password = '$password' ") 
                or die("Failed to query database".mysqli_error());
    $row = mysqli_fetch_array($result);
    if($row['name'] == $name && $row['age'] == $age && $row['phone'] == $phone && $row['email'] == $email && $row['password'] == $password) 
    {
        echo "Login successful !! Welcome" .$row['name']; 
    }
    else{
        echo "Failed to login !";
    }
?>