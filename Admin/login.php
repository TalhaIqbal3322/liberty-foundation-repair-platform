
<!doctype html>
<html lang="en" data-bs-theme="blue-theme">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Liberty foundation repair - Admin</title>
  <!--favicon-->
	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png">
  <!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet">
	<script src="assets/js/pace.min.js"></script>

  <!--plugins-->
  <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/plugins/metismenu/metisMenu.min.css">
  <link rel="stylesheet" type="text/css" href="assets/plugins/metismenu/mm-vertical.css">
  <!--bootstrap css-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">
  <!--main css-->
  <link href="assets/css/bootstrap-extended.css" rel="stylesheet">
  <link href="sass/main.css" rel="stylesheet">
  <link href="sass/dark-theme.css" rel="stylesheet">
  <link href="sass/blue-theme.css" rel="stylesheet">
  <link href="sass/responsive.css" rel="stylesheet">

  </head>

  <body>

    <!--authentication-->
    <div class="auth-basic-wrapper d-flex align-items-center justify-content-center">
      <div class="container-fluid my-5 my-lg-0">
        <div class="row">
           <div class="col-12 col-md-8 col-lg-6 col-xl-5 col-xxl-4 mx-auto">
            <div class="card rounded-4 mb-0 border-top border-4 border-primary border-gradient-1">
              <div class="card-body p-5">
                <div class="text-center">
                  <img src="logo.png" class="mb-4" style="width:80px;
                  border-radius: 20px;" alt="">
                  </div>
                  <hr>
                  <h4 class="fw-bold">Admin Login</h4>
                  <p class="mb-0">Enter your admin credentials to login your admin account on EV Committee App</p>

                  <div class="form-body my-5">
										<form class="row g-3">
											<div class="col-12">
												<label for="inputEmailAddress" class="form-label">Email</label>
												<input type="text" class="form-control" id="phone_or_email" placeholder="Enter your email">
											</div>
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">Password</label>
												<div class="input-group" id="show_hide_password">
													<input type="password" class="form-control border-end-0" id="password" placeholder="Enter Password"> 
                          <a href="javascript:;" class="input-group-text bg-transparent"><i class="bi bi-eye-slash-fill"></i></a>
												</div>
											</div>
									
											
											<div class="col-12">
												<div class="d-grid">
													<button id="login_btn" type="button" class="btn btn-grd-primary">Login</button>
												</div>
											</div>
											
										</form>
									</div>

              
               

              </div>
            </div>
           </div>
        </div><!--end row-->
     </div>
    </div>
    <!--authentication-->


    <!--plugins-->
    <script src="assets/js/jquery.min.js"></script>

    <script>
      $(document).ready(function () {
        $("#show_hide_password a").on('click', function (event) {
          event.preventDefault();
          if ($('#show_hide_password input').attr("type") == "text") {
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').addClass("bi-eye-slash-fill");
            $('#show_hide_password i').removeClass("bi-eye-fill");
          } else if ($('#show_hide_password input').attr("type") == "password") {
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass("bi-eye-slash-fill");
            $('#show_hide_password i').addClass("bi-eye-fill");
          }
        });
      });
    </script>
  

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>


<script>
$(document).ready(function() {
    $('#login_btn').on('click', function() {
        $("#login_btn").attr("disabled", "disabled");

        var phone_or_email = $('#phone_or_email').val();
        var password = $('#password').val();

        if (phone_or_email !== "" && password !== "") {
            if (password.length >= 6) {
                $.ajax({
                    url: "ajax/user_login.php",
                    type: "POST",
                    data: {
                        phone_or_email: phone_or_email,
                        password: password
                    },
                    cache: false,
                    success: function(dataResult) {
                        var dataResult = JSON.parse(dataResult);
                        if (dataResult.statusCode == 200) {
                            Swal.fire({
                                icon: "success",
                                title: "Success",
                                text: "Login successful"
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href = 'index'; // Redirect to the home page
                                }
                            });
                        } else if (dataResult.statusCode == 201) {
                            showError('Incorrect password. Please try again.');
                        } else if (dataResult.statusCode == 202) {
                            showError('User not found. Please check your user id or email.');
                        }
                    }
                });
            } else {
                showError('Password must be at least 6 characters long.');
            }
        } else {
            showError('Please fill all fields.');
        }
    });

    function showError(message) {
        Swal.fire({
            icon: "error",
            title: "Validation Error",
            text: message
        });
        $("#login_btn").removeAttr("disabled");
    }
});
</script>

  </body>

</html>