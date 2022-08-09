<?php

require_once 'user.php';

session_start(); //required if you want to create session

//check for user session
if(!(isset($_SESSION['user']))) { // user object that is in session, grabs from when the user logins in. Its already in session when the user logs in successfully. User object return.
    header("Location: login-page.php"); // go to this location
    exit(); //terminate process
}

// Step 2:

//role access 
$user = $_SESSION['user'];
$user_roles = $user->roles; //roles or getRoles(); both work

$found=0;
	foreach ($user_roles as $urole){
		foreach ($page_roles as $prole){
			if($urole==$prole){
				$found=1;
			}
		}
	}
	
    // if not found, show unauthorized page
	if(!$found){
		header("Location: unauthorized.php");
        exit(); //first process will terminate
	}
?>