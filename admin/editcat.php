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
 <div class="grid_10">
		
        <div class="box round first grid">
            <h2>Update Category</h2>
           <div class="block copyblock"> 
               
               
               <?php
               //fetch the category
               $query = "select * from tbl_category where id=$id order by id desc"; 
               $category = $db-> select($query);
               while ($result = $category->fetch_assoc())
               {
               ?>
             <form action="" method="post">
                <table class="form">					
                    <tr>
                        <td>
                            <input type="text" name="name" value="<?php echo $result['name'];?>" class="medium" />
                        </td>
                    </tr>
                    <tr> 
                        <td>
                            <input type="submit" name="submit" Value="Save" />
                        </td>
                    </tr>
                </table>
                </form>
                <?php } ?>
            </div>
        </div>
    </div>

<?php include 'inc/footer.php';?>