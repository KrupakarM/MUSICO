<?php

session_start();  
$name = $_POST['user'];
$pass = $_POST['password'];

$con = mysqli_connect('localhost','root','12345');

mysqli_select_db($con, 'userregistration');
 

$s= "select * from try where name = '$name' && password ='$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);  

if($num == 1){
	$_SESSION['username']=$name;
	header('location:home.php');
}else{
	header('location:login.php');
	echo" incorrect password";
}

?> 