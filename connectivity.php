<?php

$conn=mysqli_connect("localhost","root","","webchat_data");
//if($conn)
//{
//	echo "hi";
//}
if(!$conn){
	die("CONNECTION FAILED" .mysqli_connect_error());
}



?>