<?php include 'header.php';?>

<body>

<?php include 'navbar.php';?>

   <!--start sidebar-->
<?php include 'sidebar.php';?>
   
<!--end sidebar-->

  <!--start main wrapper-->
 
  <!--start main wrapper-->
  <main class="main-wrapper">
    <div class="main-content">
      <!--breadcrumb-->
      <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Dashboard</div>
        <div class="ps-3">
        
        </div>
       
      </div>
      <!--end breadcrumb-->


      <div class="row">
      

      <?php

                  $sql="SELECT * FROM quotations";
                  $data=mysqli_query($conn,$sql);
                  ?>
        <div class="col-12 col-lg-6 col-xxl-6 d-flex">
          <div class="card rounded-4 w-100">
            <div class="card-body">
              <div class="mb-3 d-flex align-items-center justify-content-between">
                <div
                  class="wh-42 d-flex align-items-center justify-content-center rounded-circle bg-primary bg-opacity-10 text-primary">
                  <span class="material-icons-outlined fs-5">shopping_cart</span>
                </div>
                <div>
                </div>
              </div>
              <div>
                <h4 class="mb-0"><?php echo mysqli_num_rows($data);?></h4>
                <p class="mb-3">Total Website Quotations</p>
              </div>
            </div>
          </div>
        </div>





        <?php

                  $sql="SELECT * FROM postal_codes";
                  $data=mysqli_query($conn,$sql);
                  ?>
        <div class="col-12 col-lg-6 col-xxl-6 d-flex">
          <div class="card rounded-4 w-100">
            <div class="card-body">
              <div class="mb-3 d-flex align-items-center justify-content-between">
                <div
                  class="wh-42 d-flex align-items-center justify-content-center rounded-circle bg-primary bg-opacity-10 text-primary">
                  <span class="material-icons-outlined fs-5">shopping_cart</span>
                </div>
                <div>
                </div>
              </div>
              <div>
                <h4 class="mb-0"><?php echo mysqli_num_rows($data);?></h4>
                <p class="mb-3">Total Postal Codes</p>
              </div>
            </div>
          </div>
        </div>
       

      </div><!--end row-->


    </div>
  </main>
  <!--end main wrapper-->
  <!--end main wrapper-->
<?php include 'footer.php';?>