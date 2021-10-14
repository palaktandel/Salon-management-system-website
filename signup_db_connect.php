<?php


$name = $_POST['name'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

//Database connection

$conn = new mysqli('localhost', 'root', '', 'Salon project'); 
if($conn->connect_error)
{
    die('Connection failed :' . $conn->connect_error);
}

else{
    $stmt = $conn->prepare("insert into signup_table (name, age, phone, email, username, password)
    values(?,?,?,?,?,?) ");
    $stmt->bind_param("ssisss", $name, $age, $phone, $email, $username, $password);
    $stmt->execute();
    
    echo '<script>alert("Registered successfully !")</script>'; 
    header("Location: ../Salon project/Salon_login.php?signup=success");

    $stmt->close();
    $conn->close();
} 
?>
<html>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
    <style>
        div{
            background-color: white;
        }
        
        body{
                background-image: url(Salon_project/login9.jpg);
                background-size: cover ;
                background-repeat: no-repeat;
                font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
        .w3-lobster {
                font-family: "Lobster", serif;
                
        }

    </style>
    <body><center>
    <div class="w3-container w3-lobster">
            <p class="w3-xxxlarge" style="color:black; margin-left: 7%; margin-right: 50%; margin-top: 1.5%; margin-bottom : 2%; ">Welcome to Beauty Blossom !! </p>
            
        </div><br><br>
        <br>
            <a href="Salon_frames.html" style="font-size: 40; color: white;"> Click here to go ahead </a><br> 
            
    </body></center>
</html>
