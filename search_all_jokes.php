  
<head>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#accordion" ).accordion();
  } );
  </script>
</head>

<?php

include "db_conn.php";

$sql = "SELECT JokeID, Joke_question, Joke_answer, users_id1, username, google_name 

FROM jokes_table 

JOIN users ON jokes_table.users_id1 = users.id";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc())
   {
	   echo"<h3>" . $row['Joke_question'] . "</h3>";
	   echo"<div><p>". $row["Joke_answer"]. " submitted by user #". $row['users_id1']." whose name is ". $row['username'] . $row['google_name']."</p></div>";
   }
} else {
  echo "0 results";
}



?>