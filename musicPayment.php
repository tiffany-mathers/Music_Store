<!DOCTYPE html>
<!-- musicPayment.php -->
<!-- Sep 15, 2016 -->
<html>
<head>
<title>Music Store Checkout</title>
</head>

<body bgcolor="#FAFAD2">

<h1 style="color:DodgerBlue"><center>Music Store Checkout! </center></h1>

<br>
<br>

<center><img src="http://www.mid-east-music.com/imagesdoor/musicstore.jpg" /></center>

<br>
<br>

<table cellspacing="30" align="center">
<form name="main" method="post" action="thankYou.php">
	<?php
		session_start();
		$username = $_SESSION['appusername'];
		$email = $_SESSION['appemail'];
		$password = $_SESSION['apppassword'];

	?>
	<tr>	
		<td>Thank you <?php echo $username ?>!</td>
	</tr>
	<tr>
		<td>Your email address is <?php echo $email ?>.</td>
	</tr>
	<tr>
		<td>Please confirm your shopping cart below:</td>
	<tr>
		<td><?php

				$items = array();
				$total = 0;

				foreach($_POST['price'] as $k => $price) {
				    if(in_array($k, $_POST['count'])) {
					$items[] = $_POST['item'][$k];
					$total += $price;
				    }
				}

				$fItems = implode("<br> ", $items);
				echo $fItems . " <br></td><tr><td> Your total is: $" . $total;
			?>
		</td>
	</tr>
	<tr>
		<td>
			<center><input name="btnpurchase" type="submit" value="Purchase"></center>
		</td>
	</tr>
</table>
</form>
</body>
</html>
