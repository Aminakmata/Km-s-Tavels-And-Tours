<?php
session_start();
include "includes/connect.php";
include "includes/functions.php";
include "includes/debug.php";
?>
<!doctype html>
<html>
  
<head>
	<title>Km's Travels & Tours</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="styles/main.css">
</head>

</body>

<div id="wrapper">

<header>
	<?php include "includes/header.php"; ?>
</header>

<nav>
	<?php  include "includes/nav.php"; ?>
</nav>

<main>
	<ol>
		<li>
			<label for="usernamer">Username</label>
			<input type="text" id="username" name="username">
		</li>
		<li>
			<label for="password">Password</label>
			<input type="text" id="password" name="password">
		</li>
		<li>
			<label for="passwordC">Confirm Password</label>
			<input type="text" id="passwordC" name="passwordC">
		</li>
		<li>
			<label for="firstname">First Name</label>
			<input type="text" id="firstname" name="firstname">
		</li>
		<li>
			<label for="surnname">Surnname</label>
			<input type="text" id="surnname" name="surnname">
		</li>
		<li>
			<label for="email">Email Address</label>
			<input type="text" id="email" name="email">
		</li>
		<li>
			<label for="phoneNum">Phone Number</label>
			<input type="text" id="phoneNum" name="phoneNum">
		</li>
		<li>
			<label for="submit">&nbsp;</label>
			<input type="submit" id="submit" name="submit" value="JOIN NOW">
		</li>
		
	</ol>
</main>

<footer>
	<?php include "includes/footer.php"; ?>
</footer>

</div> <!-- End of Wrapper -->

</body>
</html>
</form>
	