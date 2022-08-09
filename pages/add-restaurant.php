<?php

$page_roles = array('admin', 'restaurant'); //step 1

require_once 'dbinfo.php';
require_once 'checkSession.php';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

echo <<<_END
<a href="logout.php">Logout</a>
<form action="add-restaurant.php" method="post"<pre>
	ID: <input type="text" name="r_id"></br></br>
	Name: <input type="text" name="r_name"></br></br>
	Password: <input type="text" name="r_password"></br></br>
	Description: <input type="text" name="r_description"></br></br>
	Address: <input type="text" name="address"></br></br>
	Phone: <input type="text" name="phone"></br></br>
	Email: <input type="text" name="r_email"></br></br>
	Type: <input type="text" name="r_type"></br></br>
	Rating: <input type="text" name="r_rating">/5</br></br>
	Follower Count: <input type="text" name="r_follower_count"></br></br>
	Image: <input type="text" name="r_img"></br></br>
	
	<input type="submit" name="Add a Restaurant"">
	</br></br>
	<a href="view-restaurants.php" >Back</a>
</pre></form>
_END;


if(
	isset($_POST['r_id']) &&
	isset($_POST['r_name']) &&
	isset($_POST['r_password']) &&
	isset($_POST['r_description']) &&
	isset($_POST['address']) &&
	isset($_POST['phone']) &&
	isset($_POST['r_email']) &&
	isset($_POST['r_type'])&&
	isset($_POST['r_rating']) &&
	isset($_POST['r_follower_count']) &&
	isset($_POST['r_img'])
	)
	 {
		$r_id=get_post($conn, 'r_id');
		$r_name=get_post($conn, 'r_name');
		$r_password=get_post($conn, 'r_password');
		$r_description=get_post($conn, 'r_description');
		$address=get_post($conn, 'address');
		$phone=get_post($conn, 'phone');
		$r_email=get_post($conn, 'r_email');
		$r_type=get_post($conn, 'r_type');
		$r_rating=get_post($conn, 'r_rating');
		$r_follower_count=get_post($conn, 'r_follower_count');
		$r_img=get_post($conn, 'r_img');
		
		$query="INSERT INTO restaurants (r_id, r_name, r_password, r_description, address, phone, r_email, r_type, r_rating, r_follower_count, r_img) VALUES ".
			"('$r_id', '$r_name', '$r_password','$r_description','$address','$phone','$r_email', '$r_type', '$r_rating', '$r_follower_count','$r_img')";
		$result=$conn->query($query);
		if(!$result) echo "INSERT failed: $query <br>" .
			$conn->error . "<br><br>";
	
    header("Location: view-restaurants.php");
	
}

$conn->close();

function get_post($conn, $var) {
	return $conn->real_escape_string($_POST[$var]);
}

?>