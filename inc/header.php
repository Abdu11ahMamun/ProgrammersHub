<?php include'config/config.php';?>
<?php include'lib/Database.php';?>
<?php include'helpers/Format.php';?>
<?php 
	$db= new Database();
	$fm= new Format();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Programming Hub</title>
	<meta name="language" content="English">
	<link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.css">	
	<link rel="stylesheet" href="style.css">
	<script src="js/jquery.js" type="text/javascript"></script>
</head>

<body>
	<div class="headersection templete clear">
		<a href="index.php">
			<div class="logo">
				<img src="images/pro_logo.png" alt="Logo"/>
				<h2>Programming Hub</h2>
			</div>
		</a>
		<div class="social clear">
			<div class="searchbtn clear">
			<form action="search.php" method="get">
				<input type="text" name="search" placeholder="Search keyword..."/>
				<input type="submit" name="submit" value="Search"/>
			</form>
			</div>
		</div>
	</div>
<div class="navsection templete">
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="about.php">About</a></li>	
		<li><a href="contact.php">Contact</a></li>
	</ul>
</div>