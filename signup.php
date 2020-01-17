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


<html>

<head>
	<title>Sign up Page </title>
	<link href = "style.css" rel = "stylesheet">
		
</head>

<body>
<div class = "container">
	<div class = "signup-box">
	<div class = "row">
	<div class = "col-md-6">
		<h1>Sign up Here</h1>
		<form action = "registration.php" method = "post">
			<div class = "form-group">
			
			<label>Full Name</label><br>
			<input type = "text" name = "name" class = "form-control" required><br>
			</div>
			
			<div class = "form-group">
			<label>Username</label><br>
			<input type = "text" name = "user" class = "form-control" required><br>
			</div>
			
			
			<div class = "form-group">
			<label>Email</label><br>
			<input type = "text" name = "email" class = "form-control" required><br>
			</div>
			
			<div class = "form-group">
			<label>Password</label><br>
			<input type = "password" name = "password" class = "form-control" required><br>
			</div>
			
			<button type = "submit" class = "btn btn-primaru">Sign Up</button>
		</form>
	</div>
	</div>
	</div>
</div>

</body>


</html>
