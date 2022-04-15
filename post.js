<?php include'inc/header.php';?>
<?php
 if (!isset($_GET['id']) || $_GET['id'] ==NULL){
	 header("Location: 404.php");
 }else{
	 $id = $_GET['id'];
 }
?>
<div class="contentsection contemplete clear">
<div class="maincontent clear">
<div class="about">

</div>
</div>
</div>
<?php include'inc/sidebar.php'; ?>
<?php include'inc/footer.php'; ?>	