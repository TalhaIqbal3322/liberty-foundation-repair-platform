<?php include 'header.php';?>

<body>

<?php include 'navbar.php';?>

   <!--start sidebar-->
<?php include 'sidebar.php';?>


  <!--start main wrapper-->
  <main class="main-wrapper">
    <div class="main-content">
      <!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Event Details</div>
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
										<th>Title</th>
										<th>Description</th>
										<th>Date</th>
                    <th>Type</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
										<?php

									$sql="SELECT * FROM events ORDER BY id DESC";
									$data=mysqli_query($conn,$sql);
									while ($r=mysqli_fetch_assoc($data)) {
										?>
										<tr>
										<td><?php echo $r['id'];?></td>
										<td><?php echo $r['event_name'];?></td>
										<td><?php echo $r['event_desc'];?></td>
										<td><?php echo $r['event_date'];?></td>
										<td><?php echo $r['event_type'];?></td>
										<td></td>
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
