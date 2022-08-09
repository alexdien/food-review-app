<?php 

$page_roles = array('admin','member', 'restaurant'); // Step 1

require_once 'dbinfo.php';
require_once 'checksession.php';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

$user = $_SESSION['user'];
$username = $user -> username;
$query = "SELECT * from users where username = '$username'";
$result = $conn ->query($query);
if (!$result) die ($conn -> error);
$result -> data_seek(0);
$row=$result->fetch_array(MYSQLI_ASSOC);

?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurants</title>
    <!--  <link rel="icon" type="image/x-icon" href="images/favicon.ico"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <h3 style="--i:4;" class="i-welcome">Welcome, <?php echo $row['username'];?></h3>

        <a style="--i:5;" href="logout.php" class="i-logout">Logout</a>

    </header>
    <!-- navbar end -->

    <!-- home section start -->
    <section class="home" id="home">
        <div class="content">
            <h3>Find the best restaurants near you</h3>
            <p>Looking for the best food around you? Check out our selection of restaurants!</p>
            <img class="salmon" src="../images/salmon.png" alt="">
        </div>
    </section>

</body>

</html>