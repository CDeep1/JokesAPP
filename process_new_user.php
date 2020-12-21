<?php

include "db_conn.php";

$new_username = $_GET['username'];
$new_password1 = $_GET['password1'];
$new_password2 = $_GET['password2'];

echo"<h2>Trying to add a new user " . $new_username . " pw = " . $new_password1 . " and " . $new_password2 . "</h2>";

if($new_password1 != $new_password2)
{
	echo "The password do no match. Please try again";
	exit;
}


preg_match('/[0-9]+/', $new_password1, $matches);
if(sizeof($matches) == 0)
{
	echo "The password must contain atleast one mumber <br>";
	exit;
}

preg_match('/[!@#$%^&*()]+/', $new_password1, $matches);
if(sizeof($matches) == 0)
{
	echo "The password must contain atleast one special character <br>";
	exit;
}

if(strlen($new_password1) <= 8)
{
	echo "The password must be atleast 8 characters long <br>";
	exit;
}


//insert a new user
$sql = "SELECT * FROM users WHERE username = '$new_username'";

$result = $mysqli->query($sql) or die (mysqli_error($mysqli));

if($result->num_rows > 0){
	
	echo "The username " . $new_username . " is already in the database. Can't register twice!";
	exit;
}

$sql = "INSERT INTO users (id, username, password) VALUES (null, '$new_username', '$new_password1')";

$result = $mysqli->query($sql)or die (mysqli_error($mysqli));

if($result){
	echo "Registration success";
}
else{
	echo "Something went wrong. not registered";
}


echo "<a href = 'index.php'>Return to main</a>";


?>