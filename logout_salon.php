<?php
session_start();
if(session_destroy()) {
 header("Location: index5.php");
}
?>