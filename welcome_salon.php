<?php
 include('session_salon.php');
?>
<!DOCTYPE html>
<html>
<head>
 <meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
 <link rel="stylesheet" type="text/css" href="style.css" />
 
</head>
<body>
<header>
 <nav>
  <ul>
   <li><a href="https://7topics.com">7topics</a></li>
   <li><a href="https://7topics.com/creating-user-profile-page-using-php-and-mysql.html">Tutorial</a></li>
  </ul>
 </nav>
</header>
<div id="center">
<div id="center-set">
<h1 align='center'>Welcome <?php echo $loggedin_session; ?></h1>
You are now logged in. you can logout by clicking on signout link given below.
<div id="contentbox">


<?php
$sql="SELECT * FROM signup_table where user_id = $loggedin_id";
$result=mysqli_query($con, $sql);
?>

<?php
while($rows=mysqli_fetch_array($result)){
?>


<div id="signup">
<div id="signup-st">
<form action="" method="POST" id="signin" id="reg">
    
<div id="reg-head" class="headrg">Your Profile</div>
<table border="0" align="center" cellpadding="2" cellspacing="0">

<tr id="lg-1">
<td class="tl-1"> <div align="left" id="tb-name">User id :</div> </td>
<td class="tl-4"><?php echo $rows['user_id']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Username : </div></td>
<td class="tl-4"><?php echo $rows['username']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Name : </div></td>
<td class="tl-4"><?php echo $rows['name']; ?> </td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Mobile No. : </div></td>
<td class="tl-4"><?php echo $rows['phone']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Email ID : </div></td>
<td class="tl-4"><?php echo $rows['email']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Password : </div></td>
<td class="tl-4"><?php echo $rows['password']; ?></td>
</tr>
</table>

</form>
</div>
</div>
<div id="login">
<div id="login-sg">
<div id="st"><a href="logout_salon.php" id="st-btn">Log Out</a></div>
<div id="st"><a href="delete_salon.php" id="st-btn">Delete Account</a></div>
</div>
</div>
<?php 
// close while loop 
}
?>
</div>
</div>
</div>
</body>
</html>