<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php
if(!isset($_GET['catid']) || $_GET['catid'] == NULL)
{
    echo "<script>window.location = 'catlist.php'; </script>"; // if no id is found return to catlist page

}
else
{
    $id = $_GET['catid'];
}

?>


<?php include 'inc/footer.php';?>