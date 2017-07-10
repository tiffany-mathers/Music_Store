<!DOCTYPE html>
<!-- thankYou.php -->
<!-- Sep 17, 2016 -->
<html>
<head>
<title>Purchase Complete</title>
</head>
<body bgcolor="#FAFAD2">
<h1 style="color:DodgerBlue"><center>Purchase Complete</center></h1><br><br>
<h3 style="color:DodgerBlue"><center> Thank you for placing an order with Music Store!</center></h3>
<h4><center> Please press the button below if you wish to log out</center> </h4>
<?php
session_start();
		$username = $_SESSION['appusername'];
		$email = $_SESSION['appemail'];
		$password = $_SESSION['apppassword'];

?>
<form name='logout' method='post' action='storeLogout.php'>
	<center><input name='btnsubmit' type='submit' value='Logout'></center>
</form>
	

</body>
</html>
