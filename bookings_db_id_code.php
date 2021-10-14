<?php  
session_start();

if(isset($_POST['submit']))  
{  
$host="localhost";
$username="root";   
$word="";  
$db_name="Salon project";  
$tbl_name="bookings_final"; //table name  

$con=mysqli_connect("$host", "$username", "$word","$db_name")or die("cannot connect");//connection string  
$checkbox1 = $_POST['services'];



$username = $_POST['username'];
$date = $_POST['date']; 
$time=$_POST['time']; 
$package = $_POST['package'];
$stylist = $_POST['stylist'];
$suggestion = $_POST['suggestion'];
$chk = "";

$r="SELECT booking_id FROM bookings_final";
$result=mysqli_query($con, $r);

if (mysqli_query($con, $in_ch)) 
{
$last_id = mysqli_insert_id($con);
}

foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1." ";  
   }  
 
   if(isset($_POST['submit']))
   {
$in_ch=mysqli_query($con,"insert into bookings_final (username, date, time, services, package, stylist, suggestion) values ('$username' , '$date' , '$time' ,'$chk', '$package', '$stylist','$suggestion')");  
if($in_ch==1)  
   {  
      echo'<script>alert("Inserted Successfully")</script>';
      echo '<br><center><b><p style="color: black;font-size: 30;"> Your appointment has been scheduled. <br><br><br>  </p><p style="font-size: 70; color: black;">THANK YOU FOR CHOOSING US!! </p></b></center>';  
      echo 'Welcome '.$username. ' Your booking_id is : '.$last_id;
      echo $last_id;
   }  
else  
   {  
      echo'<a><script>alert("Failed To Insert")</script></a>'; 
      echo '<br><center><b><p style="color: black;font-size: 30;"> There has been some error. Please check the username entered again, the username entered must be a registered username. Please try again !! <br><br><br>  </p> <p style="font-size: 70; color: black;">SORRY FOR THE INCONVENIENCE !! THANK YOU !</p></b></center>';  
   }  
}  
}
?>  

<html>

    <style>
        body{
           background-image: url("Salon_project/login17.jpg");
           background-size: cover;
           background-repeat: no-repeat;
        }
    </style>

    
</html>