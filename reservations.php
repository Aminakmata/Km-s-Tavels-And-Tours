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
</header>

<nav>
  <?php  include "includes/nav.php"; ?>
</nav>
 <form method="post" action="reservation_process.php">

<?php
// (A) PROCESS RESERVATION
if (isset($_POST['date'])) {
  require "2-reserve.php";
  if ($_RSV->save(
    $_POST['date'], $_POST['slot'], $_POST['name'],
    $_POST['email'], $_POST['tel'], $_POST['notes'])) {
     echo "<div class='ok'>Reservation saved.</div>";
  } else { echo "<div class='err'>".$RESERVE->error."</div>"; }
}
?>
<ol>
<!-- (B) RESERVATION FORM -->
<h1>RESERVATION</h1>
<form id="resForm" method="post" target="_self">
<li>
  <label for="res_name">Name</label>
  <input type="text" required name="res_name" value="John Doe"/>
</li>
<li>
  <label for="res_email">Email</label>
  <input type="text" required name="res_email" value="john@doe.com"/>
</li>
<li>
  <label for="res_tel">Telephone Number</label>
  <input type="text" required name="res_tel" value="123456789"/>
</li>
<li>
  <label for="res_notes">Notes (if any)</label>
  <input type="text" name="res_notes" value="Testing"/>
</li>
<li>
  <label>Reservation Date</label>
  <input type="date" required id="res_date" name="res_date" value=" <?=date("Y-m-d")?>">
</li>
<li>
  <label>Reservation Slot</label>
  <select name="slot">
  <option value="AM">AM</option>
  <option value="PM">PM</option>
</select></li>
  </select>
  <label for="submit">&nbsp;</label>
  <input type="submit" id="submit" name="submit" value=" RESERVE">
</form>
</ol>
