
<?php 
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "Salon project";

$conn = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database);
?>

<html>
<form action="" method="GET">

<input type="text" name="username" placeholder="Username" id="username">
<input type="submit" value="submit" name="submit" id="submit" >
</form>
</html>

<?php


$username = $_GET['username'];


$query ="SELECT * FROM bookings WHERE 'username'='$username'  ";
$run=mysqli_query($conn ,$query);

if($run==true){
    while ($data=mysqli_fetch_assoc($run)){
        $id =$data['username'];
		$query="DELETE FROM `bookings` WHERE `username`='$id'  " ;
		
    
            $run =mysqli_query($conn,$query);
            if($run ==true){
                ?>
                <script>
                    alert('Booking Cancelled');
                    window.open('bookings.html','_self');
                </script>
                <?php
            } else {
                ?>
                <script>
                    alert(('Booking Cannot Be Cancelled At This Moment');
                    window.open('bookings_db_connect.php');
                </script>
                <?php
            }
        }
    }

?>


