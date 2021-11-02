<?php
session_start();
include "includes/connect.php";
include "includes/functions.php";
include "includes/debug.php";

if($_SESSION['loggeedin']){
	$query = "UPDATE passengers SET firstname, surname, enail, address, phone_number, date_of_birth WHERE passenger_id = {$_SESSION['id']}";

	$result = mysqli_query ($con, $query);
	$row= mysqli_fetch_rray ($result);

	$firstname = $row['firstname'];
	$surname = $row['surname'];
	$email = $row['email'];
	$address = $row['address'];
	$phone_number = $row['phone_number'];
	$date_of_birth = $row['date_of_birth'];

}else{
	header ("location: register_process.php");
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
<form method="post" action ="profil_process.php">
<ol>
<li>
	<label for="firstname">Firstname</label>
	<input type="text" name="firstname" id="firstname" value="<?php echo $row['firstname'];?>">
<li>
	<label for="surname">Surname</label>
	<input type="text" name="surname" id="surname"value="<?php echo $row['surname'];?>">
<li>
	<label for="email"> Email Address</label>
	<input type="email" name="email" id="email" value="<?php echo $row['email'];?>">
</li>
<li>
	<label for="address">Address</label>
	<input type="address" name="address" id="address" value="<?php echo $row['address'];?>">
</li>
<li>
	<label for="phone_number"> Phone number</label>
	<input type="phone_number" name="phone_number" id="phone_number" value="<?php echo $row['phone_number'];?>">
</li>
<li>
	<label for="date_of_birth">Date Of Birth</label>
	<input type="date_of_birth" name="date_of_birth" id="date_of_birth" value="<?php echo $row['date_of_birth'];?>">
</li>
<li>
	<label for="city">City</label>
	<input type="city" name="city" id="city" value="<?php echo $row['city'];?>">
</li>

<li>
	<label for="postcode">Postcode</label>
	<input type="postcode" name="postcode" id="postcode" value="<?php echo $row['postcode'];?>">
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