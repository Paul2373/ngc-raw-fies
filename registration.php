<?php

//Will add cmment later if you want @Michael
session_start();
header('location: login.php');
$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con,'signup');

$name = $_POST['name'];
$user = $_POST['user'];
$email = $_POST['email'];
$pass = $_POST['password'];

$s = " select * from signuptable where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 1) {
	echo "User name notavailable";
	
}else {
	$reg = " insert into signuptable(name, user, email, password) values ('$name', '$user', '$email', '$pass')";
	mysqli_query($con, $reg);
	echo "Registration Successful";
	
}
	
?>