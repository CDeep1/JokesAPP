<head>


<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

include "db_conn.php";

$username = $_POST["username"];
$password = $_POST["password"];


echo "You attempted to login with " . $username . " and " . $password . "<br>";

$stmt = $mysqli->prepare("SELECT id, username, password FROM users WHERE username = ? and password = ?");
$stmt->bind_param("ss", $username, $password);

$stmt->execute();
$stmt->store_result();

$stmt->bind_result($userid, $uname, $pw);

//$sql = "SELECT id, username, password FROM users WHERE username = '$username' AND password = '$password'";

echo "SQL = " . $sql . "<br>";



if ($stmt->num_rows > 0)
{
	$row = $stmt->fetch();
	$userid = $row['id'];
	echo "Login successful!<br>";
	$_SESSION['username'] = $uname;
	$_SESSION['userid'] = $userid;
	
	echo "</div>";
}
else
{
	echo "0 Results. Nobody with that username and password";
	$_SESSION = [];
	session_destroy();
	echo"<br><a href = 'index.php'>return to main page </a>";
	
}

echo "SESSION = <br>";
echo "<pre>";
print_r($_SESSION);
echo "</pre>";



?>


<?php
while($row = $result->fetch_assoc()) 
{
    //echo "id: " . $row["JokeID"]. " - Question: " . $row["Joke_question"]. " - Answer: " . $row["Joke_answer"]. "<br>";
	echo "<h3>$row[Joke_question]</h3>";
	echo "<div><p>$row[Joke_answer]</p></div>";
}

echo "<a href = 'index.php'>  Return to main </a> <br>";


?>

</div>