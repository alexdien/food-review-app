
<html lang="en">

<head>
    <style>
        <?php include '../css/style.css';
        ?>
    </style>
</head>

<body>
    <!-- navbar start -->
    <header class="header">
        <a href="index.php" class="logo">tasti <img src="icon.png" alt="icon" class="icon"></a>

        <div id="menu-bar" class="fas fa-bars"></div>

        <nav class="navbar">
            <a style="--i:0;" href="index.php">Home</a>
            <a style="--i:1;" href="view-restaurants-member.php">View Restaurants</a>
            <a style="--i:2;" href="view-restaurants.php">Delete Restaurants</a>
            <a style="--i:3;" href="fooditem-review-member.php">View Food Reviews</a>
            <a style="--i:4;" href="fooditem-review.php">Delete Food Reviews</a>
            <a style="--i:5;" href="contact.php">Contact Us</a>
        </nav>

<a style="--i:5;" href="logout.php" class="i-logout">Logout</a>
    </header>
    <!-- navbar end -->
</body>

</html>

<?php

require_once 'dbinfo.php';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

echo <<<_END
<form action="contact.php" method="post"
<div class="c-row">
	Name: <input type="text" name="name"></br></br>
	Email: <input type="text" name="email"></br></br>
	Message: <input type="text" name="message"></br></br>
	
	<input type="submit" name="Send Message">
	</br></br>
</div>
</form>
_END;


if(isset($_POST['name']) &&
	isset($_POST['email']) &&
	isset($_POST['message'])) {
		$name=get_post($conn, 'name');
		$email=get_post($conn, 'email');
		$message=get_post($conn, 'message');
		
		$query="INSERT INTO contact ( name, email, message) VALUES ".
			"('$name','$email','$message')";
		
            $result=$conn->query($query);

		if(!$result) echo "INSERT failed: $query <br>" .
			$conn->error . "<br><br>";
	
		//header("Location: contactrecordview.php");
		exit();
}

$conn->close();

function get_post($conn, $var) {
	return $conn->real_escape_string($_POST[$var]);
}

?>