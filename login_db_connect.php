<?php

    //connect to the server and select database
    $con = mysqli_connect("localhost", "root", "", "Salon project");
    

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    //to prevent mysql injection
    $username = stripcslashes($username);
    $username = mysqli_real_escape_string( $con,$username);
    $email = stripcslashes($email);
    $email = mysqli_real_escape_string($con, $email);
    $password = stripcslashes($password);
    $password = mysqli_real_escape_string($con , $password);

    

    //query the database for user
    $result = mysqli_query($con , "SELECT * FROM signup_table WHERE username = '$username' and email = '$email' and password = '$password' ") 
                or die("Failed to query database".mysqli_error());
    $row = mysqli_fetch_array($result);

    if($row['username'] == $username && $row['email'] == $email && $row['password'] == $password) 
    {
        header("Location: ../Salon project/Salon_frames.html?login=success");
        
    }
    else
    {
        echo '<script>alert("Failed to login !!")</script>';
        header("Location: ../Salon project/Salon_login.php?login=error");
    }
?>

