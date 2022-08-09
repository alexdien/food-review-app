<html>
	<head>
	
	</head>
	
	<body>
		<form method='post' action='register.php'>
			<pre>
				First Name: <input type='text' name='forename'>
				Last Name: <input type='text' name='surname'>
				Username: <input type='text' name='username'>
				Password: <input type='text' name='password'>
                Role: <input type='text' name='role'
                placeholder='Admin, Member, or Restaurant'>
				<input type='submit' value='Register'>
			</pre>
		</form>
        <a href="login-page.php">Already have an account? Login here</a>
	</body>
</html>


<?php
//import credentials for db
require_once  'login.php';

//connect to db
$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

    if(isset($_POST['username'])) {
	//Get data from POST object
	$forename = $_POST['forename'];
	$surname = $_POST['surname'];
	$username = $_POST['username'];
	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
	$role = $_POST['role'];
    
    //hash password
	
	//echo $isbn.'<br>';
	
	$query = "INSERT INTO users (forename, surname, username, password) VALUES ('$forename', '$surname','$username', '$password')";
	//echo $query.'<br>';
	$result = $conn->query($query); 

    // query2
    $query2 = "INSERT INTO roles (username, role) VALUES ('$username', '$role')";
    $result2 = $conn->query($query2);

	if(!$result) die($conn->error);
	
	header("Location: login-page.php");
    }
?>