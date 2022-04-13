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
