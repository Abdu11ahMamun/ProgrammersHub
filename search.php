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
<?php
    $query= "SELECT * FROM tbl_post where title LIKE '%$search%' OR body LIKE '%$search%'";
    $post=$db->select($query);
    if($post){
        while($result=$post->fetch_assoc()){
    ?>
