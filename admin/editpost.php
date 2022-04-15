<?php include 'inc/header.php'; ?> 
<?php include 'inc/sidebar.php'; ?> 

<div class="grid_10"> <div class="box round first grid">
<h2>Update Post</h2>

        <div class="block"> 
                     
        <form action="" method="post" enctype="multipart/form-data">
            <table class="form">
            
                <tr>
                    <td>
                        <label>Title</label>
                    </td>
                    <td>
                        <input type="text" name="title" value="<?php echo $postresult['title']; ?>" class="medium" />
                    </td>
                </tr>
            
                <tr>
                    <td>
                        <label>Category</label>
                    </td>
                    <td>
                        <select id="select" name="cat">
                            <option >Select Category</option>
                        
                            
                            value="<?php echo $result['id']; ?>"><?php echo $result['name']; ?></option>
                   
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Upload Image</label>
                    </td>
                    <td>
                        <img src="<?php echo $postresult['image']; ?>" height="50px" width="100px"> <br>
                        <input type="file" name="image" />
                    </td>
                </tr>
                <tr>
                    <td style="vertical-align: top; padding-top: 9px;">
                        <label>Content</label>
                    </td>
                    <td>
                        <textarea class="tinymce" name="body" >
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
                        <input type="text" name="tags" value="<?php echo $postresult['tags']; ?>" class="medium" />
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>Author</label>
                    </td>
                    <td>
                        

                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" Value="Save" />
                    </td>
                </tr>
            </table>
            </form>
            
        </div>
    </div>
</div>
<

<?php include 'inc/footer.php';?>
