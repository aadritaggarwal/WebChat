<?php
session_start();
include 'connectivity.php';

$uname=$_POST['uname'];
$pass=$_POST['pass'];

$sql="SELECT * FROM `sign-up` WHERE USERNAME='$uname' AND PASSWORD='$pass'";
$result = mysqli_query($conn, $sql);

if(!$row=$result->fetch_assoc()){
	header("Location:error.php");

}else{
	$_SESSION['name']=$_POST['uname'];

	header("Location:home.php");
}









?>