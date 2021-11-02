<?php
session_start();
include "includes/connect.php";
include "includes/functions.php";
include "includes/debug.php";
?>
<!doctype html>
<html>
  
<head>
	<title>Km's Travels And Tours</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="main/styles.css">
</head>

</body>

<div id="wrapper">

<header>
	<?php include "includes/header.php"; ?>
	<h2>Registration</h2>
</header>

<nav>
	<?php  include "includes/nav.php"; ?>
</nav>
 <form method="post" action="register_process.php">
<main>
	<div id="ErrorMessage">
		<?php
		echo $_SESSION['errorMessage'];
		?>
	<ol>
		<li>
			<label for="username">Username</label>
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
			<label for="title">Title</label>
			<input type="text" id="title" name="title">
		</li>
		<li>
			<label for="firstname">first Name</label>
			<input type="text" id="firstname" name="firstname">
		</li>
		<li>
			<label for="surname"> Surname</label>
			<input type="text" id="surname" name="surname">
		</li>
		<li>
			<label for="date_of_birth">Date of birth</label>
			<input type="text" id="date_of_birth" name="date_of_birth">
		</li>
		<li>
			<label for="email">Email Address</label>
			<input type="text" id="email" name="email">
		</li>
		<li>
			<label for="phone_number"> Phone Number</label>
			<input type="text" id="phone_number" name="phone_number">
		</li>
		<li>
			<label for="address">Address</label>
			<input type="text" id="address" name="address">
		</li>
		<li>
			<label for="city">City</label>
			<input type="text" id="city" name="city">
		</li>
		<li>
			<label for="postcode">Postcode</label>
			<input type="text" id="postcode" name="postcode">
		</li>
			<label for="submit">&nbsp;</label>
			<input type="submit" id="submit" name="submit" value=" REGISTER">
	</ol>
</main>

</div>
</div> <!-- End of Wrapper -->

</body>
</html>
</form>
	