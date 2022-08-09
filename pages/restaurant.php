<?php

require_once  'login.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

if(isset($_GET['r_id'])){
	
$r_id = $_GET['r_id'];	

$query = "SELECT * FROM restaurants where r_id=$r_id";
$query2 = "SELECT * FROM food-reviews";

$result = $conn->query($query); 
$result2 = $conn->query($query2);

if(!$result && !$reul) die($conn->error);

echo <<<_END
    <a href="view-restaurants.php">Back</a>
	<a href="add-review.php">Add Review</a>
	
_END;

$rows = $result->num_rows;

for($j=0; $j<$rows; $j++)
{
	//$result->data_seek($j); 
	$row = $result->fetch_array(MYSQLI_ASSOC); 
	//$available = $row['available'];
	//$checked='';
	//if($available==1) $checked='checked';
	
	$name = $row['r_name'];
	//$A=$B=$C='';
	//if($category=='Classic Fiction') $A = 'selected';
	//if($category=='Non-Fiction') $B = 'selected';
	//if($category=='Play') $C = 'selected';
	
	//$genre = $row['genre'];
	//$D=$E=$F='';
	//if($genre=='action') $D = 'checked';
	//if($genre=='classics') $E = 'checked';
	//if($genre=='memoir') $F = 'checked';
	
	$imagepath = $row['r_img'];
	
echo <<<_END
	<form action='restaurant.php' method='post'>
    <div class="r-block">
	<h1>
	<img src='$imagepath' class='r-img'>
	
	Name: <input type='text' name='author' value='$row[r_name]'><br>
    Followers: <input type='text' name='year' value='$row[r_follower_count]'><br>
    Rating: <input type='text' name='year' value='$row[r_rating]/5'><br>
	Description: <input type='text' name='title' value='$row[r_description]'><br>
	Address: <input type='text' name='year' value='$row[address]'><br>
    Phone: <input type='text' name='year' value='$row[phone]'><br>
	</h1>
    <a href="edit-restaurant.php?r_id=$row[r_id]">Edit Restaurant Info</a>	
	</div>
	</form>
	
_END;

}

}

$conn->close();



?>

<html>

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
    <a class="logo">tasti<img src="icon.png" alt="icon" class="icon"></a>
    
    <div id="menu-bar" class="fas fa-bars"></div>
</header>
<!-- navbar end -->
</body>