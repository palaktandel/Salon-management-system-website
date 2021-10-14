<?php

$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "Salon project";

$conn = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database);
?>

<?php 

$booking_id = $_GET['booking_id'];
$query = "SELECT * FROM bookings_last WHERE `booking_id`='$booking_id'  ";
$run=mysqli_query($conn,$query);

if($run==true){
    while ($data=mysqli_fetch_assoc($run)){
        
        $book_id=$_GET['booking_id'];

        $query="DELETE FROM `bookings_last` WHERE `booking_id`='$book_id' ";
        $run=mysqli_query($conn ,$query);
                    
            if($run==true){
                ?>
                <script>
                    alert('Booking Cancelled');
                    window.open('thankyou.html' , '_self');
                </script>
                <?php
            } else {
                ?>
                <script>
                    alert('Booking Cannot Be Cancelled At This Moment');
                    window.open('thankyou.html' );
                </script>
                <?php
            }
    }
}elseif($booking_id == NULL)
{
    ?>
    <script>
        alert('Please enter a booking_id');
        
    </script>
    <?php
}
    

?>

