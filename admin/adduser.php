<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>

<?php if(!Session::get('userRole')=='1'){
    echo "<script>window.location='index.php';</script>";
}
?>

        

        <?php include 'inc/footer.php';?>
