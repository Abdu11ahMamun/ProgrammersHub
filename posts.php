<?php include'inc/header.php';?>
<?php include'inc/sidebar.php'; ?>

<?php
     if(!isset($_GET['category'])|| $_GET['category']==NULL){
         header("Location: 404.php");
     }else{
         $id=$_GET['category'];
     }
?>













<?php include'inc/footer.php'; ?>
