<?php

session_start();
//header('location:login.php'); 
$name = $_POST['user'];
$pass = $_POST['password'];

$con = mysqli_connect('localhost','root','12345');

mysqli_select_db($con, 'userregistration');
 


$s= "select * from try where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result); 

if($num == 1){
	echo" Username Already Taken";
}else{
	$reg = " insert into try values('$name','$pass')";
	mysqli_query($con, $reg);
	echo" Registration Successfull";
}


?> 