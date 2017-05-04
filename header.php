<!DOCTYPE html>
<?php 	error_reporting(E_ALL);// & ~E_WARNING & ~E_NOTICE);
	ini_set('display_errors', 'off'); ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="script.js"></script>
</head>
<body>
<div id="heading">
<div id="profilediv">
<?php

?>
</div>
<div id="mainhead"> VIT Bulletin </div>
</div>


<ul class="list"><li><a href="home.php">Home</a><li><a href="yourposts.php">Your Posts</a><li><a href="addpost.php">+ Add Post</a><li><a href="logout.php">Log Out</a>

<?php
 if
 ($_SESSION['userid']) 
 { echo '<li style="float:right;"><form action="logout.php"><input type="submit" value="Logout"></form>'; } ?>

 </ul>