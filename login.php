<?php 

//So here i set a variable for the localhost, user, and password, not really necessry
$host = "localhost";
//when you first launch the program for setting up a localhost your user name = root and pass is blank
$user = "root";
$password="";
//This should be the name of your database that you created
$db = "signup";

//here i use the variables i made early to create a connection with the server.
$con = mysql_connect ($host, $user, $password);
mysql_select_db($db);

if(isset($_POST['user'])) {
	//Here you are declaring a new variable for the class user and password from your login form
	$uname = $_POST['user'];
	$pass = $_POST['password'];
	
	//This is telling the program to select the following that from the database called signuptable
	$s = " select * from signuptable where user = '".$uname."' AND password = '".$pass."' limit 1";

	//here you create a new variable for the data selected.
	$result = mysql_query($s);

	//Here we use an if state to determine what the program should if the input is correct or wrong
	if(mysql_num_rows($result)==1){
		//To load the welcome page or the homepage.
		header ('location: paul.htm');
	}
	else{
		//here to load the login page again.
		header ('location:login.php');
	}
	
}
?>



<html>

<head>
		<title>Login Page </title>
		<link rel = "stylesheet" type = "text/css" href = "style.css">
		<link rel = "stylesheet" type = "text/css" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		
</head>

<body>
<div class = "container">
	<div class = "login-box">
	<div class = "row">
	<div class = "col-md-6">
		<h1>Log In Here</h1>
		<form method = "post">
		
			<div class = "form-group">
			<label>Username</label>
			<input type = "text" name = "user" class = "form-control" required>
			</div>
			
			<div class = "form-group">
			<label>Password</label>
			<input type = "password" name = "password" class = "form-control" required>
			</div>
			
			<button type = "submit" class = "btn btn-primaru">Sign Up</button>
		</form>
	</div>
	</div>
	</div>
</div>

</body>


</html>
