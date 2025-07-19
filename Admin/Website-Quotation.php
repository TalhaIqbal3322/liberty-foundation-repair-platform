<?php include 'header.php';

if (isset($_POST['del_btn'])) {
	$del_id=$_POST['del_id'];

	$sql="DELETE FROM quotations WHERE id='$del_id'";
	if (mysqli_query($conn,$sql)) {
		// code...
		?>
		<script type="text/javascript">
			alert('Record has been deleted');
			window.location.href='';
		</script>
		<?php
	}
}

?>

<body>

<?php include 'navbar.php';?>

   <!--start sidebar-->
<?php include 'sidebar.php';?>


  <!--start main wrapper-->
  <main class="main-wrapper">
    <div class="main-content">
      <!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Quotation Details</div>
				</div>
				<!--end breadcrumb-->
				<hr>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example2" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>ID</th>
										<th>Looking</th>
										<th>Postal Code</th>
										<th>Date</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Comment</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
										<?php

									$sql="SELECT * FROM quotations ORDER BY id DESC";
									$data=mysqli_query($conn,$sql);
									while ($r=mysqli_fetch_assoc($data)) {
										?>
										<tr>
										<td><?php echo $r['id'];?></td>
										<td><?php echo $r['looking'];?></td>
										<td><?php echo $r['postal_code'];?></td>
										<td><?php echo $r['datetime'];?></td>
										<td><?php echo $r['name'];?></td>
										<td><?php echo $r['email'];?></td>
										<td><?php echo $r['phone_no'];?></td>
										<td><?php echo $r['address'];?></td>
										<td><?php echo $r['comment'];?></td>
										<td>
											<form action="" method="POST" onclick="return confirm('Are you sure you want to delete this record?')">
												<input type="hidden" value="<?php echo $r['id'];?>" name="del_id">
												<button name="del_btn" class="btn btn-danger btn-sm">Delete</button>
											</form>
										</td>
									</tr>
										<?php
									}
									?>
									
								</tbody>
								
							</table>
						</div>
					</div>
				</div>


    </div>
  </main>
  <!--end main wrapper-->
<?php include 'footer.php';?>
