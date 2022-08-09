<?php

$page_roles = array('admin', 'restaurant'); //step 1

require_once 'dbinfo.php';
require_once 'checkSession.php';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

echo <<<_END
<a href="logout.php">Logout</a>
<form action="add-review.php" method="post"<pre>
	Food Item: <input type="text" name="food_name"></br></br>
	Review: <input type="text" name="food_review" placeholder="Write a review!"></br></br>
	Rating: <input type="text" name="food_rating">/5</br></br>
    Image: <input type="text" name="food_img" placeholder="../images/default.jpg"></br></br>

	<input type="submit" name="Add Review">
	</br></br>
	<a href="view-restaurants.php" >Back</a>
</pre></form>
_END;


if(
	isset($_POST['food_name']) &&
	isset($_POST['food_review']) &&
	isset($_POST['food_rating']) &&
    isset($_POST['food_img'])
	)
	 {
		$food_name=get_post($conn, 'food_name');
		$food_review=get_post($conn, 'food_review');
		$food_rating=get_post($conn, 'food_rating');
        $food_img=get_post($conn, 'food_img');
		
		$query="INSERT INTO food_reviews (food_name, food_review, food_rating, food_img) VALUES ".
			"('$food_name', '$food_review', '$food_rating', '$food_img')";
		$result=$conn->query($query);
		if(!$result) echo "INSERT failed: $query <br>" .
			$conn->error . "<br><br>";
	
    header("Location: fooditem-review.php");
	
}

$conn->close();

function get_post($conn, $var) {
	return $conn->real_escape_string($_POST[$var]);
}

?>