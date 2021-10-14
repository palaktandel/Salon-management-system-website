<?php
require("db_connect.php");

function getuser($user_id)
{
    $array=array();
    $q=mysql_query("SELECT * FROM `signup_table` WHERE user_id=".$user_id);
    while($r = mysql_fetch_Assoc($q))
    {
        $array['user_id'] = $row['user_id'];
        $array['username'] = $row['username'];
        $array['name'] = $row['name'];
        $array['age'] = $row['age'];
        $array['email'] = $row['email'];
        $array['phone'] = $row['phone'];
    }
    return $array;
}
?>