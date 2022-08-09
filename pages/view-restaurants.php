<?php 

$page_roles = array('admin', 'restaurant'); // Step 1

require_once 'dbinfo.php';
require_once 'checksession.php';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);


$query = "SELECT * from restaurants";
$result = $conn ->query($query);
if (!$result) die ($conn -> error);

echo <<<_END
	<a href="add-restaurant.php">Add Restaurant</a>
	
_END;

$rows=$result->num_rows;
for($j=0; $j<$rows; $j++) {
	$result->data_seek($j);
	$row=$result->fetch_array(MYSQLI_BOTH);
	$imagepath = $row['r_img'];

	echo <<<_END
    <div class="block">
    <div class="r-div">
	<h1>
    <img src='$imagepath' class='r-img'><br>
		Restaurant Name: $row[r_name]<br>
        Category: $row[r_type]<br>
        Rating: $row[r_rating]/5<br>
	</h1>
    <a href="restaurant.php?r_id=$row[r_id]">View Restaurant</a>
    </div>
    <form action="delete-restaurant.php?r_id=$row[r_id]" method="post">
	<input type="hidden" name="delete" value="yes">
	<input type="hidden" name="r_id" value="$row[r_id]">
	<input type="submit" value="Delete Restaurant">
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