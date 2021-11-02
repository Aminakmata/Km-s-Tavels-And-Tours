<?php
session_start();
include "includes/connect.php";
include "includes/functions.php";
include "includes/debug.php";

// echo "{$_SESSION['id']}";
if ($_SESSION['loggedin']) {
	$query = "SELECT passenger_id, firstname, surname, emali, date_of_birth from passengers where passenger_id = {$_SESSION['id']}";
	$result = mysqli_query($con, $query);
	$row = mysqli_fetch_array ($result);
	// echo "{$_SESSION['firstname']}";

}
?>
<!doctype html>
<html>

<head>
	<title>Km's Travels and Tours</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="main/styles.css">
</head>

</body>

<div id="wrapper">

<header>
	<?php include "includes/header.php"; ?>
	<p>Profile Page</p>
</header>

<nav>
	<?php include "includes/nav.php"; ?>
</nav>

<main>
	<div id="ErrorMessage">
	<?php
		echo $_SESSION['errorMessage'];
	?>
<form method="post" action ="profile_process.php">

<ol>
<li>
	<input type="hidden" id="passenger_id" name="passenger_id" value="<?php echo $_SESSION['id'];?>">
</li>
<li>
	<label for="firstname">Firstname</label>
	<input type="text" name="firstname" id="firstname" value='<?php echo "{$_SESSION['firstname']}"?>'>
<li>
	<label for="surname">Surname</label>
	<input type="text" name="surname" id="surname"value='<?php echo "{$_SESSION['surname']}"?>'>
<li>
	<label for="email"> Email Address</label>
	<input type="email" name="email" id="email" value='<?php echo "{$_SESSION['email']}"?>'>
</li>
<li>
	<label for="date_of_birth">Date Of Birth</label>
	<input type="date_of_birth" name="date_of_birth" id="date_of_birth" value='<?php echo "{$_SESSION['date_of_birth']}"?>'>
</li>

	<label for="submit">&nbsp;</label>
	<input type="submit" name="submit" value="Update Profile">

</ol>

</form>

</div> 

</main>
</div> <!-- End of Wrapper -->
</body>
</html>
