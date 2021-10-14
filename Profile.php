<html>
    <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    
        <style>
            div{
                color: purple;
                
            }
            table,tr,td{
                color: black;
                margin-top: 10%;
            }
        </style>
    </head>
    
</html>

<?php include "logincheck_salon.php"; ?>


<?php
 include('session_salon.php');
?>

<?php
$sql="SELECT * FROM signup_table where user_id = $loggedin_id";
$result=mysqli_query($con,$sql);
?>

<?php
while($rows=mysqli_fetch_array($result))
{
?>
<div id="signup">
<div id="signup-st">
<form action="" method="POST" id="signin" id="reg">
<div id="reg-head" class="headrg">Your Profile</div>
<table border="0" align="center" cellpadding="2" cellspacing="0">

<tr id="lg-1">
<td class="tl-1"> <div align="left" id="tb-name">User ID :</div> </td>
<td class="tl-4"><?php echo $rows['user_id']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Username :</div></td>
<td class="tl-4"><?php echo $rows['username']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Name :</div></td>
<td class="tl-4"><?php echo $rows['name']; ?></td> 
</tr>
<tr id="lg-1">
<td class="tl-1"> <div align="left" id="tb-name">Age :</div> </td>
<td class="tl-4"><?php echo $rows['age']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Phone :</div></td>
<td class="tl-4"><?php echo $rows['phone']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Email ID :</div></td>
<td class="tl-4"><?php echo $rows['email']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Password :</div></td>
<td class="tl-4"><?php echo $rows['password']; ?></td>
</tr>
</table>

</form>
</div>
</div>
<div id="login">
<div id="login-sg">
<div id="st"><a href="logout.php" id="st-btn">Log Out</a></div>
<div id="st"><a href="deleteac.php" id="st-btn">Delete Account</a></div>
</div>
</div>
<?php 
// close while loop 
}
?>