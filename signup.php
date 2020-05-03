<?php
include 'connectivity.php';
$uname=($_POST['uname']);
$email=($_POST['Email']);
$pass=($_POST['Password']);


$sql = "INSERT INTO `sign-up`(USERNAME,EMAIL_ID,PASSWORD) VALUES('$uname','$email','$pass')";
//$result=$conn->query($sql);
$result = mysqli_query($conn, $sql);
//$query=mysqli_query($conn,$sql);

header("Location:index.php");





?>