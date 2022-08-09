<?php

$page_roles = array('admin', 'restaurant');

require_once  'dbinfo.php';


$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);


if(isset($_POST['delete']))
{
	$r_id = $_POST['r_id'];

	$query = "DELETE FROM restaurants WHERE r_id='$r_id' ";
	
	$result = $conn->query($query); 
	if(!$result) die($conn->error);
	
	header("Location: view-restaurants.php");
	
}


?>