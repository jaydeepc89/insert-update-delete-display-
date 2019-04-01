<?php 

	session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard Page</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body background-color="red">
<div class="container">

	<body>
   	<center>
      <h4>Welcome You Are Log In Succefully , <?php  echo $_SESSION["email"]; ?></h4> 
      <button><a href = "logout.php">LogOut</a></button>
  	</center>
	
</div>
</body>
</html>