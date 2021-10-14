<?php

$con=mysqli_connect("localhost","root","")or die("conection error");
mysqli_select_db($con,"salon project")or die("dbase error");

$checkbox1 = $_POST['services'];

$username = $_POST['username'];
$date = $_POST['date']; 
$time=$_POST['time']; 
$package = $_POST['package'];
$stylist = $_POST['stylist'];
$suggestion = $_POST['suggestion'];
$chk = "";



foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1." ";  
   }  

if(isset($_POST['submit']))
{

 $sql="insert into bookings_last(username, date, time, services, package, stylist, suggestion) values ('$username' , '$date' , '$time' ,'$chk', '$package', '$stylist','$suggestion')";



$in_ch=mysqli_query($con, $sql);
if($in_ch==1)  
   {  
    $last_id = mysqli_insert_id($con);
      echo'<script>alert("Inserted Successfully")</script>';
      echo '<br><center><b><p style="color: black;font-size: 30;"> Your appointment has been scheduled. <br>  </p><p style="font-size: 70; color: black;">THANK YOU FOR CHOOSING US!! </p></b></center>';  
      
  




$r="SELECT booking_id FROM bookings_last";
$result=mysqli_query($con, $r);


echo        "<table border=0 class='book'>
        <th class='book'>Booking_id</th>
        <th class='book'>Username</th>
        <th class='book' >Date</th>
        <th class='book'>Time</th>";



    echo "<tr>";

    echo "<td class='book1'>";
    echo $last_id ;
    echo "</td>";

    echo "<td class='book'>";
    echo $username;
    echo "</td>";

    echo "<td class='book'>";
    echo $date;
    echo "</td>";

    echo "<td class='book'>";
    echo $time;
    echo "</td>"; 

    echo "<br>";


}  
else  
   {  
      echo'<a><script>alert("Failed To Insert")</script></a>'; 
      echo '<br><center><b><p style="color: lightsalmon ;font-size: 30;"> There has been some error. Please check the username entered again, the username entered must be a registered username. Please try again !! <br><br><br>  </p> <p style="font-size: 70; color: lightsalmon;">SORRY FOR THE INCONVENIENCE !! THANK YOU !</p></b></center>';  
   }  


}
?>
<html>

<style>
    body{
       background-image: url("Salon_project/login17.jpg");
       background-size: cover;
       background-repeat: no-repeat;
       color: black;
    }
    table.book{
        padding: 12px 10px;
        border-radius: 1cm;
        background-color:rgba(247, 244, 244, 0.658);
        margin-left: 25%;
    }
    th.book{
        padding: 12px;
        border-color: aqua;
        font-size: 30;
    }
    td.book{
        padding: 12px;
        border-color: aqua;
        font-size: 30;
    }
    td.book1{
        padding: 12px;
        border-color: aqua;
        font-size: 30;
        color: black;
    }
    
</style>


</html>

