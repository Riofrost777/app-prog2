<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
  <title>#2019skripsi</title>
  <!-- Bootstrap Core CSS -->
  <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="css/helper.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>

<style media="screen">
  .backg{
    background-image: url('images/bg-02.jpg');
    background-size: cover;
    background-attachment: fixed;
    background-repeat: no-repeat;
  }
</style>

<body class="fix-header fix-sidebar backg">
  <!-- Preloader - style you can find in spinners.css -->
  <div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
      <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
    </svg>
  </div>
  <!-- Main wrapper  -->
  <div id="main-wrapper">
    <div class="unix-login">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-lg-4">
            <div class="login-content card">
              <div class="login-form">
                <h4>Register</h4>
                <form method="post" action="index.php?send=proses/register-proses">
                  <div class="form-group">
                    <label>User Name</label>
                    <input type="text" class="form-control" required placeholder="User Name" value="" name="username" id="usernameRegister" required data-error="Please enter your username">
                  </div>
                  <div class="form-group">
                    <label>Email address</label>
                    <input type="email" class="form-control" required placeholder="Email" value="" name="email" id="emailRegister" required data-error="Please enter your email">
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" required placeholder="Password" value="" name="password" id="passwordRegister" required data-error="Please enter your password">
                  </div>
                  <div class="form-group">
                    <label>Phone Number</label>
                    <input type="text" class="form-control" required placeholder="Phone Number" value="" name="phoneNumber" id="phoneNumberRegister" required data-error="Please enter your phone number">
                  </div>
                  <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" required placeholder="Address" value="" name="address" id="addressRegister" required data-error="Please enter your address">
                  </div>
                  <!-- <div class="checkbox">
                    <label>
                    	<input type="checkbox"> Agree the terms and policy
                    </label>
                  </div> -->
                  <button type="button" class="btn btn-primary btn-flat m-b-30 m-t-30" id="signup">Register</button>
                  <div class="register-link m-t-15 text-center">
                    <p>Already have account ? <a href="index.php?send=login"> Sign in</a></p>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Wrapper -->
  <!-- All Jquery -->
  <script src="js/lib/jquery/jquery.min.js"></script>
  <!-- Bootstrap tether Core JavaScript -->
  <script src="js/lib/bootstrap/js/popper.min.js"></script>
  <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
  <!-- slimscrollbar scrollbar JavaScript -->
  <script src="js/jquery.slimscroll.js"></script>
  <!--Menu sidebar -->
  <script src="js/sidebarmenu.js"></script>
  <!--stickey kit -->
  <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
  <!--Custom JavaScript -->
  <script src="js/custom.min.js"></script>
  <!-- Sweet Alert -->
  <script src="js/sweetalert.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#signup').click(function() {
        var userRegister = $('#usernameRegister').val();
        var emailRegister = $('#emailRegister').val();
        var passRegister = $('#passwordRegister').val();
        var phoneNumberRegister = $('#phoneNumberRegister').val();
        var addressRegister = $('#addressRegister').val();
        $.post( "proses/register-proses.php",
          {u: userRegister, e: emailRegister, p: passRegister, n: phoneNumberRegister, a: addressRegister},
          function( data ) {
            console.log(data);
            if(data == 1) {
              swal("Congratulation!", "You have successfully sign up!", "success")
                .then ((value) => {
                  window.location = "index.php?send=home";
                });
            }
            else if (data == 2) {
              swal("Oops...", "Username already exist!", "error");
            }
            else {
              swal("Oops...", "Something wrong, please call 911!", "error");
            }
        });
      });
    });
  </script>
</body>
</html>
