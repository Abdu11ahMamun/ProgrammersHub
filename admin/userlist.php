<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>

        <div class="grid_10">
            <div class="box round first grid">
                <h2>User List</h2>



                <div class="block">
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Serial No.</th>
							<th>Name</th>
							<th>Username</th>
							<th>Email</th>
							<th>Details</th>
							<th>Role</th>
							<th>Action</th>
						</tr>
					</thead>
					
				</table>
               </div>
            </div>
        </div>
        <script type= "text/javascript">
        $(document).ready(function()
        {
            setupLeftMenu();
            $('.datatable').dataTable();
            setSidebarHeight();
        });
        </script>
<?php include 'inc/footer.php';?>
