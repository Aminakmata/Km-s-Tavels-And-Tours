<h1>Km's Travels & Tours</h1>
<?php
if(!$_SESSION['loggedin']){
?>

	<div id="logInForm">
		<form method="post" action="login_process.php">
			<input type="text" id="username" name="username" placeholder="username">
			<input type="password" id="password" name="password" placeholder="password">
			<input type="submit" id="submit" name="submit" value="Log In">
		</form>
<?php
	}
?>
	</div>
	<?php if ($debugOn) echo debugMessage($con); 


