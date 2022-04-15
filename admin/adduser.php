<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>

<?php if(!Session::get('userRole')=='1'){
    echo "<script>window.location='index.php';</script>";
}
?>

        <div class="grid_10">

            <div class="box round first grid">
                <h2>Add New User</h2>
               <div class="block copyblock">
                  
                 <form action="" method="post">
                    <table class="form">
                        <tr>
                            <td><label>Username</label></td>
                            <td>
                                <input type="text" name="username" placeholder="Enter Usename..." class="medium" />
                            </td>
                        </tr>

                        <tr>
                            <td><label>Password</label></td>
                            <td>
                                <input type="password" name="password" placeholder="Enter Password..." class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td><label>User Role</label></td>
                            <td>
                                <select id="select" name="role">
                                    <option>Select User Role</option>
                                    <option value="1">Admin</option>
                                    <option value="2">Author</option>
                                    <option value="3">Editor</option>
                                </select>
                            </td>
                        </tr>

						<tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" Value="Create" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>

        <?php include 'inc/footer.php';?>
