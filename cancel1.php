<?php

include("db_connect.php");

if($_REQUEST['submit'] != "")

{

$customer_id = $_REQUEST['cancellation'];

mysqli_query($conn, "delete from bookings where booking_id = $customer_id");

$customer_id = mysqli_insert_id($conn);

header("Location: index.php");

}

?>