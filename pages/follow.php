<?php

require_once 'dbinfo.php';
require_once 'checkSession.php';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);


if(isset($_POST['author']) &&
	isset($_POST['title']) &&
	isset($_POST['category']) &&
	isset($_POST['year']) &&
	isset($_POST['isbn'])) {
		$author=get_post($conn, 'author');
		$title=get_post($conn, 'title');
		$category=get_post($conn, 'category');
		$year=get_post($conn, 'year');
		$isbn=get_post($conn, 'isbn');
		
		$query="ALTER restaurants (r_follower_count) VALUES ".
			"('$r_follower_count')";
		$result=$conn->query($query);
		if(!$result) echo "INSERT failed: $query <br>" .
			$conn->error . "<br><br>";
	
	
}

$conn->close();

function get_post($conn, $var) {
	return $conn->real_escape_string($_POST[$var]);
}

?>