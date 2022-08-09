<?php

$page_roles = array('admin', 'restaurant');

require_once  'dbinfo.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

if(isset($_GET['r_id'])){
	
$r_id = $_GET['r_id'];	

$query = "SELECT * FROM restaurants where r_id=$r_id ";

$result = $conn->query($query); 
if(!$result) die($conn->error);

$rows = $result->num_rows;

for($j=0; $j<$rows; $j++)
{
	//$result->data_seek($j); 
	$row = $result->fetch_array(MYSQLI_ASSOC); 
	
echo <<<_END
	
	<form action='edit-restaurant.php' method='post'>

	<pre>
	
	Name: <input type='text' name='rname' value='$row[r_name]'>
		
	</pre>	
	
		<input type='hidden' name='update' value='yes'>
		<input type='hidden' name='r_id' value='$row[r_id]'>
		<input type='submit' value='Update Info'>	
	</form>
	
_END;

}

}


if(isset($_POST['update'])){
	
    $r_id = $_POST['r_id'];
	$r_name = $_POST['rname'];

	$query = "Update restaurants set r_name='$r_name' where r_id = $r_id ";
	
	$result = $conn->query($query); 
	if(!$result) die($conn->error);
	
	header("Location: view-restaurants.php");
	
	
}

$conn->close();



?>