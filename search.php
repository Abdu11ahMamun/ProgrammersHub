<?php include'inc/header.php';?>
<?php
     if(!isset($_GET['search'])|| $_GET['search']==NULL){
         header("Location: 404.php");
     }else{
         $search=$_GET['search'];
     }
?>

<div class="contentsection contemplete clear">
<div class="maincontent clear">
