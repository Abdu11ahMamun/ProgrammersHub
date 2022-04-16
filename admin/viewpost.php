<?php include 'inc/header.php'; ?> 
<?php include 'inc/sidebar.php'; ?> 
<?php
if (!isset($_GET['viewpostid'])|| $_GET['viewpostid'] == NULL) {
    echo "<script>window.location = 'postlist.php';</script>"; 
}else {
    $postid = $_GET['viewpostid'];
}?>
<div class="grid_10"> <div class="box round first grid">
<h2>Update Post</h2>
<?php
 if ($_SERVER['REQUEST_METHOD']=='POST'){
    echo "<script>window.location = 'postlist.php';</script>"; 

}
?>
        <div class="block"> 
            <?php $query = "select * from tbl_post where id='$postid' order by id desc";
             $getpost= $db->select($query);
             while($postresult= $getpost->fetch_assoc()){
            ?>              
        <form action="" method="post" enctype="multipart/form-data">
            <table class="form">
            
                <tr>
                    <td>
                        <label>Title</label>
                    </td>
                    <td>
                        <input type="text" readonly value="<?php echo $postresult['title']; ?>" class="medium" />
                    </td>
                </tr>
            
                <tr>
                    <td>
                        <label>Category</label>
                    </td>
                    <td>
                        <select id="select" readonly>
                            <option >Select Category</option>
                            <?php 
                                $query= "SELECT * from tbl_category";
                                $category= $db->select($query);
                                if($category){
                                    while($result= $category->fetch_assoc()){

                            ?>
                            <option 
                            <?php
                                if($postresult['cat']==$result['id']){ ?>
                            selected="selected"
                            <?php    }
                            ?>
                            
                            value="<?php echo $result['id']; ?>"><?php echo $result['name']; ?></option>
                            <? }} ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Image</label>
                    </td>
                    <td>
                        <img src="<?php echo $postresult['image']; ?>" height="50px" width="100px"> <br>
                      
                    </td>
                </tr>
                <tr>
                    <td style="vertical-align: top; padding-top: 9px;">
                        <label>Content</label>
                    </td>
                    <td>
                        <textarea class="tinymce" readonly >
                            <?php echo $postresult['body']; ?>
                        </textarea>
                    </td>
                </tr>

                <td>
                <tr>
                    <td>
                        <label>Tags</label>
                    </td>
                    <td>
                        <input type="text" readonly value="<?php echo $postresult['tags']; ?>" class="medium" />
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>Author</label>
                    </td>
                    <td>
                        <input type="text" readonly value="<?php echo $postresult['author']; ?>" class="medium" />
                        <input type="hidden" readonly value="<?php echo Session::get('userId')?>" class="medium" />

                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" Value="OK" />
                    </td>
                </tr>
            </table>
            </form>
            <?php }?>
        </div>
    </div>
</div>
<!-- Load TinyMCE -->
<script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'a11ychecker advcode casechange export formatpainter image editimage linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tableofcontents tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter image editimage pageembed permanentpen table tableofcontents',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
    });
  </script>

<?php include 'inc/footer.php';?>
