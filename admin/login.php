<?php
include '../lib/Session.php';
Session::init(); //access in the session
?>
<?php include '../config/config.php';?>
<?php include '../lib/Database.php';?>
<?php include '../helpers/Format.php';?>
<?php
     $db=new Database();
	 $fm=new Format();
?>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css" media="screen" />
</head>
<body>
<div class="container">
	<section id="content">
    <?php
		   if($_SERVER['REQUEST_METHOD'] =='POST'){
			$username=$fm->validation($_POST['username']);
			$password=$fm->validation(md5($_POST['password']));

			$username=mysqli_real_escape_string($db->link,$username);
			$password=mysqli_real_escape_string($db->link,$password);

		   }
		?>
		<form action="login.php" method="post">
			<h1>Admin Login</h1>
			<div>
				<input type="text" placeholder="Username" required="" name="username"/>
			</div>
			<div>
				<input type="password" placeholder="Password" required="" name="password"/>
			</div>
			<div>
				<input type="submit" value="Log in" />
			</div>
		</form><!-- form -->
		<div class="button">
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
</html>
