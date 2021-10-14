<?php

$con = mysqli_connect("localhost", "root", "") or die("conection error");
mysqli_select_db($con, "sample1") or die("dbase error");

if (isset($_POST['subbtn'])) {

    $r      = "SELECT roll_no FROM admission_form";
    $result = mysqli_query($con, $r);
    if (mysqli_query($con, $r)) {
        $last_id = mysqli_insert_id($con);
    }


    $n = $_POST['txtname'];
    $f = $_POST['txtfac'];
    $s = $_POST['txtsem'];

    $sql = "insert into admission_form(name,faculty,semester) values ('$n','$f','$s')";
    mysqli_query($con, $sql);



    echo "<table border=1>
            <th>RollNo</th>
            <th>Name</th>
            <th>Faculty</th>
            <th>Semester</th>";



    echo "<tr>";

    echo "<td>";
    echo $last_id;
    echo "</td>";

    echo "<td>";
    echo $n;
    echo "</td>";

    echo "<td>";
    echo $f;
    echo "</td>";

    echo "<td>";
    echo $s;
    echo "</td>";

    echo "<br>";


}
?>

<html>

<head></head>

<body>
    <form name="f1" action="" method="POST">
        RollNo:
        <input type="text" name="txtroll" readonly> Name:
        <input type="text" name="txtname"> Faculty:
        <input type="text" name="txtfac"> Semester:
        <input type="text" name="txtsem">
        <input type="submit" value="done" name="subbtn">
    </form>
</body>

</html>