<?php 

$page_roles = array('admin', 'restaurant'); // Step 1

require_once 'dbinfo.php';
require_once 'checksession.php';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);


$query = "SELECT * from food_reviews";
$result = $conn ->query($query);
if (!$result) die ($conn -> error);

echo <<<_END
	<a href="add-review.php">Post a Review</a>
	
_END;

$rows=$result->num_rows;
for($j=0; $j<$rows; $j++) {
	$result->data_seek($j);
	$row=$result->fetch_array(MYSQLI_BOTH);
	$imagepath = $row['food_img'];

	echo <<<_END
    <div class="block">
    <div class="r-div">
	<h1>
    <img src='$imagepath' class='food_img' style="width:150px; height:150px;"><br>
		Food Name: $row[food_name]<br>
        Review: $row[food_review]<br>
        Rating: $row[food_rating]/5<br>

	</h1>
    </div>
    <form action="delete-restaurant.php?review_id=$row[review_id]" method="post">
	<input type="hidden" name="delete" value="yes">
	<input type="hidden" name="review_id" value="$row[review_id]">
	<input type="submit" value="Delete Review">
	</form>
    </div>
	
_END;
}

$result->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Restaurants</title>
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