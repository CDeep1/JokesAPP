<html>
<header>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</header>

	<body>
		<h1>
			Login for Jokes App
		</h1>
	
	

<?php

include "db_conn.php";

//include "search_all_jokes.php";

?>



<form class="form-horizontal" action = "process_login.php" method = "post">
<fieldset>

<!-- Form Name -->
<legend>Search for a Joke</legend>

<!-- username login input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="keyword">Username</label>
  <div class="col-md-5">
    <input id="username" name="username" type="text" placeholder="your name" class="form-control input-md" required="">
    <p class="help-block">Enter your username.</p>
  </div>
</div>

<!-- pw login input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="keyword">Password</label>
  <div class="col-md-5">
    <input id="password" name="password" type="password" placeholder="password" class="form-control input-md" required="">
    <p class="help-block">Enter your password.</p>
  </div>
</div>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Login</button>
  </div>
</div>

</fieldset>
</form>


<?php
//include "search_keyword.php";



$mysqli->close();

?>



</body>

</html>