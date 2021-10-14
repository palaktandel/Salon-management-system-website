<?php

$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "Salon project";

$conn = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database);
?>

<?php
$booking_id = $_GET['booking_id'];
$query = "SELECT * FROM bookings WHERE `booking_id`='$booking_id'  ";
$run=mysqli_query($conn,$query);

if($run==true){
    while ($data=mysqli_fetch_assoc($run)){
        $id =$data['booking_id'];
		$query="DELETE FROM `bookings` WHERE `booking_id`='$id'";
		
    
            $run=mysqli_query($conn, $query);
            if($run==true){
                ?>
                <script>
                    alert('Booking Cancelled');
                    window.open('Salon_frames.html','_self');
                </script>
                <?php
            } else {
                ?>
                <script>
                    alert('Booking Cannot Be Cancelled At This Moment');
                    window.open('bookings_db_connect.php');
                </script>
                <?php
            }
        }
    }

?>

<html>
<form action="cancel2.php" method="GET">


<input type="text" name="booking_id" placeholder="Booking_id" id="booking_id">
<input type="submit" value="submit" name="submit" id="submit" >
</form>
</html>

